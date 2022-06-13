<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url(); ?>assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- jquery-validation -->
<script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-validation/additional-methods.min.js"></script>

<!-- Page specific script -->

<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      var formData = new FormData($('#online_application_form')[0]);
      $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>students_controller/student_online_admission",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
          if(data=='inserted')
          {
            setTimeout(function(){
                swal({
                    title: "Success",
                    text: "Your application has been submitted successfully. Check your email for the future updates.",
                    type: "success"
                }, function() {
                    location.reload(true);
                });
            }, 1000);
          }
          else
            setTimeout(function(){
                swal({
                    title: "Error",
                    text: "Something went wrong! Please try again later.",
                    type: "error"
                }, function() {
                    location.reload(true);
                });
            }, 1000);
        }
      });
    }
  });
  $('#online_application_form').validate({
    rules: {
      candidate_name: {
        required: true
      },
      guardian_name: {
          required: true
      },
      guardian_occupation: {
          required: true
      },
      mother_name: {
          required: true
      },
      mother_occupation: {
          required: true
      },
      father_mobile: {
          required: true,
          number: true,
          minlength: 10,
          maxlength: 10,
      },
      mother_mobile: {
          required: true,
          number: true,
          minlength: 10,
          maxlength: 10,
      },
      candidate_mobile: {
          required: true,
          number: true,
          minlength: 10,
          maxlength: 10,
      },
      aadhar_number: {
          required: true,
          number: true,
          minlength: 12,
          maxlength: 12,
      },
      nationality: {
          required: true
      },
      religion: {
          required: true
      },
      caste: {
          required: true
      },
      date_of_birth: {
          required: true
      },
      department: {
          required: true
      },
      gender: {
          required: true
      },
      marital_status: {
          required: true
      },
      belongs: {
          required: true
      },
      mother_tongue: {
          required: true
      },
      candidate_email: {
          required: true,
          email: true,
      },
      eq_sc: {
          required: true
      },
      eq_q: {
          required: true
      },
      eq_yp: {
          required: true,
          number: true,
          maxlength: 4,
      },
      eq_tm: {
          required: true,
          number: true,
      },
      eq_per: {
          required: true,
          number: true,
      },
      present_address: {
          required: true
      },
      permanent_address: {
          required: true
      },
      aadhar_upload: {
          required: true,
          extension: "jpg|png|jpeg",
      },
      aadhar_upload1: {
          required: true,
          extension: "jpg|png|jpeg",
      },
      marks_upload: {
          required: true,
          extension: "jpg|png|jpeg",
      },
      photo_upload: {
          required: true,
          extension: "jpg|png|jpeg",
      },
    },
    messages: {
      candidate_name: {
        required: "Please enter the candidate name"
      },
      guardian_name: {
          required: "Please enter father/guardian name"
      },
      guardian_occupation: {
          required: "Please enter father/guardian occupation"
      },
      mother_name: {
          required: "Please enter the mother name"
      },
      mother_occupation: {
          required: "Please enter the mother occupation"
      },
      father_mobile: {
          required: "Please enter the father/guardian mobile",
          number: "Please enter mobile number",
      },
      mother_mobile: {
          required: "Please enter the mother mobile",
          number: "Please enter mobile number",
      },
      candidate_mobile: {
          required: "Please enter the candidate mobile",
          number: "Please enter mobile number",
      },
      aadhar_number: {
          required: "Please enter the candidate aadhar number",
          number: "Please enter aadhar number",
      },
      nationality: {
          required: "Please enter the candidate nationality"
      },
      religion: {
          required: "Please enter the candidate religion"
      },
      caste: {
          required: "Please enter the candidate caste"
      },
      date_of_birth: {
          required: "Please enter the candidate birth date"
      },
      department: {
          required: "Please select the department"
      },
      gender: {
          required: "Please select the candidate gender"
      },
      marital_status: {
          required: "Please select the candidate marital status"
      },
      belongs: {
          required: "Please select the candidate belongs"
      },
      mother_tongue: {
          required: "Please enter the candidate mother tongue"
      },
      candidate_email: {
        required: "Please enter the candidate email address",
        email: "Please enter a vaild email address"
      },
      eq_sc: {
          required: "Please enter teh candidate school/college"
      },
      eq_q: {
          required: "Please enter the candidate qualification"
      },
      eq_yp: {
          required: "Please enter the candidate passing year",
          number: "Enter the passing year in number",
      },
      eq_tm: {
          required: "Please enter the candidate total marks",
          number: "Enter the marks in number",
      },
      eq_per: {
          required: "Please enter the candidate percentage",
          number: "Enter the candidate percentage in number",
      },
      present_address: {
          required: "Please enter the candidate present address"
      },
      permanent_address: {
          required: "Please enter the candidate permanent address"
      },
      aadhar_upload: {
          required: "Please upload candidate aadhar card(front)",
      },
      aadhar_upload1: {
          required: "Please upload candidate aadhar card(back)",
      },
      marks_upload: {
          required: "Please upload candidate marks card",
      },
      photo_upload: {
          required: "Please upload candidate photo",
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>