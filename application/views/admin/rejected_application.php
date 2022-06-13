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
            <h1 class="m-0">Rejected Application</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
              <li class="breadcrumb-item">Admission</li>
              <li class="breadcrumb-item active">Rejected Application</li>
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
                      <h3 class="card-title">Rejected Application List</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                      <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                          <th>Email</th>
                          <th>Rejected Reason</th>
                      </tr>
                      </thead>
                      <?php foreach($get_rejected_application as $rejected_application): ?>
                      <?php foreach($get_session as $session): ?>
                      <?php if(($rejected_application->admission_session == $session->session_id) && ($session->session_status == '1')):?>
                      <tr>
                          <td><?php echo $rejected_application->candidate_email; ?></td>
                          <td><?php echo $rejected_application->application_rejection_reason; ?></td>
                      </tr>
                      <?php endif; ?>
                      <?php endforeach; ?>
                      <?php endforeach; ?>
                      </tbody>
                      <tfoot>
                      <tr>
                          <th>Email</th>
                          <th>Rejected Reason</th>
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
  