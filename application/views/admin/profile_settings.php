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
            <h1 class="m-0">Profile Settings</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Profile Settings</li>
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
        <?php foreach($get_user as $user): ?>
          <div class="row">
              <div class="col-sm-12 col-md-3">
                <!-- Profile Image -->
                <div class="card card-primary">
                    <div class="card-body box-profile">

                        <h3 class="profile-username text-center"><?php echo $user->user_name; ?></h3>

                        <p class="text-muted text-center"><?php echo $user->user_email; ?></p>

                        <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Role</b> <a class="float-right"><?php echo $user->user_role; ?></a>
                        </li>
                        <li class="list-group-item">
                            <b>Reg Date</b> <a class="float-right"><?php echo $user->reg_date; ?></a>
                        </li>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <div class="col-sm-12 col-md-9">
                <div class="card card-primary">
                  <div class="card-body">
                    <form id="profle_settings_form" action="#">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Name*</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Name" placeholder="Enter the user name" value="<?php echo $user->user_name; ?>">
                        </div>
                      </div>
                        <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email*</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Enter the user email" value="<?php echo $user->user_email; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">New Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="new_password" id="new_password" placeholder="Enter the new password">
                        </div>
                      </div>
                      <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  