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
        url: "<?php echo base_url(); ?>home_controller/add_contact",
        data: $('#contactform').serialize(),
        success: function(data) {
          if(data=='inserted')
          {
            $('#error').html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>Your details has been submitted successfully. We will be in touch with you within 24hrs.</div>');
            setTimeout(function(){
              location.reload(true);
            }, 1000);
          }
          else
          $('#error').html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>Something Went Wrong!.</div>');
        }
      });
    }
  });
  $('#contactform').validate({
    rules: {
      name: {
        required: true
      },
      email: {
        required: true,
        email: true,
      },
      contact_type: {
        required: true,
      },
      description: {
        required: true,
      },
    },
    messages: {
      name: {
        required: "Please enter a Name"
      },
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      contact_type: {
        required: "Please select contact category",
      },
      description: {
        required: "Please enter the contact details",
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