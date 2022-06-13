<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <div class="contain d-flex align-items-center justify-content-center">
      <div class="box mt-5 mb-5 student-form text-center">
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
          <p>Please fill out all the details and click on submit!.</p>
          <div id="error"></div>
          <form action="#">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <input type="text" class="form-control" placeholder="Name">
                </div>
                <div class="col-sm-12 col-md-6">
                    <input type="text" class="form-control" placeholder="Email">
                </div>
            </div>
              <div class="row">
                <div class="col-sm-12 col-md-6">
                    <input type="text" class="form-control" placeholder="Phone">
                </div>
                  <div class="col-sm-12 col-md-6">
                      <input type="text" class="form-control" placeholder="Address">
                  </div>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                  <textarea cols="30" rows="5" class="form-control" placeholder="Grivance Description Ex: Any complaints details, requirement details, etc."></textarea>
              </div>
              <div class="form-group">
                  <button class="btn btn-primary btn-lg btn-block">Submit</button>
              </div>
          </form>
        </div>
      </div>
    </div>