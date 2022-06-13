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
            <h1 class="m-0">Student Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Student Category</li>
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
                    <h3 class="card-title">Add Student Category</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form id="studentcategoryForm">
                        <div class="form-group">
                            <input type="text" class="form-control" name="student_category" id="student_category" placeholder="Enter Student Category">
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
                      <h3 class="card-title">Student Category List</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                      <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                          <th>Category</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php foreach($get_student_category as $get_student_category_details): ?>
                      <tr>
                          <td><?php echo $get_student_category_details->student_cat_name; ?></td>
                          <td><a href="<?php echo base_url(); ?>admin/student_category/<?php echo $get_student_category_details->student_cat_id; ?>" class="ml-1 mr-1 text-white"><i class="fas fa-edit"></i></a><a href="<?php echo base_url(); ?>admin/student_category/delete_student_category/<?php echo $get_student_category_details->student_cat_id;  ?>" class="ml-1 mr-1 text-white"><i class="fas fa-trash"></i></a></td>
                      </tr>
                      </tbody>
                      <?php endforeach; ?>
                      <tfoot>
                      <tr>
                          <th>Category</th>
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
  