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
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      var formData = new FormData($('#sliderform')[0]);
      $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>settings_controller/add_cmsslider",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
          if(data=='added')
          {
            $('#errorslider').html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>Slider Added Successfully.</div>');
            setTimeout(function(){
              location.reload(true);
            }, 1000);
          }
          else
          $('#errorslider').html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>Something Went Wrong!.</div>');
        }
      });
    }
  });
  $('#sliderform').validate({
    rules: {
      slider_img: {
        required: true,
        extension: "jpg|png|gif|jpeg"
      },
      slider_title: {
        required: true
      },
      slider_desc: {
        required: true
      },
    },
    messages: {
        slider_img: {
        required: "Please Choose Slider Image"
      },
      slider_title: {
        required: "Please enter Slider Title"
      },
      slider_desc: {
        required: "Please enter Slider Desc"
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
        url: "<?php echo base_url(); ?>settings_controller/update_frontcms_settings",
        data: $('#frontcms_settings').serialize(),
        success: function(data) {
          if(data=='updated')
          {
            $('#error').html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>Front CMS General Settings updated Successfully.</div>');
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
  $('#frontcms_settings').validate({
    rules: {
      footer_text: {
        required: true
      },
      whatsapp_url: {
          required: true
      },
      facebook_url: {
          required: true
      },
      twitter_url: {
          required: true
      },
      instagram_url: {
          required: true
      },
    },
    messages: {
        footer_text: {
        required: "Please enter a Footer Text"
      },
      whatsapp_url: {
          required: "Please enter a Whatsapp URL"
      },
      facebook_url: {
          required: "Please enter a Facebook URL"
      },
      twitter_url: {
          required: "Please enter a Twitter URL"
      },
      instagram_url: {
          required: "Please enter a Instagram URL"
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
      var formData = new FormData($('#aboutform')[0]);
      $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>settings_controller/update_about",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
          if(data=='updated')
          {
            $('#error').html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>Slider Added Successfully.</div>');
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
  $('#aboutform').validate({
    rules: {
      about_title: {
        required: true
      },
      about_image: {
        extension: "jpg|png|gif|jpeg"
      },
      about_desc: {
        required: true
      },
    },
    messages: {
      about_title: {
        required: "Please enter About Title"
      },
      about_desc: {
        required: "Please enter About Desc"
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
      var formData = new FormData($('#grivanceform')[0]);
      $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>settings_controller/update_grivance",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
          if(data=='updated')
          {
            $('#error').html('<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button>Slider Added Successfully.</div>');
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
  $('#grivanceform').validate({
    rules: {
      grivance_title: {
        required: true
      },
      grivance_image: {
        extension: "jpg|png|gif|jpeg"
      },
      grivance_desc: {
        required: true
      },
    },
    messages: {
      grivance_title: {
        required: "Please enter Grivance Title"
      },
      grivance_desc: {
        required: "Please enter Grivance Desc"
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