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
            <h1 class="m-0">Slider</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Slider</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div id="errorslider"></div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <div class="card card-primary">
              <div class="card-body">
                  <?php foreach($get_slider as $slider): ?>
                    <form id="sliderform">
                        <div class="form-group">
                            <input type="text" name="slider_id" id="slider_id" class="form-control" value="<?php echo $slider->slider_id; ?>" hidden>
                        </div>
                        <div class="form-group">
                            <label>Slider Title</label>
                            <input type="text" name="slider_title" id="slider_title" class="form-control" value="<?php echo $slider->slider_title; ?>" placeholder="Enter the Slider Title">
                        </div>
                        <div class="form-group">
                            <label>Slider Description</label>
                            <input type="text" name="slider_desc" id="slider_desc" class="form-control" value="<?php echo $slider->slider_desc; ?>" placeholder="Enter the Slider Description">
                        </div>
                        <div class="form-group">
                            <label>Slider Image</label>
                            <input type="file" name="slider_image" id="slider_image" class="form-control" value="<?php echo $slider->slider_image; ?>">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                    <?php endforeach; ?>
                </div>
          </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  