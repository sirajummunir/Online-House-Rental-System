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
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>welcome/owner">HOME</a></li>
                            <li class="nav-item active"><a class="nav-link" href="<?php echo base_url(); ?>welcome/post_ad">POST AD</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>welcome/my_ad">MY ADS</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>welcome/owner_req">REQUEST</a></li>
                            <!--                            <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                                                <a class="dropdown-item" href="blog.html">blog</a>
                                                                <a class="dropdown-item" href="blog-details.html">blog Single</a>
                                                            </div>
                                                        </li>-->
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>welcome/logout">LOGOUT</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- End header -->
        <!-- Start Reservation -->
        <div class="reservation-box">
            <div class="container" style="margin-top:80px">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading-title text-center">
                            <h2>Post Your AD</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="contact-block">
                            <form method="post" action="<?php echo base_url(); ?>welcome/ad" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="datepicker picker__input form-control" name="owner_id" type="hidden" value="<?php echo $owner_id=$this->session->userdata('owner_id'); ?>">
                                                <input class="datepicker picker__input form-control" name="title" type="text" value="" required data-error="Please enter A Title" placeholder="Enter A Title*">
                                            </div>                                 
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select class="custom-select d-block form-control" name="category" required data-error="Please select Category">
                                                    <option value="">Select Catagory*</option>
                                                    <option value="Family">Family</option>
                                                    <option value="Bachelor">Bachelor</option>
                                                    <option value="One_Room">One Room</option>
                                                    <option value="One_Seat">One Seat</option>
                                                    <option value="Two_Seat">Two Seat</option>
                                                </select>
                                            </div> 
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="time form-control picker__input" name="month" required data-error="Please enter available month" placeholder="Available Month*">
                                            </div>                                 
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select class="custom-select d-block form-control" name="bedroom" required data-error="Please select number of bedrooms">
                                                    <option value="">Select Number of Bedrooms*</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div> 
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select class="custom-select d-block form-control" name="balcony" data-error="Please select number of balconys">
                                                    <option value="">Select Number of Balconys</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select class="custom-select d-block form-control" name="kitchen" required data-error="Please select number of kitchens">
                                                    <option value="">Select Number of Kitchens*</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div> 
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select class="custom-select d-block form-control" name="washroom" required data-error="Please select number of washrooms">
                                                    <option value="">Select Number of Washrooms*</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div> 
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="hidden" name="active" class="form-control" value="1">
                                            </div> 
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea class="form-control" name="details" placeholder="Enter Details your AD" style="height: 130px"></textarea>
                                            </div>                                 
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="file" name="image" required data-error="Please Select a Image">
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="submit-button text-center">
                                            <input class="btn btn-common" type="submit" value="POST">
                                        </div>
                                    </div>
                                </div>            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Reservation -->

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