<?php
/*
 * template name: content 
*/
get_header();?>


<section id="page-banner" class="page-banner bg-gradient-layout6 has-animation">
    <ul class="shape-holder">
        <li>
            <div class="translate-top-50 opacity-animation transition-200 transition-delay-10">
                <svg width="827px" height="827px">
                    <defs>
                        <linearGradient id="shape1" x1="0%" x2="50%" y1="86.603%" y2="0%">
                            <stop offset="0%" stop-color="rgb(82,63,255)" stop-opacity="0.6" />
                            <stop offset="100%" stop-color="rgb(117,14,213)" stop-opacity="0.6" />
                        </linearGradient>
                    </defs>
                    <path fill="url(#shape1)"
                          d="M413.500,0.000 C641.870,0.000 827.000,185.130 827.000,413.500 C827.000,641.870 641.870,827.000 413.500,827.000 C185.130,827.000 -0.000,641.870 -0.000,413.500 C-0.000,185.130 185.130,0.000 413.500,0.000 Z"/>
                </svg>
            </div>
        </li>
        <li>
            <div class="translate-top-50 opacity-animation transition-100 transition-delay-300">
                <svg width="615px" height="615px">
                    <defs>
                        <linearGradient id="shape2" x1="0%" x2="50%" y1="86.603%" y2="0%">
                            <stop offset="0%" stop-color="rgb(82,63,255)" stop-opacity="0.6" />
                            <stop offset="100%" stop-color="rgb(109,26,223)" stop-opacity="0.6" />
                        </linearGradient>
                    </defs>
                    <path fill="url(#shape2)"
                          d="M307.500,0.000 C477.327,0.000 615.000,137.673 615.000,307.500 C615.000,477.327 477.327,615.000 307.500,615.000 C137.672,615.000 -0.000,477.327 -0.000,307.500 C-0.000,137.673 137.672,0.000 307.500,0.000 Z"/>
                </svg>
            </div>
        </li>
        <li>
            <div class="translate-top-50 opacity-animation transition-50 transition-delay-600">
                <svg width="441px" height="441px">
                    <defs>
                        <linearGradient id="shape3" x1="0%" x2="50%" y1="86.603%" y2="0%">
                            <stop offset="13%" stop-color="rgb(82,63,255)" stop-opacity="0.4" />
                            <stop offset="100%" stop-color="rgb(130,33,221)" stop-opacity="0.4" />
                        </linearGradient>
                    </defs>
                    <path fill="url(#shape3)"
                          d="M220.500,0.000 C342.279,0.000 441.000,98.721 441.000,220.500 C441.000,342.279 342.279,441.000 220.500,441.000 C98.721,441.000 -0.000,342.279 -0.000,220.500 C-0.000,98.721 98.721,0.000 220.500,0.000 Z"/>
                </svg>
            </div>
        </li>
    </ul>
    <div class="container">
        <div class="breadcrumbs-area">
            <h1>Content Writting</h1>
            <ul>
                <li>
                    <a href="<?php echo home_url();?>">Home</a>
                </li>
                <li>Content Writting</li>
            </ul>
        </div>
    </div>
</section>

<section class="service-wrap-layout1 section-padding-md-equal bg-color-accent2 position-relative">
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
       
		    <?php

                $args = array(
                    'post_type' => 'content_writting',
                    'post_status' => 'publish',
                    'posts_per_page' => 10
                );
                $loop = new WP_Query( $args );
                if ($loop->have_posts()):
                    ?>

		<div class="row">
            
			  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="col-xl-4 col-md-6 col-12 has-animation">
                <div class="translate-bottom-75 opacity-animation transition-100 transition-delay-100">
                    <div class="service-box-layout1">
                        <div class="icon-holder icon-bg-california">
                            <div class="item-icon icon-color-california">
                                <?php the_field('content_icon');?>
                            </div>
                            <svg class="icon-bg-shape" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100px" height="80px">
                                <path d="M95.798,66.493 C95.402,67.238 94.989,67.934 94.568,68.608 C92.140,72.492 89.322,75.200 86.228,76.996 C75.718,83.098 62.044,78.694 49.794,74.183 C30.107,66.931 13.369,52.019 4.629,32.917 C0.428,23.737 -1.365,11.491 6.138,4.714 C11.356,0.001 19.072,-0.185 26.172,0.068 C26.493,0.079 26.814,0.090 27.132,0.103 C31.363,0.275 35.595,0.448 39.826,0.620 C45.043,0.833 50.261,1.045 55.479,1.256 C57.205,1.327 58.931,1.397 60.658,1.467 C67.392,1.740 74.374,2.077 80.361,5.160 C89.583,9.908 94.528,20.156 97.310,30.121 C97.438,30.578 97.561,31.039 97.682,31.500 C100.721,43.123 101.423,55.927 95.798,66.493 Z"/>
                            </svg>
                        </div>
                        <h3 class="item-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                        <p><?php
                                    echo wp_trim_words( get_the_content(), 30, '...' );
                                    ?></p>
                        <a href="<?php the_permalink();?>" class="btn-text">Discover Now<i class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
			<?php endwhile; wp_reset_postdata(); ?>
			
			
		</div>
		<?php
                endif;
                ?>
		
	</div>
</section>
<?php get_footer();?>