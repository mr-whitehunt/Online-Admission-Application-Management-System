<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">General Settings</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
              <li class="breadcrumb-item active">General Settings</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div id="error"></div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <?php foreach($get_general_settings as $general_settings): ?>
          <div class="col-sm-12 col-md-2">
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <img src="<?php echo $general_settings->institute_logo; ?>" alt="logo" class="img-fluid">
                  <form id="logoupload" method="post" action="<?php echo base_url(); ?>settings_controller/upload_logo" enctype="multipart/form-data">
                    <div class="form-group file-area mt-4">
                      <input type="file" class="form-control" name="logo" id="logo" required>
                      <div class="file-dummy">
                        <div class="success">click on upload</div>
                        <div class="default">Please select logo</div>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="submit" value="upload" class="btn btn-primary btn-block">
                    </div>
                  </form>
                  <form id="faviconupload" method="post" action="<?php echo base_url(); ?>settings_controller/upload_logo" enctype="multipart/form-data">
                    <div class="form-group file-area mt-4">
                      <input type="file" class="form-control" name="favicon" id="favicon" required>
                      <div class="file-dummy">
                        <div class="success">click on upload</div>
                        <div class="default">Please select favicon 32*32</div>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="submit" value="upload" class="btn btn-primary btn-block">
                    </div>
                  </form>
                </div>
              </div>
          </div>
          <div class="col-sm-12 col-md-10">
              <div class="card">
                <div class="card-header">
                    <h3 class="card-title">General Settings</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <form id="generalsettingsForm">
                      <div class="form-group">
                        <label>Institute Name*</label>
                        <input type="text" class="form-control" name="institute_name" id="institute_name" value="<?php echo $general_settings->institute_name; ?>" placeholder="Institute Name">
                      </div>
                      <div class="form-group">
                        <label>Institute Code*</label>
                        <input type="text" class="form-control" name="institute_code" id="institute_code" value="<?php echo $general_settings->institute_code; ?>" placeholder="Institute code">
                      </div>
                      <div class="form-group">
                        <label>Institute Tagline*</label>
                        <input type="text" class="form-control" name="tagline" id="tagline" value="<?php echo $general_settings->institute_tagline; ?>" placeholder="Institutte Tagline">
                      </div>
                      <div class="form-group">
                        <label>Institute Address*</label>
                        <input type="text" class="form-control" name="address" id="address" value="<?php echo $general_settings->institute_address; ?>" placeholder="Institutte Address">
                      </div>
                      <div class="form-group">
                        <label>Phone*</label>
                        <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $general_settings->institute_phone; ?>" placeholder="Phone">
                      </div>
                      <div class="form-group">
                        <label>Email*</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?php echo $general_settings->institute_email; ?>" placeholder="Email">
                      </div>
                      <hr>
                      <h4 class="mt-4 mb-2"><small>Session</small></h4>
                      <div class="form-group">
                          <label>Session*</label>
                          <select class="form-control" name="session" id="session">
                          <option value="">Select Session</option>
                          <?php foreach($get_session as $get_session_details): ?>
                          <option value="<?php echo $get_session_details->session_id; ?>" <?php if($get_session_details->session_status == 1) echo 'selected' ?>><?php echo $get_session_details->session; ?></option>
                          <?php endforeach; ?>
                          </select>
                      </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                  </form>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
          </div>
        <?php endforeach; ?>
        </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->