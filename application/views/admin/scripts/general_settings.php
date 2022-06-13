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

<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      var formData = new FormData($('#logoupload')[0]);
      $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>settings_controller/update_logo",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
          if(data=='updated')
          {
            $('#error').html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>General Settings updated Successfully.</div>');
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
  $('#logoupload').validate({
    rules: {
        logo: {
        required: true,
        extension: "jpg|png|gif|jpeg"
      },
    },
    messages: {
        logo: {
        required: "Please upload logo"
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
      var formData = new FormData($('#faviconupload')[0]);
      $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>settings_controller/update_favicon",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
          if(data=='updated')
          {
            $('#error').html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>General Settings updated Successfully.</div>');
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
  $('#faviconupload').validate({
    rules: {
        logo: {
        required: true,
        extension: "jpg|png|gif|jpeg"
      },
    },
    messages: {
        favicon: {
        required: "Please upload favicon"
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
        url: "<?php echo base_url(); ?>settings_controller/update_general_settings",
        data: $('#generalsettingsForm').serialize(),
        success: function(data) {
          if(data=='updated')
          {
            $('#error').html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>General Settings updated Successfully.</div>');
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
  $('#generalsettingsForm').validate({
    rules: {
      institute_name: {
        required: true
      },
      institiute_code: {
        required: true
      },
      tagline: {
        required: true
      },
      address: {
        required: true
      },
      phone: {
        required: true
      },
      email: {
        required: true
      },
      session: {
        required: true
      },
    },
    messages: {
        institute_name: {
        required: "Please enter a Institute Name"
      },
        institute_code: {
        required: "Please enter a Institute Code"
      },
        tagline: {
        required: "Please enter a Institute Tagline"
      },
        address: {
        required: "Please enter a Institute Address"
      },
        phone: {
        required: "Please enter a Institute Phone"
      },
        email: {
        required: "Please enter a Institute Email"
      },
        session: {
        required: "Please enter a Institute Session"
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