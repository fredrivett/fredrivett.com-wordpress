<?php wp_footer(); ?>
<?php $stylesheet_directory = get_stylesheet_directory_uri(); ?>

<footer class="padded-block main-footer full-width">
  <div class="row">
    <div class="small-11 small-centered medium-5 medium-uncentered columns">
      <div class="row">
        <div class="small-6 medium-12 large-6 columns">

          <h6>Latest from the blog</h6>

          <?php
          $args = array('numberposts' => '5', 'post_status' => 'publish');
          $recent_posts = wp_get_recent_posts($args);
          echo '<ul>';
          foreach ($recent_posts as $recent) {
            echo '<li><a href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"] . '</a></li>';
          }
          echo '</ul>';
          ?>

        </div>
        <div class="small-6 medium-12 large-4 large-offset-1 end columns latest-projects">

          <h6>Latest projects</h6>

          <?php
          $args = array('numberposts' => '5'
                        ,'post_type' => 'project'
                        ,'orderby' => 'post_date'
                        ,'post_status' => 'publish');
          $recent_posts = wp_get_recent_posts($args);
          echo '<ul>';
          foreach ($recent_posts as $recent) {
            echo '<li><a href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"] . '</a></li>';
          }
          echo '</ul>';
          ?>

        </div>
      </div>
    </div>
    <div class="small-11 small-centered medium-7 medium-uncentered columns">
      <div class="row">
        <div class="medium-12 large-5 columns">
          <div class="row">
            <div class="small-6 large-12 columns">
              <?php echo do_shortcode('[mc4wp_form]'); ?>
            </div>
            <div class="small-6 large-12 columns">
              <ul class="undercover social-block">
                <li class="tw"><a href="https://twitter.com/wecontrast">  
                    <svg id="tw1" viewBox="0 0 200 200">
                    <use xlink:href="<?php echo $stylesheet_directory . '/includes/icons.svg#tw' ?>"></use>
                    </svg>
                    <svg id="tw2" viewBox="0 0 200 200">
                    <use xlink:href="<?php echo $stylesheet_directory . '/includes/icons.svg#tw' ?>"></use>
                    </svg>
                  </a></li><li class="fb"><a href="https://www.facebook.com/wecontrast">
                    <svg id="fb1" role="img" title="Facebook">
                    <use xlink:href="<?php echo $stylesheet_directory . '/includes/icons.svg#fb' ?>"></use>
                    </svg>
                    <svg id="fb2" role="img" title="Facebook">
                    <use xlink:href="<?php echo $stylesheet_directory . '/includes/icons.svg#fb' ?>"></use>
                    </svg>
                  </a></li><li class="gp"><a href="https://plus.google.com/+WearecontrastHQ/posts" rel="publisher">
                    <svg id="gp1" role="img" title="Google+">
                    <use xlink:href="<?php echo $stylesheet_directory . '/includes/icons.svg#gp' ?>"></use>
                    </svg>
                    <svg id="gp2" role="img" title="Google+">
                    <use xlink:href="<?php echo $stylesheet_directory . '/includes/icons.svg#gp' ?>"></use>
                    </svg>
                  </a></li><li class="rs"><a href="http://feeds.feedburner.com/wearecontrast/LwqK">
                    <svg id="rs1" role="img" title="RSS">
                    <use xlink:href="<?php echo $stylesheet_directory . '/includes/icons.svg#rs' ?>"></use>
                    </svg>
                    <svg id="rs2" role="img" title="RSS">
                    <use xlink:href="<?php echo $stylesheet_directory . '/includes/icons.svg#rs' ?>"></use>
                    </svg>
                  </a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="medium-12 large-6 large-offset-1 end columns branding">

          <img src="<?php echo $stylesheet_directory; ?>/img/contrast.svg"
               alt="<?php bloginfo('name'); ?>"
               class="contrast-logo"
               onerror="this.onerror=null; this.src='<?php echo $stylesheet_directory; ?>/img/contrast.png'" />
          <p class="tagline"><?php echo get_bloginfo('description'); ?></p>
        </div>
      </div>
    </div>
  </div>
</footer>

<style type="text/css">

.single-blog-post .crop-thumb img {
    min-width:100% !important;
}

</style>
<?php if ( !is_user_logged_in() ) { ?> 
<script type="text/javascript">
    if (document.location.hostname == "wearecontrast.com") {
      (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
          (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
      })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

      ga('create', 'UA-56010312-1', 'auto');
      ga('require', 'linkid', 'linkid.js');
      ga('require', 'displayfeatures');
      ga('send', 'pageview');
      <?php if (is_404()) { ?>
        ga('send', 'event', '404', 'document.location.pathname + document.location.search', 'document.referrer');
      <?php } ?>
    }
  </script>
<?php } ?>

</body>
</html>