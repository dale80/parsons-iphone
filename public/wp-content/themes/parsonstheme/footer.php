



<footer class="site-footer">
      <div class="site-footer__inner container container--narrow">
        <div class="group">
          <div class="site-footer__col-one">
            <h1 class="school-logo-text school-logo-text--alt-color">
              <a href="<?php echo site_url() ?>"><strong>Parsons'</strong><br>iPhone Repair</a>
            </h1>
            <p><a class="site-footer__link" href="tel:+19314780323">931.478.0323</a></p>
          </div>

          <div class="site-footer__col-two-three-group">
            <div class="site-footer__col-two">
              <h3 class="headline headline--small">Explore</h3>
              <nav class="nav-list">
                <ul>
                  <li><a href="<?php echo site_url("/about-us") ?>">About</a></li>
                  <li><a href="<?php echo site_url("/events") ?>">Contact</a></li>
                  <li><a href="<?php echo site_url("/stations") ?>">Reviews</a></li>
                </ul>
              </nav>
            </div>

            <div class="site-footer__col-three">
              <h3 class="headline headline--small">Contact</h3>
              <nav class="nav-list">
                <ul>
                  <li><a href="tel:+19314780323">Call</a></li>
                  <li><a href="sms:+19314780323;?&body=I%20need%20to%20get%20my%20phone%20fixed.">Text</a></li>
                  <li><a href="mailto:rusty@parsonsiphonerepair.com">Email</a></li>
                </ul>
              </nav>
            </div>
          </div>

            

          <div class="site-footer__col-four">
            <h3 class="headline headline--small">Connect With Us</h3>
            <nav>
              <ul class="min-list social-icons-list group">
                <li>
                  <a href="https://www.facebook.com/parsons.iphonerepair" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <!-- <li>
                  <a href="#" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </li> -->
                <li>
                  <a href="https://www.instagram.com/parsonsiphonerepair/?hl=en" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>

      <div class="stamp-footer">
        <div class="stamp-footer__spacer"><hr class="section-break"></div>
        <div class="stamp-footer__stamp"><img class="stamp-footer__image" src="<?php echo get_theme_file_uri('/images/iphone_icon.png'); ?>"></div>
        <div class="stamp-footer__spacer"><hr class="section-break"></div>
      </div>

      <div class="legal-footer">
        <div class="legal-footer__power-container headline headline--small">Powered By:</div>
        <div class="legal-footer__logo-container">
            <a href="https://kddigitaldesign.com"><img class="legal-footer__logo" src="<?php echo get_theme_file_uri('/images/kd_logo3.png') ?>"></a>
        </div>
        
        <div class="legal-footer__copy-container headline headline--small">&copy; <?php echo date('Y'); ?></div>
      </div>
    </footer>


<?php wp_footer(); ?>
</body>
</html>