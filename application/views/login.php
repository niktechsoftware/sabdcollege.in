<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>assets/images/favicon.ico">
        <title>Edumart - Educational Template</title>
        <!-- Reset CSS -->
        <link href="<?php echo base_url()?>css/reset.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="<?php echo base_url()?>css/fonts.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">
        <!-- Iconmoon -->
        <link href="<?php echo base_url()?>assets/css/iconmoon.css" rel="stylesheet">
        <!-- Custom Style -->
        <link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet">
    </head>
    <body class="fill-bg">

        <!-- Start Preloader -->
        <div id="loading">
            <div class="element">
                <div class="sk-folding-cube">
                    <div class="sk-cube1 sk-cube"></div>
                    <div class="sk-cube2 sk-cube"></div>
                    <div class="sk-cube4 sk-cube"></div>
                    <div class="sk-cube3 sk-cube"></div>
                </div>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Start Login -->
        <section class="login-wrapper">
            <div class="inner">
                <div class="login">
                    <div class="login-logo"> <a href="index-2.html"><img src="<?php echo base_url()?>assets/images/login-logo.png" class="img-responsive" alt=""></a> </div>
                    <div class="head-block">
                        <h1>LOGIN  Now</h1>
                    </div>
                    <div class="cnt-block">
                        <form action="#" method="get" class="form-outer">
                            <input name="Username or Email" type="text" placeholder="Username or Email">
                            <input name="password" type="password" placeholder="password">
                            <div class="button-outer">
                                <button class="btn">Login now <span class="icon-more-icon"></span></button>
                                <div class="or hidden-xs">or</div>
                                <button class="btn register">Register now <span class="icon-more-icon"></span></button>
                            </div>
                            <div class="remember">
                                <div class="check">
                                    <input type="checkbox" id="test1" />
                                    <label for="test1">Remember me</label>
                                </div>
                                <a href="#" class="forgot"><span>?</span>Forgot password</a> </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Login --> 

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
        <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script> 
        <!-- Bootsrap JS --> 
        <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script> 
        <!-- Custom JS --> 
        <script src="<?php echo base_url()?>assets/js/custom.js"></script>
    </body>
</html>