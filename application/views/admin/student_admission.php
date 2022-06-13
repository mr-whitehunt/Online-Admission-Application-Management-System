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
            <h1 class="m-0">Student Admission</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Student Admission</li>
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
                  <div class="card-body">
                    <div class="application-container">
                        <p>Note :<br>1. All the fields are required.<br>2. Minimum 1 qualification required in Education Qualification.</p>
                        <form id="online_application_form" action="#" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>Name of the Candidate</label>
                                        <input type="text" name="candidate_name" id="candidate_name" class="form-control" placeholder="Enter the candidate name" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>Father Name</label>
                                        <input type="text" name="guardian_name" id="guardian_name" class="form-control" placeholder="Enter the father/guardian name" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>Father Occupation</label>
                                        <input type="text" name="guardian_occupation" id="guardian_occupation" class="form-control" placeholder="Enter the father/guardian occupation" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>Mother Name</label>
                                        <input type="text" name="mother_name" id="mother_name" class="form-control" placeholder="Enter the mother name" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>Mother Occupation</label>
                                        <input type="text" name="mother_occupation" id="mother_occupation" class="form-control" placeholder="Enter the mother occupation" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>Father Mobile Number</label>
                                        <input type="text" name="father_mobile" id="father_mobile" class="form-control" placeholder="Enter the father mobile number" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>Mother Mobile Number</label>
                                        <input type="text" name="mother_mobile" id="mother_mobile" class="form-control" placeholder="Enter the mother mobile number" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>Candidate Mobile Number</label>
                                        <input type="text" name="candidate_mobile" id="candidate_mobile" class="form-control" placeholder="Enter the candidate mobile number" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>Candidate Aadhar Number</label>
                                        <input type="text" name="aadhar_number" id="aadhar_number" class="form-control" placeholder="Enter the candidate aadhar number" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>Nationality</label>
                                        <input type="text" name="nationality" id="nationality" class="form-control" placeholder="Enter the candidate nationality" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>Religion</label>
                                        <input type="text" name="religion" id="religion" class="form-control" placeholder="Enter the candidate religion" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>Caste</label>
                                        <select class="form-control" name="caste" id="caste" required>
                                            <option value="">Select the caste</option>
                                            <?php foreach($get_student_category as $caste): ?>
                                            <option value="<?php echo $caste->student_cat_id; ?>"><?php echo $caste->student_cat_name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>Dath of Birth</label>
                                        <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>Department</label>
                                        <select class="form-control" name="department" id="department" required>
                                            <option value="">Select the department</option>
                                            <?php foreach($get_department as $department): ?>
                                            <option value="<?php echo $department->department_id; ?>"><?php echo $department->department_name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select class="form-control" name="gender" id="gender" required>
                                            <option value="">Select the gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>Marital Status</label>
                                        <select class="form-control" name="marital_status" id="marital_status" required>
                                            <option value="">Select the marital status</option>
                                            <option value="single">single</option>
                                            <option value="married">married</option>
                                            <option value="separated">separated</option>
                                            <option value="divorced">divorced</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>Candidate belongs to</label>
                                        <select class="form-control" name="belongs" id="belongs" required>
                                            <option value="">Select the candidate belongs</option>
                                            <option value="karnataka">karnataka</option>
                                            <option value="non-karnataka">non-karnataka</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label>Mother Tongue</label>
                                        <input type="text" name="mother_tongue" id="mother_tongue" class="form-control" placeholder="Enter the candidate mother tongue" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Candidate Email</label>
                                <input type="email" name="candidate_email" id="candidate_email" class="form-control" placeholder="Enter the candidate email" required>
                            </div>
                            <div class="form-group">
                                <label>Education Qualification</label>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-borderless">
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
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" name="eq_sc" id="eq_sc" class="form-control" placeholder="Enter the candidate school/college" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" name="eq_q" id="eq_q" class="form-control" placeholder="Enter the candidate qualifaication" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" name="eq_py" id="eq_py" class="form-control" placeholder="Enter the candidate passing year" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" name="eq_tm" id="eq_tm" class="form-control" placeholder="Enter the candidate total marks" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" name="eq_per" id="eq_per" class="form-control" placeholder="Enter the candidate percentage" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" name="eq_sc1" id="eq_sc1" class="form-control" placeholder="Enter the candidate school/college">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" name="eq_q1" id="eq_q1" class="form-control" placeholder="Enter the candidate qualifaication">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" name="eq_py1" id="eq_py1" class="form-control" placeholder="Enter the candidate passing year">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" name="eq_tm1" id="eq_tm1" class="form-control" placeholder="Enter the candidate total marks">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" name="eq_per1" id="eq_per1" class="form-control" placeholder="Enter the candidate percentage">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" name="eq_sc2" id="eq_sc2" class="form-control" placeholder="Enter the candidate school/college">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" name="eq_q2" id="eq_q2" class="form-control" placeholder="Enter the candidate qualifaication">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" name="eq_py2" id="eq_py2" class="form-control" placeholder="Enter the candidate passing year">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" name="eq_tm2" id="eq_tm2" class="form-control" placeholder="Enter the candidate total marks">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" name="eq_per2" id="eq_per2" class="form-control" placeholder="Enter the candidate percentage">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="form-group">
                                <label>Present Address</label>
                                <input type="text" name="present_address" id="present_address" class="form-control" placeholder="Enter the candidate present address" required>
                            </div>
                            <div class="form-group">
                                <label>Permanent Address</label>
                                <input type="text" name="permanent_address" id="permanent_address" class="form-control" placeholder="Enter the candidate permanent address" required>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label>Candidate Aadhar upload (Front)</label>
                                        <input type="file" name="aadhar_upload" id="aadhar_upload" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label>Candidate Aadhar upload (Back)</label>
                                        <input type="file" name="aadhar_upload1" id="aadhar_upload1" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label>Candidate Marks Card upload</label>
                                        <input type="file" name="marks_upload" id="marks_upload" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label>Candidate Photo upload</label>
                                        <input type="file" name="photo_upload" id="photo_upload" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group float-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
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