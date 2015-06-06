<?php global $sixbysix; // this lets us access the variable declared in other files ?>

<section class="block jumbotron text-center <?php
  if ($sixbysix === "expanded") { echo "expanded"; }
  else if ($sixbysix === "minimised") { echo "minimised"; }
  else { echo "hidden"; } ?>">

  <div class="row full-width site-message">

    <a href="http://wearecontrast.com/2014/11/introducing-sixbysix/">
      <h2 class="h1-style">Learning to Launch</h2>
      <p>6 months. 6 projects. #SixBySix</p>
<!--          <span class="sixbysix-more">What is this? &raquo;</span>-->
    </a>

  </div>
  
  <?php echo get_template_part('template/sidebar-projects'); ?>

</section>