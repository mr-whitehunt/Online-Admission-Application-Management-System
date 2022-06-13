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
            <h1 class="m-0">Enquiry Type</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Enquiry Type</li>
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
          <div class="card card-primary">
              <div class="card-body">
                    <form id="semesterForm">
                      <?php foreach($get_semester as $get_semester_details): ?>
                        <div class="form-group">
                            <input type="text" name="semester_id" id="semester_id" class="form-control" value="<?php echo $get_semester_details->semester_id; ?>" hidden>
                        </div>
                        <div class="form-group">
                            <label>Select Department</label>
                            <select name="department_id" id="department_id" class="form-control">
                                <option value="">Select Department</option>
                                <?php foreach($get_department as $get_department_details): ?>
                                <option value="<?php echo $get_department_details->department_id; ?>"<?php if($get_department_details->department_id == $get_semester_details->department_id) echo 'selected'; ?>><?php echo $get_department_details->department_name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Enquiry Type</label>
                            <input type="text" name="semester" id="semester" class="form-control" value="<?php echo $get_semester_details->semester_name; ?>">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        <?php endforeach; ?>
                    </form>
                </div>
          </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  