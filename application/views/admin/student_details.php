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
            <h1 class="m-0">Student Details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Student Details</li>
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
                      <h3 class="card-title">Students List</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                      <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                          <th>Candidate Name</th>
                          <th>Department</th>
                          <th>Father Name</th>
                          <th>Date of Birth</th>
                          <th>Gender</th>
                          <th>Category</th>
                          <th>Mobile Number</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php foreach($get_student_details as $student_details): ?>
                      <?php foreach($get_session as $session): ?>
                      <?php if(($student_details->admission_session == $session->session_id) && ($session->session_status == '1')):?>
                      <tr>
                          <td><?php echo $student_details->candidate_name; ?></td>
                          <td><?php echo $student_details->department_name; ?></td>
                          <td><?php echo $student_details->father_name; ?></td>
                          <td><?php echo $student_details->date_of_birth; ?></td>
                          <td><?php echo $student_details->gender; ?></td>
                          <td><?php echo $student_details->student_cat_name; ?></td>
                          <td><?php echo $student_details->candidate_mobile; ?></td>
                          <td><a href="<?php echo base_url(); ?>admin/online_admission/details/<?php echo $student_details->online_admission_id; ?>" class="text-white"><i class="fas fa-eye ml-2 mr-2"></i></a></td>
                      </tr>
                      <?php endif; ?>
                      <?php endforeach; ?>
                      <?php endforeach; ?>
                      </tbody>
                      <tfoot>
                      <tr>
                          <th>Candidate Name</th>
                          <th>Department</th>
                          <th>Father Name</th>
                          <th>Date of Birth</th>
                          <th>Gender</th>
                          <th>Category</th>
                          <th>Mobile Number</th>
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
  