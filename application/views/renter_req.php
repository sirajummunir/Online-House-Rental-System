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
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>welcome/renter">HOME</a></li>
<!--                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>welcome/post_ad">POST AD</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>welcome/my_ad">MY ADS</a></li>-->
                            <li class="nav-item active"><a class="nav-link" href="<?php echo base_url(); ?>welcome/renter_req">REQUEST</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>welcome/logout">LOGOUT</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- End header -->
        <div class="customer-reviews-box">
            <div class="container" style="margin-top:80px">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading-title text-center">
                            <h2>Your Visiting Requests</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <table class="table table-striped table-bordered text-center" style="font-family: 'Arbutus Slab', serif;">
                        <thead>
                            <tr>
                                <th scope="col">AD Title</th>
                                <th scope="col">Available Month</th>
                                <th scope="col">Bedroom</th>
                                <th scope="col">Balcony</th>
                                <th scope="col">Kitchen</th>
                                <th scope="col">Washroom</th>
                                <th scope="col">Details</th>
                                <th scope="col">Visiting Date</th>
                                <th scope="col">Visiting Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                    foreach ($renter_req as $value) {
                        if ($value->owner_id == $this->session->userdata('owner_id')) {
                            ?>
                            <tr>
                                <th scope="row"><?php echo $value->title; ?></th>
                                <td><?php echo $value->month; ?></td>
                                <td><?php echo $value->bedroom; ?></td>
                                <td><?php echo $value->balcony; ?></td>
                                <td><?php echo $value->kitchen; ?></td>
                                <td><?php echo $value->washroom; ?></td>
                                <td><?php echo $value->details; ?></td>
                                <td><?php echo $value->visiting_date; ?></td>
                                <td><?php echo $value->visiting_time; ?></td>
                            </tr>
                            <?php
                        }
                    }
                    ?> 
                        </tbody>
                    </table>
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
    <!-- End Footer 

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