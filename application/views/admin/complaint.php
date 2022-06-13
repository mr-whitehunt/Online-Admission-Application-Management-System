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
            <h1 class="m-0">Complaint</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Complaint</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
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
                    <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Student Complaint</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Public Complaint</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                      <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                          <th>Name</th>
                          <th>Department</th>
                          <th>Complaint Subject</th>
                          <th>Complaint</th>
                          <th>Date</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php foreach($get_complaint as $get_complaint_details): ?>
                      <?php foreach($get_session as $get_active_session): ?>
                      <?php if(($get_complaint_details->complaint_session==$get_active_session->session_id)&&($get_active_session->session_status==1)): ?>
                      <tr>
                          <td><?php echo $get_complaint_details->candidate_name; ?></td>
                          <td><?php echo $get_complaint_details->department_name; ?></td>
                          <td><?php echo $get_complaint_details->complaint_type; ?></td>
                          <td><?php echo $get_complaint_details->complaint; ?></td>
                          <td><?php echo $get_complaint_details->complaint_date; ?></td>
                      </tr>
                      <?php endif; ?>
                      <?php endforeach; ?>
                      <?php endforeach; ?>
                      </tbody>
                      <tfoot>
                      <tr>
                          <th>Name</th>
                          <th>Department</th>
                          <th>Complaint Subject</th>
                          <th>Complaint</th>
                          <th>Date</th>
                      </tr>
                      </tfoot>
                      </table>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                      <table id="example2" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Complaint Subject</th>
                          <th>Complaint</th>
                          <th>Date</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php foreach($get_public_complaint as $get_public_complaint_details): ?>
                      <tr>
                          <td><?php echo $get_public_complaint_details->complaint_public_name; ?></td>
                          <td><?php echo $get_public_complaint_details->complaint_public_email; ?></td>
                          <td><?php echo $get_public_complaint_details->complaint_public_mobile; ?></td>
                          <td><?php echo $get_public_complaint_details->complaint_public_subject; ?></td>
                          <td><?php echo $get_public_complaint_details->complaint_public; ?></td>
                          <td><?php echo $get_public_complaint_details->complaint_public_date; ?></td>
                      </tr>
                      <?php endforeach; ?>
                      </tbody>
                      <tfoot>
                      <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Complaint Subject</th>
                          <th>Complaint</th>
                          <th>Date</th>
                      </tr>
                      </tfoot>
                      </table>
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
  