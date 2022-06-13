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
        url: "<?php echo base_url(); ?>home_controller/grivance_start_student",
        data: $('#grivance_start_student').serialize(),
        success: function(data) {
          if(data=='inserted')
          {
            $('#error').html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>Your details has been submitted successfully. We will be in touch with you within 24hrs.</div>');
            setTimeout(function(){
              window.location.href = "<?php echo base_url(); ?>grivance_student_otp";
            }, 1000);
          }
          else
          $('#error').html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>The entered email does not exist.</div>');
        }
      });
    }
  });
  $('#grivance_start_student').validate({
    rules: {
      email: {
        required: true,
        email: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email",
        email: "Please enter a valid email"
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

<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>home_controller/add_public_grivance",
        data: $('#grivance_start_public').serialize(),
        success: function(data) {
          if(data=='inserted')
          {
            $('#error').html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>Otp sent successfully</div>');
            setTimeout(function(){
              window.location.href = "<?php echo base_url(); ?>grivance_otp";
            }, 1000);
          }
          else
          $('#error').html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>Something Went Wrong!.</div>');
        }
      });
    }
  });
  $('#grivance_start_public').validate({
    rules: {
      public_email: {
        required: true,
        email: true
      },
    },
    messages: {
      public_email: {
        required: "Please enter a email",
        email: "Please enter a valid email"
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

<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>home_controller/add_public_grivance_details",
        data: $('#public_grivance_details').serialize(),
        success: function(data) {
          if(data=='inserted')
          {
            $('#error').html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>Your complaint has been submitted successfully. We will be in touch with you within 24hours.</div>');
            setTimeout(function(){
              window.location.href = "<?php echo base_url(); ?>";
            }, 1000);
          }
          else
          $('#error').html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>Something Went Wrong!.</div>');
        }
      });
    }
  });
  $('#public_grivance_details').validate({
    rules: {
      public_name: {
        required: true,
      },
      public_mobile: {
        required: true,
        number: true,
        minlength: 10,
        maxlength: 10,
      },
      public_subject: {
        required: true,
      },
      public_complaint: {
        required: true,
      },
    },
    messages: {
      public_name: {
        required: "Please enter your name",
      },
      public_mobile: {
        required: "Please enter your mobile number",
        number: "Please enter mobile number",
      },
      public_subject: {
        required: "Please enter the complaint subject",
      },
      public_complaint: {
        required: "Please enter the complaint details",
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

<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>home_controller/add_student_grivance_details",
        data: $('#student_complaint_details').serialize(),
        success: function(data) {
          if(data=='inserted')
          {
            $('#error').html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>Your complaint has been submitted successfully. We will be in touch with you within 24hours.</div>');
            setTimeout(function(){
              window.location.href = "<?php echo base_url(); ?>";
            }, 1000);
          }
          else
          $('#error').html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>Something Went Wrong!.</div>');
        }
      });
    }
  });
  $('#student_complaint_details').validate({
    rules: {
      subject: {
        required: true,
      },
      description: {
        required: true,
      },
    },
    messages: {
      subject: {
        required: "Please select the complaint subject",
      },
      description: {
        required: "Please enter the complaint details",
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