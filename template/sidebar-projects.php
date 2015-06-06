<?php
$args = array(
  'post_type' => 'project',
  'cat' => get_cat_ID('Project Groups')
);

$projectsQuery = new WP_Query($args);
?>
  
<?php if($projectsQuery->have_posts()): ?>
      
  <div class="row full-width quick-links">

      <ol class="undercover large-month-list full-width">
          <?php dynamic_sidebar('projects-sidebar'); ?>
      </ol>

  </div>
    
<?php endif; ?>