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
            <h1 class="m-0">Session Settings</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Session Settings</li>
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
              <div class="col-sm-12 col-md-6">
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add Session</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="#" id="sessionForm">
                        <div id="error"></div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="session" id="session" placeholder="Enter session">
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
                      <h3 class="card-title">Session List</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                      <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                          <th>Session</th>
                          <th>Status</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php foreach($get_session as $session): ?>
                      <tr>
                          <td><?php echo $session->session ?></td>
                          <td><?php if($session->session_status=='1') echo '<i class="badge badge-success">Active</i>';?></td>
                          <td><a href="<?php echo base_url(); ?>admin/session/delete_session/<?php echo $session->session_id; ?>" class="ml-1 mr-1 text-white"><i class="fas fa-trash"></i></a></td>
                      </tr>
                      <?php endforeach; ?>
                      </tbody>
                      <tfoot>
                      <tr>
                          <th>Session</th>
                          <th>Status</th>
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
  