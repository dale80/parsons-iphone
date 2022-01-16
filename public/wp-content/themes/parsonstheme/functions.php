<?php

function parson_files() {

    wp_enqueue_script('main_rescue_js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('parson_main_style', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('parson_extra_style', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i|Norican:400|Special+Elite:400|Cedarville+Cursive');  
    // font-family: 'Roboto Condensed', sans-serif;
    // font-family: 'Special Elite', cursive;
    // font-family: 'Cedarville Cursive', cursive;

}

    add_action('wp_enqueue_scripts', 'parson_files');

    function parson_features() {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_image_size('profileLandscape', 400, 260, true);
        add_image_size('profilePortrait', 480, 650, true);
        add_image_size('pageBanner', 1500, 350, true);
    }
    
    add_action('after_setup_theme', 'parson_features');

 ?>

<?php
function pageBanner($args = NULL) {
        if (!$args['title']) {
           $args['title'] = get_the_title();
        }


        
                $args['photo'] = get_theme_file_uri('/images/parsons_head_banner.png');
            
        
        ?>
    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo $args['photo']; ?>)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php echo $args['title'] ?></h1>
        <div class="page-banner__intro">
          <p><?php echo $args['subtitle']; ?></p>
        </div>
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
    
    <?php }

function my_favicon() { ?>
    <link rel="shortcut icon" href="/wp-content/themes/parsonstheme/parsons-favicon.ico">
    <?php }
    add_action('wp_head', 'my_favicon');

     ?>