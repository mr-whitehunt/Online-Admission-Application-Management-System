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
            <h1 class="m-0">Department</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Department</li>
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
          <div class="card card-primary">
            <div class="card-body">
              <?php foreach($get_department as $get_departemnt_details): ?>
              <div class="row">
                <div class="col-sm-12 col-md-6">
                  <form id="departmentform">
                      <div class="form-group">
                        <input type="text" name="department_id" id="department_id" class="form-control" value="<?php echo $get_departemnt_details->department_id; ?>" hidden>
                      </div>
                      <div class="form-group">
                        <label>Department Name</label>
                        <input type="text" class="form-control" name="department_name" id="department_name" value="<?php echo $get_departemnt_details->department_name; ?>" placeholder="Enter department name" required>
                      </div>
                      <div class="form-group">
                        <label>Department Image</label>
                        <input type="file" class="form-control" name="department_image" id="department_image">
                      </div>
                      <div class="form-group">
                        <label>Department Duriation</label>
                        <input type="text" class="form-control" name="department_duriation" id="department_duriation" value="<?php echo $get_departemnt_details->department_duriation; ?>" placeholder="Enter department duriation" required>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                  </form>
                </div>
                <div class="col-sm-12 col-md-6">
                  <p>Note : The below image is the present image on the website.</p>
                  <img src="<?php echo $get_departemnt_details->department_image; ?>" class="img-fluid">
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  