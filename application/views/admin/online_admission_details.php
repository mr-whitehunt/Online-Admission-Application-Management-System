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
            <h1 class="m-0">Online Admission</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Online Admission</li>
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
                      <h3 class="card-title">Online Student Admission Details</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                      <?php foreach($get_student_details as $student_details): ?>
                      <div class="row">
                          <div class="col-sm-12 col-md-8 order-2 order-sm-1 mt-3">
                            <div class="row">
                              <div class="col-sm-12 col-md-6">
                                <p>Name : <?php echo $student_details->candidate_name; ?></p>
                              </div>
                              <div class="col-sm-12 col-md-6">
                                <p>Father Name : <?php echo $student_details->father_name; ?></p>
                              </div>
                              <div class="col-sm-12 col-md-6">
                                <p>Father Occupation : <?php echo $student_details->father_occuption; ?></p>
                              </div>
                              <div class="col-sm-12 col-md-6">
                                <p>Mother Name : <?php echo $student_details->mother_name; ?></p>
                              </div>
                              <div class="col-sm-12 col-md-6">
                                <p>Mother Occupation :<?php echo $student_details->mother_occuption; ?></p>
                              </div>
                              <div class="col-sm-12 col-md-6">
                                <p>Father Mobile Number : <?php echo $student_details->father_mobile; ?></p>
                              </div>
                              <div class="col-sm-12 col-md-6">
                                <p>Mother Mobile Number : <?php echo $student_details->mother_mobile; ?></p>
                              </div>
                              <div class="col-sm-12 col-md-6">
                                <p>Candidate Mobile Number : <?php echo $student_details->candidate_mobile; ?></p>
                              </div>
                              <div class="col-sm-12 col-md-6">
                                  <p>Aadhar Number : <?php echo $student_details->aadhar_number; ?></p>
                              </div>
                              <div class="col-sm-12 col-md-6">
                                  <p>Nationality : <?php echo $student_details->nationality; ?></p>
                              </div>
                              <div class="col-sm-12 col-md-6">
                                  <p>Religion : <?php echo $student_details->religion; ?></p>
                              </div>
                              <div class="col-sm-12 col-md-6">
                                  <p>Caste : <?php echo $student_details->student_cat_name; ?></p>
                              </div>
                              <div class="col-sm-12 col-md-6">
                                  <p>Date of Birth : <?php echo $student_details->date_of_birth; ?></p>
                              </div>
                              <div class="col-sm-12 col-md-6">
                                  <p>Department : <?php echo $student_details->department_name; ?></p>
                              </div>
                              <div class="col-sm-12 col-md-6">
                                  <p>Gender : <?php echo $student_details->gender; ?></p>
                              </div>
                              <div class="col-sm-12 col-md-6">
                                  <p>Marital Status : <?php echo $student_details->marital_status; ?></p>
                              </div>
                              <div class="col-sm-12 col-md-6">
                                  <p>Candidate Belong to : <?php echo $student_details->candidate_belongs; ?></p>
                              </div>
                              <div class="col-sm-12 col-md-6">
                                  <p>Mother Tongue : <?php echo $student_details->mother_tongue; ?></p>
                              </div>
                              <div class="col-sm-12 col-md-6">
                                  <p>Candidate Email : <?php echo $student_details->candidate_email; ?></p>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-12 col-md-4 order-1 order-sm-2 mt-3">
                              <img src="<?php echo $student_details->candidate_photo_upload; ?>" class="img-fluid" style="width: 184px;height: 275px;">
                              <div class="mt-3">
                                <?php if($student_details->admission_status == NULL || $student_details->admission_confirm == NULL): ?>
                                <?php if($student_details->admission_status == NULL): ?>
                                <a href="<?php echo base_url(); ?>admin/online_admission_details/approve/<?php echo $student_details->online_admission_id; ?>" class="btn btn-success">Approve</a>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                  Reject
                                </button>
                                <?php else: ?>
                                <?php if($student_details->admission_status == 1 && $student_details->admission_confirm == NULL): ?>
                                <a href="<?php echo base_url(); ?>admin/online_admission_details/confirm/<?php echo $student_details->online_admission_id; ?>" class="btn btn-success">Confirm</a>
                                <?php else: ?>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                  Reject
                                </button>
                                <?php endif; ?>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                  Reject
                                </button>
                                <?php endif; ?>
                                <?php endif; ?>
                                    
                              </div>
                          </div>
                      </div>
                      <p>Present Address : <?php echo $student_details->present_address; ?></p>
                      <p>Permanent Address : <?php echo $student_details->permanent_address; ?></p>
                      <div class="table-responsive">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>School/College</th>
                              <th>Qualification</th>
                              <th>Year Passed</th>
                              <th>Total Marks</th>
                              <th>% of Marks</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><?php echo $student_details->eq_sc; ?></td>
                              <td><?php echo $student_details->eq_q; ?></td>
                              <td><?php echo $student_details->eq_yp; ?></td>
                              <td><?php echo $student_details->eq_tm; ?></td>
                              <td><?php echo $student_details->eq_per; ?>%</td>
                            </tr>
                            <?php if($student_details->eq_sc1 != NULL || $student_details->eq_q1 != NULL || $student_details->eq_yp1 != NULL || $student_details->eq_tm1 != NULL || $student_details->eq_per1 != NULL): ?>
                            <tr>
                              <td><?php echo $student_details->eq_sc1; ?></td>
                              <td><?php echo $student_details->eq_q1; ?></td>
                              <td><?php echo $student_details->eq_yp1; ?></td>
                              <td><?php echo $student_details->eq_tm1; ?></td>
                              <td><?php echo $student_details->eq_per1; ?>%</td>
                            </tr>
                            <?php endif; ?>
                            <?php if($student_details->eq_sc2 != NULL || $student_details->eq_q2 != NULL || $student_details->eq_yp2 != NULL || $student_details->eq_tm2 != NULL || $student_details->eq_per2 != NULL): ?>
                            <tr>
                              <td><?php echo $student_details->eq_sc2; ?></td>
                              <td><?php echo $student_details->eq_q2; ?></td>
                              <td><?php echo $student_details->eq_yp2; ?></td>
                              <td><?php echo $student_details->eq_tm2; ?></td>
                              <td><?php echo $student_details->eq_per2; ?>%</td>
                            </tr>
                            <?php endif; ?>
                          </tbody>
                        </table>
                      </div>
                      <h5>Candidate Documents</h5>
                      <ul id="lightgallery" class="mt-3 list-unstyled row">
                        <li class="col-xs-6 col-sm-4 col-md-4" data-responsive="<?php echo $student_details->candidate_aadhar_upload; ?>" data-src="<?php echo $student_details->candidate_aadhar_upload; ?>" data-sub-html="<h4>Candidate Aadhar Front</h4>">
                            <a href="">
                                <img class="img-responsive" src="<?php echo $student_details->candidate_aadhar_upload; ?>">
                            </a>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-4" data-responsive="<?php echo $student_details->candidate_aadhar1_upload; ?>" data-src="<?php echo $student_details->candidate_aadhar1_upload; ?>" data-sub-html="<h4>Candidate Aadhar Back</h4>">
                            <a href="">
                                <img class="img-responsive" src="<?php echo $student_details->candidate_aadhar1_upload; ?>">
                            </a>
                        </li>
                        <li class="col-xs-6 col-sm-4 col-md-4" data-responsive="<?php echo $student_details->candidate_marks_upload; ?>" data-src="<?php echo $student_details->candidate_marks_upload; ?>" data-sub-html="<h4>Candidate Marks</h4>">
                            <a href="">
                                <img class="img-responsive" src="<?php echo $student_details->candidate_marks_upload; ?>">
                            </a>
                        </li>
                      </ul>
                      
                      <?php endforeach; ?>
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
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Application Rejection Reason</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php foreach($get_student_details as $student_details): ?>
          <form id="rejection_form" action="#">
              <div id="error"></div>
            <div class="form-group">
              <div class="form-group">
                  <input type="email" class="form-control" name="candidate_email" id="candidate_email" value="<?php echo $student_details->candidate_email; ?>" hidden>
              </div>
              <label>Reason for rejection</label>
              <textarea name="rejection_reason" id="rejection_reason" cols="30" rows="10" class="form-control" required></textarea>
            </div>
            <div class="form-group">
              <button class="btn btn-primary float-right">Submit</button>
            </div>
          </form>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
  