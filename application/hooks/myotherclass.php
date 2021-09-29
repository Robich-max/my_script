<?

class MyOtherClass {

    function MyOtherfunction() {

        $CI =& get_instance();

        $row = $CI->db->get_where('settings', array('id'))->row();

        $CI->config->set_item('base_url', $row->base_url);

    }

}