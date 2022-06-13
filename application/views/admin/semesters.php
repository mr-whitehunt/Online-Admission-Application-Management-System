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
            <h1 class="m-0">Semesters/Years</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Semesters/Years</li>
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
              <div class="col-sm-12 col-md-6">
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add Semester/Years</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form id="semesterForm">
                        <div class="form-group">
                            <select name="department_id" id="department_id" class="form-control">
                                <option value="">Select Department</option>
                                <?php foreach($get_department as $get_department_details): ?>
                                <option value="<?php echo $get_department_details->department_id; ?>"><?php echo $get_department_details->department_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="semester" id="semester" placeholder="Enter Semester/Years">
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
              <div class="col-sm-12 col-md-6">
                <div class="card">
                  <div class="card-header">
                      <h3 class="card-title">Semesters/Years List</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                      <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                          <th>Department</th>
                          <th>Semester</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php foreach($get_department as $get_department_details): ?>
                      <?php foreach($get_semester as $get_semester_details): ?>
                      <?php if($get_semester_details->department_id == $get_department_details->department_id): ?>
                      <tr>
                          <td><?php echo $get_department_details->department_name; ?></td>
                          <td><?php echo $get_semester_details->semester_name; ?></td>
                          <td><a href="<?php echo base_url(); ?>admin/edit_semester/<?php echo $get_semester_details->semester_id; ?>" class="ml-1 mr-1 text-white"><i class="fas fa-edit"></i></a><a href="<?php echo base_url(); ?>admin/semester_details/delete_semester/<?php echo $get_semester_details->semester_id; ?>" class="ml-1 mr-1 text-white"><i class="fas fa-trash"></i></a></td>
                      </tr>
                      <?php endif; ?>
                      <?php endforeach; ?>
                      <?php endforeach; ?>
                      </tbody>
                      <tfoot>
                      <tr>
                          <th>Departments</th>
                          <th>Semester</th>
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
  