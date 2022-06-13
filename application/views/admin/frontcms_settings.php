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
            <h1 class="m-0">Front CMS Settings</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Front CMS Settings</li>
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
        <div class="card card-outline-tabs">
          <div class="card-header p-0 border-bottom-0">
            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">General</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Slider</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-tabs-four-counts-tab" data-toggle="pill" href="#custom-tabs-four-counts" role="tab" aria-controls="custom-tabs-four-counts" aria-selected="false">Grivance</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content" id="custom-tabs-four-tabContent">
              <?php foreach($get_general_settings as $general_settings): ?>
              <div class="tab-pane fade active show" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                <form id="frontcms_settings" method="post">
                  <div class="row">
                    <div class="col-sm-12 col-md-6">
                      <div class="form-group">
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" name="frontcms" id="customSwitch1" <?php if($general_settings->front_cms == 1) echo 'checked'; ?>>
                            <label class="custom-control-label" for="customSwitch1">Front CMS</label>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" name="application" id="customSwitch2" <?php if($general_settings->online_application == 1) echo 'checked'; ?>>
                            <label class="custom-control-label" for="customSwitch2">Online Application</label>
                          </div>
                      </div>
                      <div class="form-horizontal">
                        <div class="form-group row">
                          <div class="col-sm-12">
                              <div class="row">
                                  <label class="col-sm-4">Footer Text</label>
                                  <div class="col-sm-8">
                                  <input type="text" class="form-control" name="footer_text" id="footer_text" value="<?php echo $general_settings->footer_text; ?>" placeholder="Footer Text">
                                  </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                      <div class="form-horizontal">
                        <div class="form-group row">
                          <div class="col-sm-12">
                              <div class="row">
                                  <label class="col-sm-4">Whatsapp URL</label>
                                  <div class="col-sm-8">
                                  <input type="text" class="form-control" name="whatsapp_url" id="whatsapp_url" value="<?php echo $general_settings->whatsapp_url; ?>" placeholder="Whatsapp URL">
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-12">
                              <div class="row">
                                  <label class="col-sm-4">Facebook URL</label>
                                  <div class="col-sm-8">
                                  <input type="text" class="form-control" name="facebook_url" id="facebook_url" value="<?php echo $general_settings->facebook_url; ?>" placeholder="Facebook URL">
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-12">
                              <div class="row">
                                  <label class="col-sm-4">Twitter URL</label>
                                  <div class="col-sm-8">
                                  <input type="text" class="form-control" name="twitter_url" id="twitter_url" value="<?php echo $general_settings->twitter_url; ?>" placeholder="Twitter URL">
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-12">
                              <div class="row">
                                  <label class="col-sm-4">Instagram URL</label>
                                  <div class="col-sm-8">
                                  <input type="text" class="form-control" name="instagram_url" id="instagram_url" value="<?php echo $general_settings->instagram_url; ?>" placeholder="Instagram URL">
                                  </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                </form>
              </div>
              <?php endforeach; ?>
              <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modelId">
                    Add Slider
                  </button>
                  <!-- Modal -->
                  <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Add Slider</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                          <div id="errorslider"></div>
                          <form id="sliderform" action="<?php base_url(); ?>settings_controller/add_cmsslider" enctype="multipart/form-data">
                            <div class="form-group">
                              <label>Enter the Slider Title</label>
                              <input type="text" name="slider_title" id="slider_title" class="form-control" placeholder="Enter the Slider Title" required>
                            </div>
                            <div class="form-group">
                              <label>Enter the Slider Description</label>
                              <input type="text" name="slider_desc" id="slider_desc" class="form-control" placeholder="Enter the Slider Description" required>
                            </div>
                            <div class="form-group">
                              <label>Choose the Slider Image</label>
                              <input type="file" name="slider_img" id="slider_img" class="form-control" required>
                            </div>
                            <div class="form-group">
                              <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-3">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                          <th>Slider Image</th>
                          <th>Slider Title</th>
                          <th>Slider Desc</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php foreach($get_slider as $slider): ?>
                      <tr>
                          <td><img src="<?php echo $slider->slider_image; ?>" class="img-fluid" width=200 height=100></td>
                          <td><?php echo $slider->slider_title; ?></td>
                          <td><?php echo $slider->slider_desc; ?></td>
                          <td><a href="<?php echo base_url(); ?>admin/edit_slider/<?php echo $slider->slider_id; ?>" class="ml-1 mr-1 text-white"><i class="fas fa-edit"></i></a><a href="<?php echo base_url(); ?>admin/slider_details/delete_slider/<?php echo $slider->slider_id; ?>" class="ml-1 mr-1 text-white"><i class="fas fa-trash"></i></a></td>
                      </tr>
                      <?php endforeach; ?>
                      </tbody>
                      <tfoot>
                      <tr>
                          <th>Slider Image</th>
                          <th>Slider Title</th>
                          <th>Slider Desc</th>
                          <th>Action</th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>
              </div>
              <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                <?php foreach($get_about as $about): ?>
                <form id="aboutform" method="post" action="#" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-12 col-md-6">
                      <div class="form-group">
                        <label>About Title</label>
                        <input type="text" name="about_title" id="about_title" value="<?php echo $about->about_title; ?>" class="form-control" placehoder="Enter the About Title" required>
                      </div>
                      <div class="form-group">
                        <label>About Image</label>
                        <input type="file" name="about_image" id="about_image" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>About Description</label>
                        <textarea name="about_desc" id="about_desc" cols="30" rows="10" class="form-control required" placeholder="Enter the About Description"><?php echo $about->about_desc; ?></textarea>
                      </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                      <p>Note : The below image is the present image on the website.</p>
                      <img src="<?php echo $about->about_image; ?>" class="img-fluid">
                    </div>
                  </div>
                </form>
                <?php endforeach; ?>
              </div>
              <div class="tab-pane fade" id="custom-tabs-four-counts" role="tabpanel" aria-labelledby="custom-tabs-four-counts-tab">
                <?php foreach($get_grivance as $grivance): ?>
                <form id="grivanceform" method="post" action="#" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-12 col-md-6">
                      <div class="form-group">
                        <label>Grivance Title</label>
                        <input type="text" name="grivance_title" id="grivance_title" value="<?php echo $grivance->grivance_title; ?>" class="form-control" placehoder="Enter the About Title" required>
                      </div>
                      <div class="form-group">
                        <label>Grivance Background</label>
                        <input type="file" name="grivance_image" id="grivance_image" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Grivance Description</label>
                        <textarea name="grivance_desc" id="grivance_desc" cols="30" rows="10" class="form-control required" placeholder="Enter the About Description"><?php echo $grivance->grivance_desc; ?></textarea>
                      </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                      <p>Note : The below image is the present image on the website.</p>
                      <img src="<?php echo $grivance->grivance_image; ?>" class="img-fluid">
                    </div>
                  </div>
                </form>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->