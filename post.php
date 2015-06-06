<!doctype html>
<html class="no-js" lang="en">
  <head>

  <?php $template_directory = get_stylesheet_directory_uri(); ?>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fred Rivett &ndash; Web Design &amp; Creative Endeavours</title>
    <link rel="stylesheet" href="<?php echo $template_directory; ?>/css/app.css" />
    <script src="<?php echo $template_directory; ?>/bower_components/modernizr/modernizr.js"></script>
    <script src="<?php echo $template_directory; ?>/js/svg4everybody.min.js"></script>

    <?php
      /* require "<?php echo $template_directory; ?>/includes/twitteroauth/autoloader.php";
      use Abraham\TwitterOAuth\TwitterOAuth; */
    ?>

  </head>
  <body>

    <div class="svg-defs">

      <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
           xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           width="75px" height="150.5px" viewBox="-101.112 32.59 75 150.5"
           enable-background="new -101.112 32.59 68 150.5" xml:space="preserve">
        <defs>
          <g id="pen">
            <path d="M-48.625,52.303c0,0-9.813,9.34-20.574-0.18c-10.752-9.517-16.331-0.142-16.331-0.142s-0.378,27.19,2.511,41.941c3.947-2.083,10.022-3.215,15.824-3.138c6.369,0.088,11.901,1.488,15.382,3.617C-50.865,90.539-48.855,79.228-48.625,52.303z"/>
            <path d="M-70.153,96.198c0.77-0.058,1.655-0.086,2.706-0.076c7.154,0.063,12.944,1.71,12.93,3.684c-0.01,1.146-1.979,2.143-5.009,2.771c-0.126-1.313-0.243-2.567-0.332-3.745l-4.724-0.327l-0.266,2.883l0.255,1.811l0.437,3.072l0.131,0.925l0.127,0.925l3.759,26.617l-0.325,0.333c-4.687,4.748-7.406,10.818-8.979,16.313l-0.54,5.864c0,0,1.992,0.31,3.178,0.117c1.187-0.189-0.347-9.608,11.312-23.351c0,0-2.159-14.254-3.532-26.521c-0.036-0.312-0.069-0.621-0.102-0.929c-0.036-0.307-0.066-0.609-0.096-0.913c5.793-1.155,9.373-3.564,9.401-5.907l0.935-0.006l-0.933-0.008c0.009-1.232-0.955-2.51-2.716-3.638c-2.956-1.891-8.138-3.353-14.689-3.439c-6.634-0.09-12.208,1.309-15.39,3.176c-1.801,1.059-2.849,2.265-2.86,3.436c-0.017,1.818,2.418,3.788,6.397,5.19c0.081-3.692,0.167-5.889,0.168-5.921l0.022-0.539l0.479-0.256C-75.865,96.391-72.66,96.139-70.153,96.198z"/>
            <path d="M-74.415,166.651c0.193,0.085,0.405,0.14,0.626,0.144c0.226,0,0.437-0.046,0.632-0.136c0.563-0.249,0.962-0.833,0.968-1.514c0.003-0.376-0.133-0.702-0.327-0.981c-0.221-0.313-0.533-0.532-0.908-0.623c0.22-3.714,1.127-11.647,4.646-19.39c1.606-3.544,3.75-7.042,6.645-10.066l-3.463-24.53l-0.199-1.343l-0.13-0.932l-0.134-0.935l-0.433-3.078l-0.701-4.931c-1.346-0.186-4.541-0.496-7.501,0.111c-0.813,0.167-1.613,0.394-2.351,0.724c-0.038,0.93-0.101,2.98-0.162,5.862c-0.006,0.311-0.012,0.644-0.019,0.967c-0.002,0.305-0.008,0.608-0.014,0.934c-0.02,1.188-0.035,2.466-0.047,3.852c-0.046,5.542-0.021,12.073,0.17,19.083c1.376,0.051,2.468,1.745,2.45,3.817c-0.018,1.905-0.965,3.46-2.18,3.729c0.374,8.665,1.032,17.751,2.116,26.421c-0.367,0.304-0.623,0.753-0.625,1.282c-0.003,0.209,0.045,0.398,0.104,0.581C-75.103,166.125-74.802,166.467-74.415,166.651z"/>
          </g>
        </defs>
      </svg>

    </div>

    <section class="block header-block header-block--collapsed">
      <div class="row header-main">
        <div class="large-12 columns">
          <div class="row">
            <div class="large-7 medium-10 small-11 small-centered medium-up-table columns">
              <div class="avatar-cont">
                <img src="img/me.jpg" alt="my face" class="avatar" />
              </div>
              <div class="header-blurb">
                <h2>Fred Rivett</h2>
                <p>24 year old Web Designer from Essex, UK. Specialises in front end design &amp; development,
                  dabbles in back end development &amp; videography. Co-founded <a href="http://howsitgo.in">HowsItGoin</a> as part of <a href="http://wearecontrast.com/2014/11/introducing-sixbysix/">#SixBySix</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <script src="<?php echo $template_directory; ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo $template_directory; ?>/bower_components/foundation/js/foundation.min.js"></script>
    <script src="<?php echo $template_directory; ?>/js/jquery.visible.min.js"></script>
    <script src="<?php echo $template_directory; ?>/js/app.js"></script>
  </body>
</html>
