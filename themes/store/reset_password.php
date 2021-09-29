    
<?php include_once 'header.php'; ?>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

    <!-- Title Page -->
   <style type="text/css" media="screen">
    .form-control{
        background-color: #eedede;
    }
       
   </style>

  
   <style>
    .login-container{
    margin-top: 5%;
    margin-bottom: 5%;
}
.row {
    margin-right: unset;
   
}
.login-form-1{
    padding: 5%;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-1 h3{
    text-align: center;
    color: #333;
}
.login-form-2{
    padding: 5%;
    background: #0062cc;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-2 h3{
    text-align: center;
    color: #fff;
}
.login-container form{
    padding: 10%;
}
.btnSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    border: none;
    cursor: pointer;
}
.login-form-1 .btnSubmit{
    font-weight: 600;
    color: #fff;
    background-color: #0062cc;
}
.login-form-2 .btnSubmit{
    font-weight: 600;
    color: #0062cc;
    background-color: #fff;
}
.login-form-2 .ForgetPwd{
    color: #fff;
    font-weight: 600;
    text-decoration: none;
}
.login-form-1 .ForgetPwd{
    color: #0062cc;
    font-weight: 600;
    text-decoration: none;
}
.login-form-2 {
    
    background:  <?php echo $settings->login_color; ?>;
    }


    .login-form-1 .btnSubmit {
   
    color: <?php echo $settings->login_bt_tx_color; ?>;
    background-color: <?php echo $settings->login_bt_color; ?>;

  }

  .login-form-1 .ForgetPwd {
 
   color: <?php echo $settings->login_pg_tx_color; ?>;
}

.form-control {
    background-color:<?php echo $settings->input_field_color; ?>;
}

.login-form-2 .ForgetPwd {
    color: <?php echo $settings->rg_tx_color; ?>;

}

.login-form-2 .btnSubmit {
 
    color:<?php echo $settings->rg_bt_tx_color; ?>;
    background-color:<?php echo $settings->rg_bt_color; ?>;
}

   </style>

 





            <div class="container login-container">
                        <?php
                if($this->session->flashdata('message'))
                {
                    echo '
                    <div class="alert alert-success">
                        '.$this->session->flashdata("message").'
                    </div>
                    ';
                }
                ?>
            <div class="row">
                <div class="col-md-4">
             
                  
                </div>

                <div class="col-md-4 login-form-2">
                    <h3>Forget Password</h3>
                    <form  method="post" action="<?php echo base_url(); ?>Login/update_password">
                       
                   

                      <div class="form-group">
                         <label style="color: white;">Enter Password</label>
                      <input type="text" name="password" class="form-control" placeholder="Your Password *"/>
                        

                     </div>
                     <div class="form-group">
                         <label style="color: white;">Confirm Password</label>
                      <input type="text" name="cpassword" class="form-control"  placeholder="Your Password *"/>
                        

                     </div>

                   
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Submit" />
                        </div>
                        <div class="form-group">

                        </div>
                    </form>
                </div>
               <div class="col-md-4">
                  
                </div>
            </div>
        </div>

<?php include_once 'footer.php'; ?>

  

