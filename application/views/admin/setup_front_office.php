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
            <h1 class="m-0">Front Office Setup</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Front Office Setup</li>
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
            <div class="card card-outline card-outline-tabs">
              <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Enquiry Type</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Complaint Type</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                      <div class="row">
                          <div class="col-sm-12 col-md-6">
                              <form id="enquiryform">
                                  <div class="form-group">
                                      <label for="enquiry_type">Enquiry Type</label>
                                      <input type="text" name="enquiry_type" id="enquiry_type" class="form-control">
                                  </div>
                                  <div class="form-group">
                                      <button type="submit" class="btn btn-primary">Save</button>
                                  </div>
                              </form>
                          </div>
                          <div class="col-sm-12 col-md-6">
                            <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Enquiry Type</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($get_enquiry_cat as $get_enquiry_cat_details): ?>
                            <tr>
                                <td><?php echo $get_enquiry_cat_details->enquiry_type; ?></td>
                                <td><a href="<?php echo base_url(); ?>admin/edit_enquiry_type/<?php echo $get_enquiry_cat_details->enquiry_cat_id; ?>" class="ml-1 mr-1 text-white"><i class="fas fa-edit"></i></a><a href="<?php echo base_url(); ?>admin/enquiry_type/delete_enquiry_type/<?php echo $get_enquiry_cat_details->enquiry_cat_id; ?>" class="ml-1 mr-1 text-white"><i class="fas fa-trash"></i></a></td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Enquiry Type</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            </table>
                          </div>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                      <div class="row">
                          <div class="col-sm-12 col-md-6">
                              <form id="complaintform">
                                  <div class="form-group">
                                      <label for="complaint_type">Complaint Type</label>
                                      <input type="text" name="complaint_type" id="complaint_type" class="form-control">
                                  </div>
                                  <div class="form-group">
                                      <button type="submit" class="btn btn-primary">Save</button>
                                  </div>
                              </form>
                          </div>
                          <div class="col-sm-12 col-md-6">
                            <table id="example2" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Complaint Type</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($get_complaint_cat as $get_complaint_cat_details): ?>
                            <tr>
                                <td><?php echo $get_complaint_cat_details->complaint_type; ?></td>
                                <td><a href="<?php echo base_url(); ?>admin/edit_complaint_type/<?php echo $get_complaint_cat_details->complaint_cat_id; ?>" class="ml-1 mr-1 text-white"><i class="fas fa-edit"></i></a><a href="<?php echo base_url(); ?>admin/complaint_type/delete_complaint_type/<?php echo $get_complaint_cat_details->complaint_cat_id; ?>" class="ml-1 mr-1 text-white"><i class="fas fa-trash"></i></a></td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Complaint Type</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            </table>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  