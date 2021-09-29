
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Private_area extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('id')) {
            redirect('login');
        }
    }

    function index()
    {
        echo '<br /><br /><br /><h1 align="center">Welcome User</h1>';
        echo '<p align="center"><a href="' . base_url() . 'private_area/useLogout">Logout</a></p>';
    }

    function useLogout()
    {
        $data = $this->session->all_userdata();
        foreach ($data as $row => $rows_value) {
            $this->session->unset_userdata($row);
        }
        redirect($this->agent->referrer());
        //redirect('login');
    }
}

?>
