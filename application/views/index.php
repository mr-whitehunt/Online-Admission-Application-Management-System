<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <div id="carouselId" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <?php
            $item_class = ' active';
            foreach($get_slider as $slider): ?>
            <div class="carousel-item <?php echo $item_class; ?>" style="background-image: linear-gradient(rgba(0, 0, 0, 0.30), rgba(0, 0, 0, 0.30)), url('<?php echo $slider->slider_image; ?>');">
              <div class="caption">
                <h1><?php echo $slider->slider_title; ?></h1>
                <h2><?php echo $slider->slider_desc; ?></h2>
              </div>
            </div>
            <?php
            $item_class = '';
            endforeach; ?>
          </div>
        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--<div class="intro">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-5 d-none d-md-block img-container">
                    <div class="img-wrapper">
                        <img src="assets/img/img_01.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="content-container">
                        <div class="title-inner">
                            <p class="title-small">Greetings</p>
                            <h2 class="title"><span class="watermark"></span>Welcome to <span>Shree<br> Vinayaka </span>Polytechnic</h2>
                        </div>
                        <div class="description">
                            <p>Online learning offers a new way to explore subjects you’re tomfoolery on the cheesed off I dropped a clanger owt to do with me bits passionate about explore subjects you’re tomfoolery trusted our partner online course.</p>
                            <ul>
                                <li>Upskill your organization.</li>
                                <li>Access more then 100K online courses</li>
                                <li>Learn the latest skills</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <div id="about" class="about">
        <div class="container-fluid">
            <div class="row">
                <?php foreach($get_about as $about): ?>
                <div class="col-sm-12 col-md-6">
                    <div class="title-inner">
                        <p class="title-small">Greetings</p>
                        <h2 class="title"><?php echo $about->about_title; ?></h2>
                    </div>
                    <div class="description">
                        <?php echo $about->about_desc; ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 img-container">
                    <div class="img-wrapper">
                        <img src="<?php echo $about->about_image; ?>" class="img-fluid" alt="">
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="statistics">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="left-container">
                        <div class="element-wrap">
                            <div class="title-inner">
                                <span class="sub-text">Statistics</span>
                                <h2 class="title"><span class="watermark"></span>720+ <span>Students  <br>Trusted </span> our online courses.</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-8">
                    <div class="right-container">
                        <div class="card-deck">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="counter-icon">
                                        <img src="https://demo.auburnforest.com/wordpress/firecamp/wp-content/uploads/2021/05/student.svg" alt="image">
                                    </div>
                                    <div class="count-text">
                                        <div class="count-number">
                                            <span class="rs-counter">24</span>
                                            <span class="prefix">K+</span>
                                        </div>
                                        <span class="title">Students Enrolled</span>	  
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="counter-icon">
                                        <img src="https://demo.auburnforest.com/wordpress/firecamp/wp-content/uploads/2021/05/school.svg" alt="image">
                                    </div>
                                    <div class="count-text">
                                        <div class="count-number">
                                            <span class="rs-counter">18</span>
                                            <span class="prefix">K+</span>
                                        </div>
                                        <span class="title">Courses & videos</span>	  
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="counter-icon">
                                        <img src="https://demo.auburnforest.com/wordpress/firecamp/wp-content/uploads/2021/05/geography.svg" alt="image">
                                    </div>
                                    <div class="count-text">
                                        <div class="count-number">
                                            <span class="rs-counter">2</span>
                                            <span class="prefix">K+</span>
                                        </div>
                                        <span class="title">Total Countries</span>	  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="achievements">
        <div class="container-fluid">
            <div class="inner-title text-center">
                <h3 class="title">Our Achievbementes</h3>
                <p class="sub-title">Replenish him third creature and meat blessed void a fruit gathered you’re, they’re
                    <br>two waters own morning gathered greater shall had behold had seed.</p>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="counter-icon icon1">
			    		        <img src="https://demo.auburnforest.com/wordpress/firecamp/wp-content/uploads/2020/06/course.png" alt="image">
                            </div>
                            <div class="count-text">
                                <div class="count-number">
                                    <span class="rs-counter">50</span>
                                    <span class="prefix">+</span>
                                </div>
                                <span class="title">Total Courses</span>	
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="counter-icon icon2">
			    		        <img src="https://demo.auburnforest.com/wordpress/firecamp/wp-content/uploads/2020/06/student.png" alt="image">
                            </div>
                            <div class="count-text">
                                <div class="count-number">
                                    <span class="rs-counter">45</span>
                                    <span class="prefix">+</span>
                                </div>
                                <span class="title">Total student</span>	
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="counter-icon icon3">
			    		        <img src="https://demo.auburnforest.com/wordpress/firecamp/wp-content/uploads/2020/06/position.png" alt="image">
                            </div>
                            <div class="count-text">
                                <div class="count-number">
                                    <span class="rs-counter">109</span>
                                    <span class="prefix">+</span>
                                </div>
                                <span class="title">Global position</span>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="video">
        <div class="container-fluid">
            <div class="video-container">
                <div class="rs-video">
                    <div class="overly-border">
                      <a class="popup-videos" href="#">
                          <i class="fa fa-play"></i>
                      </a>
                    </div>
                    <div class="video-desc">Watch intro <br>video</div>  
                </div>
            </div>
        </div>
    </section>-->
    <div id="courses" class="courses">
        <div class="container-fluid">
            <div class="title-inner text-center">
                <p class="title-small">Explore Courses</p>
                <h2 class="title">Courses Offered On our Collage</h2>
            </div>
            <div class="courses-container">
                <div class="row">
                    <?php foreach($get_department as $department): ?>
                    <div class="card-container col-sm-12 col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo $department->department_image; ?>">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $department->department_name; ?></h4>
                                <p class="card-text">Duriation <?php echo $department->department_duriation; ?> years</p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <?php foreach($get_grivance as $grivance): ?>
    <div id="grivance" class="grivance" style="background-image: url('<?php echo $grivance->grivance_image; ?>');">
        <div class="container-fluid">
            <div class="text-center">
                <div class="title-inner">
                    <p class="title-small">Online Grievance</p>
                    <h2 class="title"><span class="watermark"></span><?php echo $grivance->grivance_title; ?></h2>
                </div>
                <div class="description">
                    <?php echo $grivance->grivance_desc; ?>
                </div>
                <div class="grivance-btn-link">
                    <a href="<?php echo base_url(); ?>grivance">Cick Here</a>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <div id="contact" class="contact">
        <div class="container">
            <div class="title-inner">
                <p class="title-small">Let's talk</p>
                <h2 class="title">Get in Touch</h2>
            </div>
            <div class="row pt-5">
                <div class="col-sm-12 col-md-6 mb-4">
                    <div id="error"></div>
                    <form id="contactform" method="post" action="<?php echo base_url(); ?>frontoffice_controller/add_enquiry">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="contact_type" id="contact_Type" required>
                                <option value="">Select</option>
                                <?php foreach($get_enquiry_cat as $enquiry_cat): ?>
                                <option value="<?php echo $enquiry_cat->enquiry_cat_id; ?>"><?php echo $enquiry_cat->enquiry_type; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea name="description" cols="30" rows="5" class="form-control" name="description" id="description" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg">Submit Now</button>
                        </div>
                    </form>
                </div>
                <?php foreach($get_general_settings as $general_settings): ?>
                <div class="col-sm-12 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Contact Info</h4>
                            <div class="elementor-icon-box-title">
                                <h5 class="elementor-icon-box-title">
                                    <span>Email</span>
                                </h5>
                                <p class="elementor-icon-box-description"><?php echo $general_settings->institute_email; ?></p>
                            </div>
                            <div class="elementor-icon-box-title">
                                <h5 class="elementor-icon-box-title">
                                    <span>Phone</span>
                                </h5>
                                <p class="elementor-icon-box-description"><?php echo $general_settings->institute_phone; ?></p>
                            </div>
                            <div class="elementor-icon-box-title">
                                <h5 class="elementor-icon-box-title">
                                    <span>Address</span>
                                </h5>
                                <p class="elementor-icon-box-description"><?php echo $general_settings->institute_address; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>