<?php
/*
 * template name: home
 */
?>
<?php get_header();?>

<section class="main-banner-wrap-layout1 bg-gradient-layout1 has-animation">
    <ul class="animated-figure">
        <li>
            <div class="translate-left-75 opacity-animation transition-200 transition-delay-10">
                <svg width="678px" height="575px">
                    <defs>
                        <linearGradient id="shape-gradient1" x1="0%" x2="50%" y1="86.603%" y2="0%">
                            <stop offset="0%" stop-color="rgb(82,63,255)" stop-opacity="0.21" />
                            <stop offset="100%" stop-color="rgb(104,2,198)" stop-opacity="0.21" />
                        </linearGradient>
                    </defs>
                    <path fill="url(#shape-gradient1)"
                          d="M8.774,72.637 C24.335,32.328 64.598,1.818 107.846,0.977 C153.529,0.088 193.846,29.308 228.367,59.201 C262.888,89.095 297.864,122.295 342.435,132.337 C395.990,144.404 451.255,120.277 506.077,123.221 C581.185,127.255 647.967,185.940 669.010,258.060 C690.054,330.177 668.236,411.294 619.856,468.811 C571.474,526.325 499.170,561.071 424.701,571.631 C341.448,583.438 251.586,564.649 188.145,509.531 C153.304,479.260 128.229,437.550 117.609,392.681 C109.183,357.083 116.362,318.069 105.755,283.272 C94.490,246.320 59.108,232.772 35.167,205.579 C3.816,169.968 -8.566,117.557 8.774,72.637 Z"/>
                </svg>
            </div>
        </li>
        <li>
            <div class="translate-right-75 opacity-animation transition-200 transition-delay-500">
                <svg width="478px" height="406px">
                    <defs>
                        <linearGradient id="shape-gradient2" x1="0%" x2="50%" y1="86.603%" y2="0%">
                            <stop offset="0%" stop-color="rgb(82,63,255)" stop-opacity="0.21" />
                            <stop offset="100%" stop-color="rgb(141,34,240)" stop-opacity="0.21" />
                        </linearGradient>
                    </defs>
                    <path fill="url(#shape-gradient2)"
                          d="M57.512,28.844 C41.937,43.215 29.659,61.585 21.596,80.726 C10.238,107.690 5.415,136.934 2.113,166.013 C-8.559,260.013 20.528,368.419 121.400,397.331 C189.062,416.723 262.433,396.867 324.343,368.126 C415.304,325.900 543.497,194.454 436.347,96.738 C378.745,44.207 285.697,64.026 217.602,35.418 C185.699,22.011 155.662,-2.674 119.276,0.267 C95.545,2.187 74.555,13.118 57.512,28.844 Z"/>
                </svg>
            </div>
        </li>
    </ul>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 order-lg-2 d-flex align-items-center justify-content-center">
                <div class="translate-right-75 opacity-animation transition-150 transition-delay-2600">
                    <div class="main-banner-box-layout1">
                        <div class="item-figure">
							<?php if( get_field('banner_image') ): ?>

                    <img src="<?php the_field('banner_image'); ?>">
               <?php endif;?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 order-lg-1 compress-left-side d-flex align-items-center">
                <div class="main-banner-box-layout1">
                    <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-1500">
                        <div class="item-sub-title"><?php the_field('banner_sub_title'); ?></div>
                    </div>
                    <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-1800">
                        <h1 class="item-main-title"><?php the_field('banner_title'); ?></h1>
                    </div>
                    <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-2100">
                        <p><?php the_field('banner_content'); ?></p>
                    </div>
                    <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-2400">
                        <div class="banner-btns">
                            <a href="#" class="item-btn btn-ghost btn-light">Become a Vikgoler </a>
                            <a href="#" class="item-btn btn-ghost btn-light">Get a Quote </a>



                            <!--<a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                                <div class="item-icon"><i class="fas fa-play"></i></div>
                                <span>Watch Video</span>
                            </a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================-->
<!--=           Main Banner End         =-->
<!--=====================================-->
<!--=====================================-->
<!--=     About Section Area Start      =-->
<!--=====================================-->
<section class="section-padding-md about-wrap-layout1">
    <ul class="animated-shape has-animation">
        <li>
            <div class="translate-right-75 opacity-animation transition-200 transition-delay-10">

              
				
				
				<img src="<?php echo get_template_directory_uri();?>/media/element/element17.png" alt="Animated Figure">


            </div>
        </li>
    </ul>
    <div class="container-fluid">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 pl-0 pr-0">
                <div class="about-box-layout1">
                    <ul class="figure-holder has-animation">
                        <li class="animated-bg">
                            <div class="translate-left-75 opacity-animation transition-200 transition-delay-10">
                                <svg width="638px" height="514px">
                                    <path fill-rule="evenodd"  opacity="0.031" fill="rgb(2, 86, 225)"
                                          d="M256.191,-0.005 C397.682,-0.005 406.513,181.938 525.597,258.322 C824.664,450.157 454.262,521.729 256.191,512.196 C114.864,505.394 -0.000,397.536 -0.000,256.097 C-0.000,114.655 114.701,-0.005 256.191,-0.005 Z"/>
                                </svg>
                            </div>
                        </li>
                        <li class="animated-figure">
                            <div class="translate-left-75 opacity-animation transition-150 transition-delay-1000">
                                <?php if( get_field('about_image') ): ?>

                    <img src="<?php the_field('about_image'); ?>" alt="Animated Figure">
               <?php endif;?>

							</div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 compress-right-side">
                <div class="about-box-layout1">
                    <div class="content-holder has-animation">
                        <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-1000">
                            <h2 class="item-title"><?php the_field('about_title');?></h2>
                        </div>
                        <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-1300">
                            <?php the_field('about_content');?>
                        </div>
                        <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-1900">
                            <a href="#" class="btn-fill btn-gradient">Read More<i class="flaticon-next"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================-->
<!--=      About Section Area End       =-->
<!--=====================================-->
<!--=====================================-->
<!--=    Service Section Area Start     =-->
<!--=====================================-->
<section class="service-wrap-layout1 section-padding-md bg-color-accent2 position-relative">
    <div class="animated-shape">
        <ul>
            <li>
                <svg data-parallax='{"x" : 150, "y" : -300}' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="638px" height="514px">
                    <path  opacity="0.051" fill="rgb(255, 197, 4)" d="M256.191,-0.004 C397.682,-0.004 406.514,181.938 525.597,258.321 C824.664,450.156 454.262,521.730 256.191,512.195 C114.864,505.394 -0.000,397.537 -0.000,256.095 C-0.000,114.655 114.701,-0.004 256.191,-0.004 Z"/>
                </svg>
            </li>
            <li>
                <svg data-parallax='{"x" : -200, "y" : 400}' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="567px" height="492px">
                    <path  opacity="0.031" fill="rgb(122, 100, 242)" d="M546.544,185.562 C513.626,116.380 454.941,60.016 385.431,26.835 C152.316,-84.442 -53.840,176.649 12.833,396.877 C24.369,434.980 46.437,474.094 84.066,487.084 C126.302,501.662 172.028,478.324 207.184,450.761 C242.341,423.198 275.543,389.558 318.953,379.003 C391.625,361.333 463.113,408.069 526.986,349.876 C577.576,303.789 573.685,242.605 546.544,185.562 Z"/>
                </svg>
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="section-heading heading-dark heading-layout1 has-animation">
            <h2 class="heading-main-title"><?php the_field('service_main_title')?></h2>
            <div class="heading-icon">
                <svg class="dash-left" width="100" height="20">
                    <g fill="none" stroke-width="4">
                        <path class="dashed1" stroke="rgba(90, 73, 248, 0.5)" stroke-dasharray="5, 5" d="M5 20 l215 0" />
                        <path class="dashed2" stroke="white" stroke-dasharray="5, 5" d="M5 20 l215 0" />
                    </g>
                </svg>
                <i class="flaticon-rocket"></i>
                <svg class="dash-right" width="100" height="20">
                    <g fill="none" stroke-width="4">
                        <path class="dashed1" stroke="rgba(90, 73, 248, 0.5)" stroke-dasharray="5, 5" d="M5 20 l215 0" />
                        <path class="dashed2" stroke="white" stroke-dasharray="5, 5" d="M5 20 l215 0" />
                    </g>
                </svg>


            </div>
            <p class="heading-paragraph"><?php the_field('section_content');?></p>
        </div>
        <div class="row masonry-items">
			
			<?php
            // Check rows exists.
            if( have_rows('services') ):

            // Loop through rows.
            while( have_rows('services') ) : the_row();?>

            <div class="col-lg-4 col-sm-6 col-12 masonry-item has-animation">
                <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-100">
                    <div class="service-box-layout1">
                        <div class="icon-holder icon-bg-california">
                            <div class="item-icon icon-color-california">
                                <?php the_sub_field('services_icons')?>
                            </div>
                            <svg class="icon-bg-shape" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100px" height="80px">
                                <path d="M95.798,66.493 C95.402,67.238 94.989,67.934 94.568,68.608 C92.140,72.492 89.322,75.200 86.228,76.996 C75.718,83.098 62.044,78.694 49.794,74.183 C30.107,66.931 13.369,52.019 4.629,32.917 C0.428,23.737 -1.365,11.491 6.138,4.714 C11.356,0.001 19.072,-0.185 26.172,0.068 C26.493,0.079 26.814,0.090 27.132,0.103 C31.363,0.275 35.595,0.448 39.826,0.620 C45.043,0.833 50.261,1.045 55.479,1.256 C57.205,1.327 58.931,1.397 60.658,1.467 C67.392,1.740 74.374,2.077 80.361,5.160 C89.583,9.908 94.528,20.156 97.310,30.121 C97.438,30.578 97.561,31.039 97.682,31.500 C100.721,43.123 101.423,55.927 95.798,66.493 Z"/>
                            </svg>
                        </div>
                        <h3 class="item-title"><a href="#"><?php the_sub_field('services_title')?></a></h3>
                        <?php the_sub_field('service_content')?>
                        <a href="<?php the_sub_field('service_url')?>" class="btn-text">Discover Now<i class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
            <?php endwhile;endif;?>

			
			
        </div>
    </div>
</section>
<!--=====================================-->
<!--=     Service Section Area End      =-->
<!--=====================================-->
<!--=====================================-->
<!--=   Process Section Area Start      =-->
<!--=====================================-->
<section class="process-wrap-layout1 section-padding-md bg-color-light position-relative">
    <div class="container">
        <div class="section-heading heading-dark heading-layout1 has-animation">
            <h2 class="heading-main-title"><?php the_field('main_title');?></h2>
            <div class="heading-icon">
                <svg class="dash-left" width="100" height="20">
                    <g fill="none" stroke-width="4">
                        <path class="dashed1" stroke="rgba(90, 73, 248, 0.5)" stroke-dasharray="5, 5" d="M5 20 l215 0" />
                        <path class="dashed2" stroke="white" stroke-dasharray="5, 5" d="M5 20 l215 0" />
                    </g>
                </svg>
                <i class="flaticon-rocket"></i>
                <svg class="dash-right" width="100" height="20">
                    <g fill="none" stroke-width="4">
                        <path class="dashed1" stroke="rgba(90, 73, 248, 0.5)" stroke-dasharray="5, 5" d="M5 20 l215 0" />
                        <path class="dashed2" stroke="white" stroke-dasharray="5, 5" d="M5 20 l215 0" />
                    </g>
                </svg>


            </div>
            <p class="heading-paragraph"><?php the_field('main_content')?></p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row d-flex align-items-center">
            <div class="col-xl-6 col-12 order-xl-2 pl-0 pr-0">
                <div class="process-box-layout1">
                    <ul class="figure-holder">
                        <li class="animated-bg">
                            <svg width="993px" height="698px">
                                <path fill-rule="evenodd"  opacity="0.502" fill="rgb(240, 246, 254)"
                                      d="M615.878,633.346 C421.616,682.785 207.128,731.954 63.989,573.875 C-94.294,399.069 67.235,87.796 264.299,20.945 C414.319,-29.945 599.731,16.820 724.612,108.132 C826.171,182.390 906.437,307.315 953.564,424.057 C964.863,452.047 974.424,490.636 972.447,520.765 C970.471,550.894 1010.875,682.567 983.375,694.964 C943.433,712.968 842.741,645.666 801.432,631.106 C744.184,610.931 681.174,616.728 615.878,633.346 Z"/>
                            </svg>
                        </li>
                        <li class="animated-figure">
							<?php if( get_field('main_image') ): ?>

                    <img src="<?php the_field('main_image'); ?>">
               <?php endif;?>
							
                                </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-6 col-12 order-xl-1 compress-left-side has-animation">
                <div class="process-box-layout1">
                    <ul class="content-holder">
                        <li>
                            <div class="translate-right-75 transition-150 opacity-animation transition-delay-100">
                                <div class="d-flex align-items-sm-center">
                                    <div class="item-icon dodger-blue">
                                        <?php the_field('image_1')?>
                                    </div>
                                    <div class="item-content">
                                        <h3 class="item-title"><?php the_field('title_1')?></h3>
                                        <?php the_field('content_1')?>
                                    </div>
                                </div>
                            </div>
                            <svg x="0px" y="0px" width="312px" height="130px">
                                <path class="dashed1" fill="none" stroke="rgb(95, 93, 93)" stroke-width="1" stroke-dasharray="1300" stroke-dashoffset="0" d="M3.121,2.028 C3.121,2.028 1.003,124.928 99.352,81.226 C99.352,81.226 272.319,21.200 310.000,127.338"/>
                                <path class="dashed2" fill="none" stroke="#ffffff" stroke-width="2" stroke-dasharray="6" stroke-dashoffset="1300" d="M3.121,2.028 C3.121,2.028 1.003,124.928 99.352,81.226 C99.352,81.226 272.319,21.200 310.000,127.338 "/>
                            </svg>
                        </li>
                        <li>
                            <div class="translate-left-75 transition-150 opacity-animation transition-delay-1000">
                                <div class="d-flex align-items-sm-center flex-xl-row-reverse">
                                    <div class="item-icon sunset-orange">
                                       <?php the_field('image_2')?>                                    </div>
                                    <div class="item-content">
                                        <h3 class="item-title"><?php the_field('title_2')?></h3>
                                        <p><?php the_field('content_2')?></p>
                                    </div>
                                </div>
                            </div>
                            <svg x="0px" y="0px" width="312px" height="130px">
                                <path class="dashed1" fill="none" stroke="rgb(95, 93, 93)" stroke-width="1" stroke-dasharray="1300" stroke-dashoffset="0" d="M311.000,0.997 C311.000,0.997 313.123,123.592 214.535,79.996 C214.535,79.996 41.149,20.122 3.377,125.996"/>
                                <path class="dashed2" fill="none" stroke="#ffffff" stroke-width="2" stroke-dasharray="6" stroke-dashoffset="1300" d="M311.000,0.997 C311.000,0.997 313.123,123.592 214.535,79.996 C214.535,79.996 41.149,20.122 3.377,125.996"/>
                            </svg>
                        </li>
                        <li>
                            <div class="translate-right-75 transition-150 opacity-animation transition-delay-2000">
                                <div class="d-flex align-items-sm-center">
                                    <div class="item-icon california">
                                        <?php the_field('image_3')?>
                                    </div>
                                    <div class="item-content">
                                        <h3 class="item-title"><?php the_field('title_3')?></h3>
                                        <?php the_field('content_3')?>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================-->
<!--=    Process Section Area End       =-->
<!--=====================================-->
<!--=====================================-->
<!--=   Progress Section Area Start     =-->
<!--=====================================-->
<section class="progress-wrap-layout1 bg-gradient-layout2">
    <div class="progress-inner-wrap bg-position-center bg-no-repeat bg-size-cover parallaxie bg-size-cover bg-no-repeat bg-position-center" data-bg-image="<?php echo get_template_directory_uri();?>/media/element/element1.png">
        <div class="container zindex-level-2">
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="progress-box-layout1">
                        <h2 class="counting-text counter" data-num="<?php the_field('counter_1_number')?>"><?php the_field('counter_1_number')?></h2>
                        <div class="item-label"><?php the_field('counter_1_title')?></div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="progress-box-layout1">
                        <h2 class="counting-text counter" data-num="<?php the_field('counter_2_number')?>"><?php the_field('counter_2_number')?></h2>
                        <div class="item-label"><?php the_field('counter_2_title')?></div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="progress-box-layout1">
                        <h2 class="counting-text counter" data-num="<?php the_field('counter_3_number')?>"><?php the_field('counter_3_number')?></h2>
                        <div class="item-label"><?php the_field('counter_3_title')?></div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="progress-box-layout1">
                        <h2 class="counting-text counter" data-num="<?php the_field('counter_4_number')?>"><?php the_field('counter_4_number')?></h2>
                        <div class="item-label"><?php the_field('counter_4_title')?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================-->
<!--=    Progress Section Area End      =-->
<!--=====================================-->
<!--=====================================-->
<!--=   Feature Section Area Start      =-->
<!--=====================================-->
<section class="feature-wrap-layout1">
    <div class="container">
        <div class="row gutters-50">
			
			
			<?php
			
	$count = 0;
$locations = get_field('plans');
if (is_array($locations)) {
   $count = count($locations);
}
			
			?>
				 <?php
			
			$j = 1;
    $i = 2;
    // Check rows exists.
    if( have_rows('plans') ):

    // Loop through rows.
    while( have_rows('plans') ) : the_row();
			
			
			?>

<?php
if($i % 2 == 0){

        ?>

            <div class="col-lg-6 col-12 has-animation">
                <div class="feature-box-layout1">
                    <div class="translate-left-75 opacity-animation transition-150 transition-delay-10">
                        <img src="<?php echo get_template_directory_uri();?>/media/feature/feature1.png" alt="Feature">
                    </div>
                </div>
            </div>
		
			
            <div class="col-lg-6 col-12 d-flex align-items-center justify-content-center has-animation">
                <div class="feature-box-layout1">
                    <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-100">
                        <h3 class="item-title"><?php the_sub_field('plan_title'); ?></h3>
						
					</div>
                    <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                        <?php the_sub_field('plan_content'); ?>
                    </div>
                    <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-1300">
                        <a href="<?php the_sub_field('page'); ?>" class="mt-4 btn-fill btn-gradient">Read More <i class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
			
			<?php
			if($j == $count)
			{
			?>
            	<?php
			}else{
				?>
            <div class="col-12 order-lg-1 d-lg-flex align-items-center justify-content-center has-animation d-none">
				<div class="indicator-wrap">
                    <svg class="dash-left" width="675" height="206">
                        <g fill="none" stroke-width="2">
                            <path class="dashed1" stroke="rgba(17, 17, 17, 0.3)" stroke-dasharray="6, 6" stroke-linecap="butt" stroke-linejoin="miter" d="M3.000,0.995 L3.000,100.997 L673.000,101.994 L673.000,207.995" />
                            <path class="dashed2" stroke="white" stroke-dasharray="6, 6" stroke-linecap="butt" stroke-linejoin="miter" d="M3.000,0.995 L3.000,100.997 L673.000,101.994 L673.000,207.995" />
                        </g>
                    </svg>
                    <div class="indicator-img-right">
                        <div class="translate-top-50 opacity-animation transition-100 transition-delay-2500">
                            <img src="<?php echo get_template_directory_uri();?>/media/element/element2.png" alt="element">
                        </div>
                    </div>
                </div>
            </div>
			
<?php
			}
				?>
				
				
<?php
}



else{


       ?>

			
            <div class="col-lg-6 order-lg-3 col-12 has-animation">
                <div class="feature-box-layout1">
                    <div class="translate-right-75 opacity-animation transition-150 transition-delay-50">
                        <img src="<?php echo get_template_directory_uri();?>/media/feature/feature2.png" alt="Feature">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 col-12 d-flex align-items-center justify-content-center has-animation">
                <div class="feature-box-layout1">
                    <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-100">
                        <h3 class="item-title"><?php the_sub_field('plan_title'); ?></h3>
						                    </div>
                    <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                        <?php the_sub_field('plan_content'); ?>
                    </div>
                    <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-1300">
                        <a href="<?php the_sub_field('page'); ?>" class="mt-4 btn-fill btn-gradient">Read More <i class="flaticon-next"></i></a>
                    </div>
                </div>
             </div>
           
				<?php
			if($j == $count)
			{
			?>
            
				<?php
			}else{
				?>
            <div class="col-12 d-lg-flex align-items-center justify-content-center has-animation d-none">
				<div class="indicator-wrap">
                    <svg class="dash-right" width="675" height="206">
                        <g fill="none" stroke-width="2">
                            <path class="dashed1" stroke="rgba(17, 17, 17, 0.3)" stroke-dasharray="6, 6" stroke-linecap="butt" stroke-linejoin="miter" d="M673.000,0.995 L673.000,100.996 L3.000,101.996 L3.000,207.996" />
                            <path class="dashed2" stroke="white" stroke-dasharray="6, 6" stroke-linecap="butt" stroke-linejoin="miter" d="M673.000,0.995 L673.000,100.996 L3.000,101.996 L3.000,207.996" />
                        </g>
                    </svg>
                    <div class="indicator-img-left">
                        <div class="translate-top-75 opacity-animation transition-100 transition-delay-2500">
                            <img src="<?php echo get_template_directory_uri();?>/media/element/element2.png" alt="element">
                        </div>
                    </div>
                </div>
            </div>

                
<?php
			}
				?>
				
				
							<?php

}
?>
<?php
			$j = $j+1;
        $i = $i+1;
        ?>
    <?php endwhile;endif;?>

			
        </div>
    </div>
</section>
<!--=====================================-->
<!--=    Feature Section Area End       =-->
<!--=====================================-->
<!--=====================================-->
<!--=  Testimonial Section Area Start   =-->
<!--=====================================-->
<section class="testimonial-wrap-layout2 section-padding-md bg-color-accent2">
    <div class="container">
        <div class="section-heading heading-dark heading-layout1 has-animation">
            <h2 class="heading-main-title">Clients Testimonials</h2>
            <div class="heading-icon">
                <svg class="dash-left" width="100" height="20">
                    <g fill="none" stroke-width="4">
                        <path class="dashed1" stroke="rgba(90, 73, 248, 0.5)" stroke-dasharray="5, 5" d="M5 20 l215 0" />
                        <path class="dashed2" stroke="white" stroke-dasharray="5, 5" d="M5 20 l215 0" />
                    </g>
                </svg>
                <i class="flaticon-rocket"></i>
                <svg class="dash-right" width="100" height="20">
                    <g fill="none" stroke-width="4">
                        <path class="dashed1" stroke="rgba(90, 73, 248, 0.5)" stroke-dasharray="5, 5" d="M5 20 l215 0" />
                        <path class="dashed2" stroke="white" stroke-dasharray="5, 5" d="M5 20 l215 0" />
                    </g>
                </svg>


            </div>
            <p class="heading-paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting has been the industry's standard dummy text ever since</p>
        </div>
        <div class="rc-carousel nav-control-layout1" data-loop="true" data-items="3" data-margin="10" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="700" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
             data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="1" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="2" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="2"
             data-r-large-nav="true" data-r-large-dots="false" data-r-extra-large="2" data-r-extra-large-nav="true" data-r-extra-large-dots="false">
			<?php

// Check rows exists.
if( have_rows('testimonials') ):

    // Loop through rows.
    while( have_rows('testimonials') ) : the_row();?>
            <div class="testimonial-box-layout1">
                <div class="top-box">
                    <div class="item-icon">
                        <i class="flaticon-quote"></i>
                    </div>
                    <p><?php the_sub_field('testimonials_comment');?></p>
                </div>
                <div class="bottom-box">
                    <div class="media">
                        <img src="<?php the_sub_field('users_image');?>" alt="Testimonial">
                        <div class="media-body space-sm">
                            <h3 class="item-title"><?php the_sub_field('users_name');?></h3>
                            <div class="item-designation"><?php the_sub_field('users_post');?></div>
                        </div>
                    </div>
                </div>
            </div>
			<?php endwhile;endif;?>
        </div>
    </div>
</section>
<!--=====================================-->
<!--=   Testimonial Section Area End    =-->
<!--=====================================-->
<!--=====================================-->
<!--=   Contact Section Area Start      =-->
<!--=====================================-->
<section class="contact-wrap-layout1 section-padding-md bg-color-light">
    <div class="container">
        <div class="row gutters-50">
            <div class="col-xl-5 col-lg-6 col-12">
                <div class="contact-box-layout1 has-animation">
                    <div class="translate-bottom-50 opacity-animation transition-100 transition-delay-100">
                        <h2 class="item-title">How May We Help You!</h2>
                    </div>
                    <div class="translate-bottom-50 opacity-animation transition-100 transition-delay-400">
                        <p>Grursus mal suada faci lisis Lorem ipsum consectetur elit.</p>
                    </div>
                    <form class="contact-form-box" id="contact-form">
                        <div class="row gutters-20">
                            <div class="col-xl-6 form-group">
                                <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-400">
                                    <input type="text" placeholder="Name *" class="form-control" name="first_name" data-error="Phone field is required" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-xl-6 form-group">
                                <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-700">
                                    <input type="email" placeholder="Email *" class="form-control" name="email" data-error="Subject field is required" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12 form-group">
                                <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-1000">
                                    <select class="select2" name="subject">
                                        <option value="0">Software Licencing</option>
                                        <option value="1">Single-user license</option>
                                        <option value="2">Multi-user license</option>
                                        <option value="3">Site license</option>
                                        <option value="4">Intellectual property</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12 form-group">
                                <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-1300">
                                    <textarea placeholder="Let us know what you need" class="textarea form-control" name="message" id="form-message" rows="7" cols="20" data-error="Message field is required" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12 form-group mb-0">
                                <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-1700">
                                    <button type="submit" class="btn-fill btn-gradient">Send Message</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-response"></div>
                    </form>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 col-12 d-flex align-items-center">
                <div class="contact-box-layout1 has-animation">
                    <div class="translate-right-75 transition-150 opacity-animation transition-delay-10">
                        <div class="item-figure">
                            <img src="<?php echo get_template_directory_uri();?>/media/illustration/illustration21.png" alt="Illustration">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================-->
<!--=    Contact Section Area End       =-->
<!--=====================================-->
<!--=====================================-->
<!--= Call To Action Section Area Start =-->
<!--=====================================-->
<section id="call-to-action-wrap-layout1" class="call-to-action-wrap-layout1 bg-gradient-layout2 section-padding-sm-equal">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-12">
                <div class="call-to-action-box-layout1">
                    <h2 class="item-title"><?php the_field('title');?></h2>
                </div>
            </div>
            <div class="col-xl-5 col-12">
                <div class="call-to-action-box-layout1 d-flex justify-content-xl-end justify-content-center">
                    <a href="<?php the_field('button_url');?>" class="item-btn btn-fill btn-light"><?php the_field('button_text');?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================-->
<!--=  Call To Action Section Area End  =-->
<!--=====================================-->

<section class="faq-wrap bg-color-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 order-lg-2"></div>
            <div class="col-lg-8 order-lg-2">
                <h2 class="inner-section-heading"><?php the_field('faq__title');?></h2>
                <div class="faq-box">
                    <div id="accordion">
						<?php

						$i = 1;
// Check rows exists.
if( have_rows('faq') ):

    // Loop through rows.
    while( have_rows('faq') ) : the_row();?>
						
						<?php
if($i  == 1){

        ?>

                        <div class="card single-item">
                            <div class="card-header item-nav">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo get_row_index()?>"><?php the_sub_field('question');?></a>
                            </div>
                            <div id="collapse<?php echo get_row_index();?>" class="collapse show item-content-wrap" data-parent="#accordion">
                                <div class="card-body item-content">
                                    <?php the_sub_field('answer');?>
                                </div>
                            </div>
                        </div>
						
						<?php
}
						
						else{
						?>
						
						<div class="card single-item">
										<div class="card-header item-nav">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo get_row_index()?>"><?php the_sub_field('question');?></a>
										</div>
										<div id="collapse<?php echo get_row_index();?>" class="collapse item-content-wrap" data-parent="#accordion">
											<div class="card-body item-content">
												<?php the_sub_field('answer');?>
											</div>
										</div>
									</div>
									<?php
						}
						?>
						<?php $i = $i+1;?>
						<?php endwhile;endif;?>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 order-lg-2"></div>
        </div>
    </div>
</section>


<!--=====================================-->
<!--=     Blog Section Area Start       =-->
<!--=====================================-->
<!--=====================================-->
<!--=      Blog Section Area End        =-->
<!--=====================================-->
<!--=====================================-->
<!--=     Brand Section Area Start      =-->
<!--=====================================-->
<section id="brand-wrap-layout1" class="brand-wrap-layout1 bg-color-accent2">
    <div class="container">
        <div class="rc-carousel" data-loop="true" data-items="8" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="700" data-dots="false" data-nav="false" data-nav-speed="false" data-r-x-small="2" data-r-x-small-nav="false"
             data-r-x-small-dots="false" data-r-x-medium="3" data-r-x-medium-nav="false" data-r-x-medium-dots="false" data-r-small="4" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="false" data-r-medium-dots="false" data-r-large="5"
             data-r-large-nav="false" data-r-large-dots="false" data-r-extra-large="6" data-r-extra-large-nav="false" data-r-extra-large-dots="false">
			<?php 
$images = get_field('clients_logo');
if( $images ): foreach( $images as $image ):?>
            <div class="brand-box-layout1"><img src="<?php echo esc_url($image['url']); ?>" alt="Brand-thumb"></div>
			<?php endforeach;endif;?>
<!--             <div class="brand-box-layout1"><img src="<?php echo get_template_directory_uri();?>/media/brand/brand2.png" alt="Brand-thumb"></div>
            <div class="brand-box-layout1"><img src="<?php echo get_template_directory_uri();?>/media/brand/brand3.png" alt="Brand-thumb"></div>
            <div class="brand-box-layout1"><img src="<?php echo get_template_directory_uri();?>/media/brand/brand4.png" alt="Brand-thumb"></div>
            <div class="brand-box-layout1"><img src="<?php echo get_template_directory_uri();?>/media/brand/brand5.png" alt="Brand-thumb"></div>
            <div class="brand-box-layout1"><img src="<?php echo get_template_directory_uri();?>/media/brand/brand6.png" alt="Brand-thumb"></div>
            <div class="brand-box-layout1"><img src="<?php echo get_template_directory_uri();?>/media/brand/brand3.png" alt="Brand-thumb"></div> -->
        </div>
    </div>
</section>



<?php get_footer();?>
