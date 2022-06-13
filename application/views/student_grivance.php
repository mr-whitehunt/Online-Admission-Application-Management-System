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
              <?php endforeach; ?>
            </div>
            <div class="description">
              <p>Grievance Redressal Cell</p>
            </div>
          </div>
          <div class="box-content">
            <p>Please enter your register number and click on continue!.</p>
            <div id="error"></div>
            <form id="grivance_start_student" action="#">
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Student Registered Email">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Continue</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>