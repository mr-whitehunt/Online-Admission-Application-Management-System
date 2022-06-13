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
            <h1 class="m-0">Departments</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Departments</li>
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
                    <h3 class="card-title">Add Department</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="#" id="departmentform">
                        <div class="form-group">
                            <input type="text" class="form-control" name="department_name" id="department_name" placeholder="Enter department" required>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" name="department_image" id="department_image" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="department_duriation" id="department_duriation" placeholder="Enter department duriation" required>
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
                      <h3 class="card-title">Departments List</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                      <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                          <th>Departments</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php
                      foreach($get_department as $get_department_details):
                      ?>
                      <tr>
                          <td><?php echo $get_department_details->department_name; ?></td>
                          <td><a href="<?php echo base_url(); ?>admin/edit_department/<?php echo $get_department_details->department_id; ?>" class="ml-1 mr-1 text-white"><i class="fas fa-edit"></i></a><a href="<?php echo base_url(); ?>admin/department_details/delete_department/<?php echo $get_department_details->department_id; ?>" class="ml-1 mr-1 text-white"><i class="fas fa-trash"></i></a></td>
                      </tr>
                      <?php
                      endforeach;
                      ?>
                      </tbody>
                      <tfoot>
                      <tr>
                          <th>Departments</th>
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
  