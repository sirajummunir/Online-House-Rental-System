<!DOCTYPE html>
<html lang="en"><!-- Basic -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Site Metas -->
        <title>BashaVara.Com</title>  
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Site Icons -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>resources/images/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>resources/images/apple-touch-icon.png">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/bootstrap.min.css">    
        <!-- Site CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/style.css">    
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/responsive.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/custom.css">
    </head>
    <body>
        <!-- Start header -->
        <header class="top-navbar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <img src="<?php echo base_url(); ?>resources/images/main.png" alt="" />
                    </a>
                    <p style="font-size:25pt; margin-top:10px; font-weight:bold;color:#CFA671">BASHAVARA.COM</p>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbars-rs-food">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="<?php echo base_url(); ?>welcome/renter">HOME</a></li>
<!--                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>welcome/post_ad">POST AD</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>welcome/my_ad">MY ADS</a></li>-->
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>welcome/renter_req">REQUEST</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>welcome/logout">LOGOUT</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Start Menu -->
        <div class="menu-box">
            <div class="container" style="margin-top:80px">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="special-menu text-center">
                            <div class="button-group filter-button-group">
                                <button class="active" data-filter="*">All</button>
                                <button data-filter=".Family">Family</button>
                                <button data-filter=".Bachelor">Bachelor</button>
                                <button data-filter=".One_Room">One Room</button>
                                <button data-filter=".One_Seat">One Seat</button>
                                <button data-filter=".Two_Seat">Two Seat</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <h4 class="text-center">
                    <font color="green">
                    <?php
                    $messages_info = $this->session->userdata('save_messages');
                    if (isset($messages_info)) {
                        echo $messages_info;
                        $this->session->unset_userdata('save_messages');
                    }
                    ?>
                    </font>
                </h4>
                <div class="row special-list">
                    <?php
                    foreach ($ads as $value) {
                        ?>
                        <div class="col-lg-4 col-md-6 special-grid <?php echo $value->category; ?>">
                            <div class="gallery-single fix">
                                <img src="<?php echo base_url(); ?><?php echo $value->image; ?>" class="img-fluid" style="height:210px">
                                <div class="why-text text-center">
                                    <h4><?php echo $value->title; ?></h4>
                                    <h5>Available Month : <?php echo $value->month; ?></h5>
                                    <h5>Area: <?php echo $value->area_name; ?>&nbsp;&nbsp;Bedroom : <?php echo $value->bedroom; ?></h5>
                                    <h5>Balcony : <?php echo $value->balcony; ?>&nbsp;&nbsp;&nbsp;Washroom : <?php echo $value->washroom; ?></h5>
                                    <h5>Mobile : <?php echo $value->mobile; ?></h5>
                                    <?php
                                        if($this->session->userdata('block')!=1){
                                    ?>
                                    <a class="btn" style="padding:2px; font-family: 'Arbutus Slab', serif; border-color: red; background: red; color: white " href="<?php echo base_url(); ?>welcome/report_owner/<?php echo $value->owner_id; ?>" onclick="return confirm('Are you sure? you want to Report this Owner.')">Report</a>
                                    <a class="btn" style="padding:2px; font-family: 'Arbutus Slab', serif; border-color: green; background: green; color: white " href="<?php echo base_url(); ?>welcome/send_req/<?php echo $value->ad_id; ?>">Send Visiting Request</a>
                                <?php
                                        }
                                        ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="company-name">All Rights Reserved. &copy; 2020 <a href="#" style="margin-left: 200px"></a> Developed By : 
                            <a href="#">Team Sparrow</a></p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="<?php echo base_url(); ?>resources/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url(); ?>resources/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>resources/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="<?php echo base_url(); ?>resources/js/jquery.superslides.min.js"></script>
    <script src="<?php echo base_url(); ?>resources/js/images-loded.min.js"></script>
    <script src="<?php echo base_url(); ?>resources/js/isotope.min.js"></script>
    <script src="<?php echo base_url(); ?>resources/js/baguetteBox.min.js"></script>
    <script src="<?php echo base_url(); ?>resources/js/form-validator.min.js"></script>
    <script src="<?php echo base_url(); ?>resources/js/contact-form-script.js"></script>
    <script src="<?php echo base_url(); ?>resources/js/custom.js"></script>
</body>
</html>
