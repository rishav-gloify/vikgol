<footer id="footer-wrap-layout1" class="footer-wrap-layout1 bg-color-light">
    <div class="footer-top-layout1 bg-no-repeat bg-size-cover bg-position-center" data-bg-image="<?php echo get_template_directory_uri();?>/media/element/element3.png">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                    <div class="footer-widgets">
                        <div class="footer-logo">
                            <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri();?>/media/logo-dark.png" alt="Logo"></a>
                        </div>
                        <?php the_field('short_content','options')?>
                        <ul class="footer-social">
                            <li><a href="<?php the_field('facebook_url','options')?>"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?php the_field('twitter_url','options')?>"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="<?php the_field('instagram_url','options')?>"><i class="fab fa-instagram"></i></a></li>
<!--                             <li><a href="<?php// the_field('short_content','options')?>"><i class="fab fa-pinterest-p"></i></a></li> -->
                            <li><a href="<?php the_field('youtube_url','options')?>"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-12"></div>
                <div class="col-xl-2 d-none d-xl-block">
                    <div class="footer-widgets">
                        <h3 class="footer-widget-heading">Quick Links</h3>
                        <ul class="footer-menu">
                            <li><a href="<?php echo home_url();?>">Home</a></li>
                            <li><a href="<?php echo home_url();?>/about-us/">About Vikgol</a></li>
                            <li><a href="<?php echo home_url();?>/contact/">Contact Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-12"></div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                    <div class="footer-widgets">
                        <h3 class="footer-widget-heading">Contact Info</h3>

                        <ul class="footer-contact">
                            <li><i class="flaticon-placeholder"></i><?php the_field('address','options')?></li>
                            <li><i class="flaticon-plane"></i><?php the_field('email','options')?></li>
                            <li><i class="flaticon-telephone"></i><?php the_field('contact_number','options')?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-layout1 bg-color-accent">
        <div class="container">
            <div class="copy-right-wrap">
                <p class="copy-right-text">© 2021 <a href="https://vikgol.com/" rel="nofollow" target="_blank">Vikgol.</a> All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
<!--=====================================-->
<!--=        Template Search End        =-->
<!--=====================================-->
<!--=====================================-->
<!--=         Offcanvas Start           =-->
<!--=====================================-->


<!--=====================================-->
<!--=           Offcanvas End           =-->
<!--=====================================-->

</div>
</div>

<!-- Dependency Scripts -->
<script src="<?php echo get_template_directory_uri();?>/dependencies/popper.js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/dependencies/jquery/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/dependencies/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/dependencies/jquery.appear/jquery.appear.js"></script>
<script src="<?php echo get_template_directory_uri();?>/dependencies/jquery.parallax-scroll/jquery.parallax-scroll.js"></script>
<script src="<?php echo get_template_directory_uri();?>/dependencies/gmap3/js/gmap3.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/dependencies/owl.carousel/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/dependencies/slick/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/dependencies/counter-up/jquery.counterup.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/dependencies/waypoints/jquery.waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/dependencies/select2/js/select2.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/dependencies/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/dependencies/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/dependencies/meanmenu/js/jquery.meanmenu.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/dependencies/Parallaxie-master/parallaxie.js"></script>
<script src="<?php echo get_template_directory_uri();?>/dependencies/nivo-slider/js/jquery.nivo.slider.js"></script>
<script src="<?php echo get_template_directory_uri();?>/dependencies/nivo-slider/js/home.js"></script>
<script src="<?php echo get_template_directory_uri();?>/dependencies/wow/js/wow.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/dependencies/knob/jquery.knob.js"></script>
<script src="<?php echo get_template_directory_uri();?>/dependencies/countdown/jquery.countdown.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/dependencies/page-piling/js/jquery.pagepiling.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/dependencies/tilt/tilt.jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/dependencies/theia-sticky-sidebar/theia-sticky-sidebar.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/dependencies/theia-sticky-sidebar/resize-sensor.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/dependencies/magnific-popup/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/dependencies/validator/validator.min.js"></script>
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB13ZAvCezMx5TETYIiGlzVIq65Mc2FG5g"></script>-->

<!-- Site Scripts -->
<script src="<?php echo get_template_directory_uri();?>/assets/js/app.js"></script>
<?php wp_footer();?>
</body>


</html>