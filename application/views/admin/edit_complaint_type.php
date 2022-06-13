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
            <h1 class="m-0">Complaint Type</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Complaint Type</li>
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
                    <form id="complaintform">
                      <?php foreach($get_complaint_cat as $get_complaint_details): ?>
                        <div class="form-group">
                            <input type="text" name="complaint_cat_id" id="complaint_cat_id" class="form-control" value="<?php echo $get_complaint_details->complaint_cat_id; ?>" hidden>
                        </div>
                        <div class="form-group">
                            <label for="complaint_type">complaint Type</label>
                            <input type="text" name="complaint_type" id="complaint_type" class="form-control" value="<?php echo $get_complaint_details->complaint_type; ?>">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        <?php endforeach; ?>
                    </form>
                </div>
          </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  