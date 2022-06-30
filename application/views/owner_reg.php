<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Owner Registration</title>
        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Font-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/css/montserrat-font.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
        <!-- Main Style Css -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/style.css"/>
    </head>
    <body class="form-v10">
        <div class="page-content">
            <div class="form-v10-content">
                <form class="form-detail" action="<?php echo base_url(); ?>welcome/owner_regi" method="post" id="myform">
                    <div class="form-left">
                        <h2>General Infomation</h2>
                        <div class="form-group">
                            <div class="form-row form-row-1">
                                <input type="text" name="first_name" id="first_name" class="input-text" placeholder="First Name" required>
                            </div>
                            <div class="form-row form-row-2">
                                <input type="text" name="last_name" id="last_name" class="input-text" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <select name="occupation">
                                <option class="option" value="">Occupation</option>
                                <option class="option" value="Businessman">Businessman</option>
                                <option class="option" value="Service Holder">Service Holder</option>
                                <option class="option" value="Doctor">Doctor</option>
                                <option class="option" value="Engineer">Engineer</option>
                                <option class="option" value="">None of these</option>
                            </select>
                            <span class="select-btn">
                                <i class="zmdi zmdi-chevron-down"></i>
                            </span>
                        </div>
                        <div class="form-row">
                            <select name="position">
                                <option class="option" value="">Position</option>
                                <option class="option" value="Director">Director</option>
                                <option class="option" value="Manager">Manager</option>
                                <option class="option" value="Employee">Employee</option>
                                <option class="option" value="">None of these</option>
                            </select>
                            <span class="select-btn">
                                <i class="zmdi zmdi-chevron-down"></i>
                            </span>
                        </div>
                        <div class="form-group">
                            <div class="form-row form-row-1">
                                <select name="gender">
                                    <option value="">Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <span class="select-btn">
                                    <i class="zmdi zmdi-chevron-down"></i>
                                </span>
                            </div>
                            <div class="form-row form-row-2">
                                <input type="text" name="nationality" class="company" id="company" placeholder="Nationality" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row form-row-1">
                                <input type="text" name="nid" class="business" id="business" placeholder="NID No." required>
                            </div>
                            <div class="form-row form-row-2">
                                <input type="text" name="password" class="business" id="business" placeholder="Password" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-right">
                        <h2>Contact Details</h2>
                        <div class="form-row">
                            <input type="text" name="house_name" class="street" id="street" placeholder="House Name" required>
                        </div>
                        <div class="form-group">
                            <div class="form-row form-row-1">
                                <input type="text" name="house_no" class="zip" id="zip" placeholder="House No." required>
                            </div>
                            <div class="form-row form-row-1">
                                <input type="text" name="road_no" class="zip" id="zip" placeholder="Road No." required>
                            </div>
                            <div class="form-row form-row-2">
                                <input type="text" name="block" class="zip" id="zip" placeholder="Block" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row form-row-1">
                                <input type="text" name="area_name" id="your_email" class="input-text" placeholder="Area Name">
                            </div>
                            <div class="form-row form-row-2">
                                <select name="city">
                                    <option value="">City</option>
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Chattogram">Chattogram</option>
                                    <option value="Rajsahi">Rajsahi</option>
                                </select>
                                <span class="select-btn">
                                    <i class="zmdi zmdi-chevron-down"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row form-row-1">
                                <input type="text" name="email" class="code" id="code" placeholder="Your Email" required>
                            </div>
                            <div class="form-row form-row-2">
                                <input type="text" name="mobile" class="phone" id="phone" placeholder="Phone Number" required>
                            </div>
                        </div>
                        <div class="form-row-last">
                            <input type="submit" name="register" class="register" value="Register">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>