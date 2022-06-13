<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- jquery-validation -->
<script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/jquery-validation/additional-methods.min.js"></script>

<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>home_controller/grivance_student_otp_verify",
        data: $('#student_otp_verify').serialize(),
        success: function(data) {
          if(data=='verified')
          {
            $('#error').html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>OTP verified successfully! Redirecting....</div>');
            setTimeout(function(){
              window.location.href = "<?php echo base_url(); ?>grivance_stu_details";
            }, 1000);
          }
          else
          $('#error').html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>Invalid OTP!</div>');
        }
      });
    }
  });
  $('#student_otp_verify').validate({
    rules: {
      otp: {
        required: true,
        number: true,
        minlength: 6,
        maxlength: 6,
      },
    },
    messages: {
      otp: {
        required: "Please enter a one time password",
        number: "Please enter number",
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