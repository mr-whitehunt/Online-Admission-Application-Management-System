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
            <h1 class="m-0">Enquiry</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Enquiry</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-12 col-md-12">
                <div class="card">
                  <div class="card-header">
                      <h3 class="card-title">Enquiry List</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                      <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                          <th>Enquiry ID</th>
                          <th>Name</th>
                          <th>Enquiry Type</th>
                          <th>Enquiry</th>
                          <th>Contact</th>
                          <th>Date</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php foreach($get_enquiry as $get_enquiry_details): ?>
                      <?php foreach($get_session as $get_active_session): ?>
                      <?php if(($get_enquiry_details->enquiry_session==$get_active_session->session_id)&&($get_active_session->session_status==1)): ?>
                      <tr>
                          <td><?php echo $get_enquiry_details->enquiry_id; ?></td>
                          <td><?php echo $get_enquiry_details->enquiry_name; ?></td>
                          <td><?php echo $get_enquiry_details->enquiry_type; ?></td>
                          <td><?php echo $get_enquiry_details->enquiry_details; ?></td>
                          <td><?php echo $get_enquiry_details->enquiry_contact; ?></td>
                          <td><?php echo $get_enquiry_details->enquiry_date; ?></td>
                      </tr>
                      <?php endif; ?>
                      <?php endforeach; ?>
                      <?php endforeach; ?>
                      </tbody>
                      <tfoot>
                      <tr>
                          <th>Enquiry ID</th>
                          <th>Name</th>
                          <th>Enquiry Type</th>
                          <th>Enquiry</th>
                          <th>Contact</th>
                          <th>Action</th>
                      </tr>
                      </tfoot>
                      </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
          </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  