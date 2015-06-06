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

    <section class="block header-block header-block--collapse">

      <div class="row header-main">
        <div class="large-12 columns">
          <div class="row">
            <div class="large-7 medium-10 small-11 small-centered medium-up-table columns">
              <div class="avatar-cont">
                <img src="<?php echo $template_directory; ?>/img/me.jpg" alt="my face" class="avatar" />
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

    <!-- <section class="block header-block">

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

    </section> -->



    <!-- <section class="block writing-block">

      <div class="row">
        <div class="large-9 medium-10 small-11 small-centered text-center columns">
          <div class="section-icon">
            <svg viewBox="-101.112 32.59 75 150.5" class="icon-pen">
              <use xlink:href="#pen"></use>
            </svg>
          </div>

          <h2 class="h1">Recent Writing</h2>

          <ol class="recent-posts">
            <li>
              <h3><a href='#'>2014 in review, 2015 goals</a></h3>
              <span class="wb-source medium">M</span>
              <span class="wb-when">2 days ago</span>
              <span class="wb-category">in <a href="#">life</a>, <a href="#">year in review</a></span>
              <span class="wb-readtime">4 min read</span>
            </li>
            <li>
              <h3><a href='#'>Chapter 1: Complete</a></h3>
              <span class="wb-when">6 months ago</span>
              <span class="wb-category">in <a href="#">life</a></span>
              <span class="wb-readtime">6 min read</span>
            </li>
            <li>
              <h3><a href='#'>And so it begins</a></h3>
              <span class="wb-when">9 months ago</span>
              <span class="wb-category">in <a href="#">life</a></span>
              <span class="wb-readtime">7 min read</span>
            </li>
          </ol>

          <span class="want-more-cont">
            <a href="#">want more? follow me &raquo;</a>
          </span>

        </div>
      </div>

    </section>

    <?php

      // Get Tweet Count
      try {
        $twitteruser = "fredrivett";
        $consumerkey = "XAQeGS83p02v319DAXhhNL0HL";
        $consumersecret = "IjP4ABxWuv6P9GzprciUBa0qq8lcl5tNXGAlgQHm4aMixJnY7Z";
        $accesstoken = "21573667-FxdeQoFGTIqrj6BNZUa3AHlfAbk4RuDGpuvNT3ECk";
        $accesstokensecret = "jkFTw56ubQezuh6B6vGQeaAM7efiPPURHfrENWWd1YVj9";

        $connection = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
        $tweetCount = $connection->get("users/show",array("screen_name"=>$twitteruser))->statuses_count;
        $tweetK = substr($tweetCount, 0, -3);
      } catch(Exception $e) {
        echo "The twitter oauth has FAILED!";
        $tweetK = "7";
      }

      // Get Years Since Date
      function yearsSinceDate($then) {
          $then = date('Ymd', strtotime($then));
          $diff = date('Ymd') - $then;
          return substr($diff, 0, -4);
      }

    ?>

    <section class="block stats-block">
      <div class="row">
        <div class="large-10 medium-11 small-11 small-centered text-center columns">

          <h2 class="h1 line"><span>Numbers</span></h2>

          <ul class="small-block-grid-2 medium-block-grid-5 large-block-grid-5">
            <li class="stats-websites">
              <div>
                <span>
                  <span class="stat-svg">
                    <svg viewBox="0 0 100 100">
                      <use xlink:href="defs.svg#website"></use>
                    </svg>
                  </span>
                  <span class="stat-num">13</span>
                </span>
                <p class="stat-text"><span>websites built</span></p>
              </div>
            </li>
            <li class="stats-ps">
              <div>
                <span>
                  <svg viewBox="0 0 100 100">
                  <use xlink:href="defs.svg#ps"></use>
                </svg>
                  <span class="stat-num"><?php echo yearsSinceDate("2004-01-01"); ?></span>
                </span>
                <p class="stat-text"><span>years of photoshop</span></p>
              </div>
            </li>
            <li class="stats-books">
              <div>
                <span>
                  <svg viewBox="0 0 100 100">
                    <use xlink:href="defs.svg#books"></use>
                  </svg>
                  <span class="stat-num">65</span>
                </span>
                <p class="stat-text"><span>books read</span></p>
              </div>
            </li>
            <li class="stats-wp">
              <div>
                <span>
                  <svg viewBox="0 0 100 100">
                    <use xlink:href="defs.svg#wp"></use>
                  </svg>
                  <span class="stat-num">4</span>
                </span>
                <p class="stat-text"><span>themes developed</span></p>
              </div>
            </li>
            <li class="stats-video">
              <a href="http://vimeo.com/fredrivett" target="_blank">
                <span>
                  <svg viewBox="0 0 100 100">
                    <use xlink:href="defs.svg#video"></use>
                  </svg>
                  <span class="stat-num">4</span>
                </span>
                <p class="stat-text"><span>videos made</span></p>
              </a>
            </li>
            <li class="stats-launch">
              <a href="http://wearecontrast.com/project/" target="_blank">
                <span>
                  <svg viewBox="0 0 100 100">
                    <use xlink:href="defs.svg#launch"></use>
                  </svg>
                  <span class="stat-num">2</span>
                </span>
                <p class="stat-text"><span>projects launched</span></p>
              </a>
            </li>
            <li class="stats-ai">
              <div>
                <span>
                  <svg viewBox="0 0 100 100">
                    <use xlink:href="defs.svg#ai"></use>
                  </svg>
                  <span class="stat-num"><?php echo yearsSinceDate("2011-09-01"); ?></span>
                </span>
                <p class="stat-text"><span>years of illustrator</span></p>
              </div>
            </li>
            <li class="stats-tweets">
              <a href="http://twitter.com/fredrivett" target="_blank">
                <span>
                  <svg viewBox="0 0 100 100">
                    <use xlink:href="defs.svg#twitter"></use>
                  </svg>
                  <span class="stat-num"><?php echo $tweetK; ?></span>
                </span>
                <p class="stat-text"><span>tweets tweeted</span></p>
              </a>
            </li>
            <li class="stats-posts">
              <div>
                <span>
                  <svg viewBox="0 0 100 100">
                    <use xlink:href="defs.svg#pen"></use>
                  </svg>
                  <span class="stat-num">10</span>
                </span>
                <p class="stat-text"><span>posts published</span></p>
              </div>
            </li>
            <li class="stats-insta">
              <a href="http://instagram.com/fredrivett" target="_blank">
                <span>
                  <svg viewBox="0 0 100 100">
                    <use xlink:href="defs.svg#instagram"></use>
                  </svg>
                  <span class="stat-num">112</span>
                </span>
                <p class="stat-text"><span>shots 'grammed</span></p>
              </a>
            </li>
          </ul>

        </div>
      </div>
    </section>





    <section class="row block work-block">

      <div class="large-9 medium-10 small-11 small-centered columns">

        <div class="row">

          <h2 class="h1 line"><span>Work</span></h2>

          <ul class="work-block-list">

            <li class="small-12 columns work-block-list__item">

              <aside class="work-block-list__details">
                <h1 class="work-block-list__main-title">Design &amp; Build</h1>
                <h2 class="work-block-list__sub-title js-hover-slide-down">HowsItGoin</h2>
                <a href="/work/howsitgoin/" class="link-block work-block-list__link js-hover-slide-down">more info &raquo;</a>
              </aside>

              <img src="img/work/howsitgoin.jpg" alt="HowsItGoin">

            </li>

            <li class="small-12 medium-6 columns work-block-list__item">

              <aside class="work-block-list__details">
                <h1 class="work-block-list__main-title">Design &amp; Build</h1>
                <h2 class="work-block-list__sub-title js-hover-slide-down">CONTRAST</h2>
                <a href="/work/contrast/" class="link-block work-block-list__link js-hover-slide-down">more info &raquo;</a>
              </aside>

              <img src="img/work/contrast.jpg" alt="CONTRAST website">

            </li>

            <li class="small-12 medium-6 columns work-block-list__item">

              <aside class="work-block-list__details">
                <h1 class="work-block-list__main-title">Design &amp; Build</h1>
                <h2 class="work-block-list__sub-title js-hover-slide-down">FlashTabs</h2>
                <a href="/work/flashtabs/" class="link-block work-block-list__link js-hover-slide-down">more info &raquo;</a>
              </aside>

              <img src="img/work/flashtabs.png" alt="FlashTabs">

            </li>

            <li class="small-12 large-4 columns work-block-list__item">

              <aside class="work-block-list__details">
                <h1 class="work-block-list__main-title">Videography</h1>
                <h2 class="work-block-list__sub-title js-hover-slide-down">Momentum</h2>
                <a href="/work/momentum/" class="link-block work-block-list__link js-hover-slide-down">more info &raquo;</a>
              </aside>

              <div class="video-wrapper">
                <iframe src="http://player.vimeo.com/video/78837099" width="500" height="283" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
              </div>

            </li>

            <li class="small-12 medium-6 large-4 columns work-block-list__item">

              <aside class="work-block-list__details">
                <h1 class="work-block-list__main-title">Design &amp; Build</h1>
                <h2 class="work-block-list__sub-title js-hover-slide-down">Smile Ministries Nepal</h2>
                <a href="/work/smileministriesnepal/" class="link-block work-block-list__link js-hover-slide-down">more info &raquo;</a>
              </aside>

              <img src="img/work/smileministriesnepal.jpg" alt="Smile Ministries Nepal">

            </li>

            <li class="small-12 medium-6 large-4 columns work-block-list__item">

              <aside class="work-block-list__details">
                <h1 class="work-block-list__main-title">Videography</h1>
                <h2 class="work-block-list__sub-title js-hover-slide-down">London Crosswalk 2012</h2>
                <a href="/work/crosswalk2012/" class="link-block work-block-list__link js-hover-slide-down">more info &raquo;</a>
              </aside>

              <div class="video-wrapper">
                <iframe src="http://player.vimeo.com/video/89733450" width="500" height="283" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
              </div>

            </li>

          </ul>

        </div>

      </div>

    </section>




    <footer class="main-footer">
      <div class="absolute-hor-center">
        <ul class="social-block">
          <li class="tw">
            <a href="http://www.twitter.com/fredrivett">
              <span class="sb-letters">Tw</span>
              <span class="sb-logo">
                <svg viewBox="0 0 100 100">
                  <use xlink:href="defs.svg#twitter"></use>
                </svg>
              </span>
            </a>
          </li>
          <li class="in">
            <a href="http://www.instagram.com/fredrivett">
              <span class="sb-letters">In</span>
              <span class="sb-logo">
                <svg viewBox="0 0 100 100">
                  <use xlink:href="defs.svg#instagram"></use>
                </svg>
              </span>
            </a>
          </li>
          <li class="vi">
            <a href="http://www.vimeo.com/fredrivett">
              <span class="sb-letters">Vi</span>
              <span class="sb-logo">
                lo
              </span>
            </a>
          </li>
          <li class="pi">
            <a href="http://www.pinterest.com/fredrivett">
              <span class="sb-letters">Pi</span>
              <span class="sb-logo">
                lo
              </span>
            </a>
          </li>
          <li class="gp">
            <a href="https://plus.google.com/+FredRivett">
              <span class="sb-letters">G+</span>
              <span class="sb-logo">
                lo
              </span>
            </a>
          </li>
        </ul>
      </div>

      <div class="row">
        <div class="large-10 medium-11 small-11 small-centered text-center columns">

          <p>Icons courtesy of those guys at <a href="http://flaticon.com">FlatIcon</a></p>

        </div>
      </div>
    </footer> -->












<!--    <div class="row">
      <div class="large-12 columns">

        <span class="lato">
          <h1>This is a header 1</h1>
          <h2>This is a header 1</h2>
          <h3>This is a header 1</h3>
          <h4>This is a header 1</h4>
          <h5>This is a header 1</h5>
          <h6>This is a header 1</h6>
        </span>

<p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>

<h2 l>Header Level 2</h2>

<ol>
   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
   <li>Aliquam tincidunt mauris eu risus.</li>
</ol>

<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote>

<h3>Header Level 3</h3>

<ul>
   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
   <li>Aliquam tincidunt mauris eu risus.</li>
</ul>

<pre><code>
#header h1 a {
	display: block;
	width: 300px;
	height: 80px;
}
</code></pre>
      </div>
    </div>-->

    <script src="<?php echo $template_directory; ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo $template_directory; ?>/bower_components/foundation/js/foundation.min.js"></script>
    <script src="<?php echo $template_directory; ?>/js/jquery.visible.min.js"></script>
    <script src="<?php echo $template_directory; ?>/js/app.js"></script>
  </body>
</html>
