<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->	
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>resource/images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/vendor/animate/animate.css">
        <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/css/util.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/css/main.css">
        <!--===============================================================================================-->
    </head>
    <body>

        <div class="limiter">
            <div class="container-login100">
                <h4>
                    <font color="white">
                    <?php
                    $messages_info = $this->session->userdata('save_messages');
                    if (isset($messages_info)) {
                        echo $messages_info;
                        $this->session->unset_userdata('save_messages');
                    }
                    ?>
                    </font>
                </h4>
                <div class="wrap-login100">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="<?php echo base_url(); ?>resource/images/logo.jpg" alt="IMG">
                    </div>

                    <form class="login100-form validate-form" method="post" action="<?php echo base_url(); ?>welcome/login">
                        <span class="login100-form-title">
                            Member Login
                        </span>
                        
                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input100" type="text" name="email" placeholder="Email">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input class="input100" type="password" name="password" placeholder="Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="text-center">
                            <input type="radio" name="renter" value="renter">&nbsp;Renter</label>&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="owner" value="owner">&nbsp;Owner</label>
                        </div>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>

                        <div class="text-center p-t-12">
                            <span class="txt1">
                                Register for
                            </span>
                            <a class="txt2" href="<?php echo base_url(); ?>welcome/owner_reg">
                                Owner / 
                            </a>
                            <a class="txt2" href="<?php echo base_url(); ?>welcome/renter_reg">
                                Renter
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>




        <!--===============================================================================================-->	
        <script src="<?php echo base_url(); ?>resource/vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url(); ?>resource/vendor/bootstrap/js/popper.js"></script>
        <script src="<?php echo base_url(); ?>resource/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url(); ?>resource/vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url(); ?>resource/vendor/tilt/tilt.jquery.min.js"></script>
        <script >
            $('.js-tilt').tilt({
                scale: 1.1
            })
        </script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url(); ?>resource/js/main.js"></script>

    </body>
</html>