<?php get_header(); ?>

<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/parsons_head_banner.png') ?>)"></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--medium headline__banner-title">Broken iPhone?</h1>
        <h3 class="headline headline--small headline__year"><i>Let us fix it!!!</i></h3>
        <!-- <a href="#" class="btn btn--large btn--blue">Find Your Major</a> -->
      </div>
    </div>
    <div class="contact-container">
        <div class="button-container">
            <a href="tel:+19314780323">
                <div class="contact-btn">Call</div>
            </a>
        </div>
        <div class="button-container">
            <a href="sms:+19314780323;?&body=I%20need%20to%20get%20my%20phone%20fixed.">
                <div class="contact-btn">Text</div>
            </a>
        </div>
        <div class="button-container">
            <a href="mailto:rusty@parsonsiphonerepair.com">
                <div class="contact-btn">Email</div>
            </a>
        </div>
    </div>

    <div class="market-container">
        <div class="service-container">
            <div class=" service-container service-container__img-container"><img src="<?php echo get_theme_file_uri('images/speedy_img.png') ?>" alt="Speedy Service" class="service-img"></div>
            <div class="service-container__title-container">
                <h3 class="headline headline--medium service-text">Speedy Service</h3>
            </div>
            <div class="service-container__content-container">
                <p class="headline headline--small service-text">We pride ourselves on our top-notch, speedy service. From meeting you at convenient locations and fixing your device on site, it is our #1 goal to get you back to your life, FAST!</p>
            </div>
        </div>
        <div class="service-container">
            <div class=" service-container service-container__img-container"><img src="<?php echo get_theme_file_uri('images/service_img.png') ?>" alt="Speedy Service" class="service-img"></div>
            <div class="service-container__title-container">
                <h3 class="headline headline--medium service-text">Customer Service</h3>
            </div>
            <div class="service-container__content-container">
                <p class="headline headline--small service-text">We are always there for your iphone needs. Contact us anytime.</p>
            </div>
        </div>
        <div class="service-container">
            <div class=" service-container service-container__img-container"><img src="<?php echo get_theme_file_uri('images/warrenty_img.png') ?>" alt="Speedy Service" class="service-img"></div>
            <div class="service-container__title-container">
                <h3 class="headline headline--medium service-text">6 Month Warrenty</h3>
            </div>
            <div class="service-container__content-container">
                <p class="headline headline--small service-text">We stand behind our superior quality work. So much that we offer a 6 month warranty for any defects. We even offer a $15 discount if you damage your new screen during those 6 months.</p>
            </div>
        </div>
    </div>
    <div class="review">
        <h3 class="headline headline--medium t-center">Reviews</h3>
        <div class="review-container">
            <?php
                    $homepageEvents = new WP_Query(array(
                    'posts_per_page' => 3,
                    'post_type' => 'review',
                    'orderby' => 'rand',
                    ));

                    while($homepageEvents->have_posts()) {
                    $homepageEvents->the_post();
                        get_template_part('template-parts/content-review');
                        }
                    ?>
        </div>
    </div>









<?php get_footer(); ?>