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
    <div class="contain d-flex align-items-center justify-content-center">
      <div class="box-container">
        <div class="box text-center">
          <div class="inner-title">
            <div class="title">
              <h3>Grivance</h3>
            </div>
            <div class="sub-title">
              <h5><?php foreach($get_general_settings as $general_settings): ?>
              <?php echo $general_settings->institute_name; ?>
              <?php endforeach; ?></h5>
            </div>
            <div class="description">
              <p>Grievance Redressal Cell</p>
            </div>
          </div>
          <div class="box-content">
            <p>Please enter your otp that is sent to your email and click on continue!.</p>
            <form id="student_otp_verify" action="#">
                <div id="error"></div>
                <div class="form-group">
                    <input type="text" id="otp" name="otp" class="form-control" placeholder="One Time Password">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block">Continue</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>