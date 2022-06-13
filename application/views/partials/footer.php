<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php foreach($get_general_settings as $general_settings): ?>
    <footer class="footer">
        <div class="footer-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 mb-3 text-center">
                        <div class="footer-logo-wrap">
                            <a href="#" class="footer-top-logo">
                                <img style="height: 36px" src="<?php echo $general_settings->institute_logo; ?>" alt="logo">
                            </a>
                        </div>
                        <section class="widget">
                            <div class="textwidget"><?php echo '<h4>'.strtoupper($general_settings->institute_name).'</h4>'; ?></div>
                            <div class="textwidget"><?php echo '<p>'.$general_settings->institute_address.'<br>'.$general_settings->institute_tagline.'</p>'; ?></div>
                        </section>
                        <section class="widget">
                            <ul class="footer_social">  
                                <li> 
                                    <a href="<?php echo $general_settings->facebook_url; ?>" target="_blank"><span><i class="fa fa-facebook"></i></span></a> 
                                </li>
                                <li> 
                                    <a href="<?php echo $general_settings->twitter_url; ?>" target="_blank"><span><i class="fa fa-twitter"></i></span></a> 
                                </li>
                                <li> 
                                    <a href="<?php echo $general_settings->instagram_url; ?>" target="_blank"><span><i class="fa fa-instagram"></i></span></a> 
                                </li>       
                                <li> 
                                    <a href="<?php echo $general_settings->whatsapp_url; ?>" target="_blank"><span><i class="fa fa-whatsapp"></i></span></a> 
                                </li>              
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">  
                    <div class="col-md-12 col-sm-12">
                        <div class="copyright text-center" style="padding: 0px">
                            <p><?php echo $general_settings->footer_text; ?></p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </footer>
    <?php endforeach; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/js/smooth-scroll.polyfills.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>