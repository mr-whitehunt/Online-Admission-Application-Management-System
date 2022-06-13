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
            <h1 class="m-0">Fees Details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Fees Details</li>
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
                      <h3 class="card-title">Fees Details List</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                      <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                          <th>Receipt No</th>
                          <th>Student Name</th>
                          <th>Department</th>
                          <th>Total Fees</th>
                          <th>Paid Fees</th>
                          <th>Balance Fees</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                          <td>31987</td>
                          <td>Ahmed Rasheed</td>
                          <td>CSE 3rd sem</td>
                          <td>Rs 19500</td>
                          <td>Rs 10000</td>
                          <td>Rs 9500</td>
                          <td><i class="fas fa-eye ml-2 mr-2"></i><i class="fas fa-edit ml-2 mr-2"></i></td>
                      </tr>
                      <tr>
                          <td>31987</td>
                          <td>Ahmed Rasheed</td>
                          <td>MEC 3rd sem</td>
                          <td>Rs 19500</td>
                          <td>Rs 10000</td>
                          <td>Rs 9500</td>
                          <td><i class="fas fa-eye ml-2 mr-2"></i><i class="fas fa-edit ml-2 mr-2"></i></td>
                      </tr>
                      </tbody>
                      <tfoot>
                      <tr>
                          <th>Receipt No</th>
                          <th>Student Name</th>
                          <th>Department</th>
                          <th>Total Fees</th>
                          <th>Paid Fees</th>
                          <th>Balance Fees</th>
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
  