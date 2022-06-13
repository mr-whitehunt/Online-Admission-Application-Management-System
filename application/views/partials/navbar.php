<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  </head>
  <body>
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <?php foreach($get_general_settings as $general_settings): ?>
    <div class="toolbar-area d-none d-lg-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="toolbar-contact mx-2 my-2">
                        <ul>
                            <li><a href=""><i class="fa fa-envelope-o fa-lg"></i>&nbsp;&nbsp;<?php echo $general_settings->institute_email; ?></a></li>
                            <li><i class="fa fa-phone fa-lg"></i>&nbsp;&nbsp;<?php echo $general_settings->institute_phone; ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="top-bar-right d-flex justify-content-end align-items-center">                        
                        <div class="toolbar-sl-share">
                            <ul class="clearfix">
                                <li><a href="<?php echo $general_settings->facebook_url; ?>"><i class="fa fa-facebook fa-lg"></i></a> </li>
                                <li><a href="<?php echo $general_settings->twitter_url; ?>"><i class="fa fa-twitter fa-lg"></i></a> </li>
                                <li><a href="<?php echo $general_settings->instagram_url; ?>"><i class="fa fa-instagram fa-lg"></i></a> </li>
                                <li><a href="<?php echo $general_settings->whatsapp_url; ?>"><i class="fa fa-whatsapp fa-lg"></i></a> </li>
                            </ul>
                        </div>
                        <div class="login-nav">
                            <div class="menu-top-menu-container">
                                <ul class="menu">
                                    <li><a href="<?php echo base_url(); ?>login">Login</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php foreach($get_general_settings as $general_settings): ?>
    <?php if($general_settings->online_application == 1): ?>
    <div class="apply-btn-mobile text-center d-block d-md-none">
        <a href="<?php echo base_url(); ?>online_application">Apply Now</a>
    </div>
    <?php endif; ?>
    <?php endforeach; ?>
    <nav class="navbar sticky-top navbar-expand-md">
        <div class="container-fluid mt-3 mb-3">
            <a class="navbar-brand" href="<?php echo base_url(); ?>">
                <img style="height: 36px" src="<?php echo $general_settings->institute_logo; ?>" alt="Logo">
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#courses">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#grivance">Grivance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <?php if($general_settings->online_application == '1'): ?>
                    <li class="nav-item d-none d-md-block">
                        <a class="btn btn-outline-primary" href="<?php echo base_url(); ?>online_application">Apply Now</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <?php endforeach; ?>