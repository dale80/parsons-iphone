<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parsons' iPhone Repair</title>
    <?php wp_head(); ?>
</head>
<body>
    
<header class="site-header">
      <div class="container">
          <a href="<?php echo site_url() ?>"><img class="site-header__logo float-left" src=<?php echo get_theme_file_uri('/images/parsons_logo.png') ?>></a>
       
        
        <div class="site-header__menu-trigger">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <ul>
              <li <?php if (is_page('about-us') OR wp_get_post_parent_id(0) == 11) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url("/about-us") ?>">About</a></li>
              <li <?php if (is_page('our-work') OR wp_get_post_parent_id(0) == 11) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url("/our-work") ?>">Our Work</a></li>
            </ul>
          </nav>
          <div class="site-header__util">
            <?php if(is_user_logged_in()) { ?>
              <a href="<?php echo wp_logout_url(); ?>" class="btn btn--small btn--dark-orange float-left btn--with-photo">
              <span class="site-header__avatar"><?php echo get_avatar(get_current_user_id(), 60); ?></span>
              <span class="btn__text">Log Out</span>
            </a>


           <?php } else { ?>
              <a href="<?php echo wp_login_url(); ?>" class="btn btn--small btn--orange float-left push-right">Login</a>
              

           <?php } ?>
            
          </div>
        </div>
      </div>
    </header>

    