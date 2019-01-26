<?php 
  get_header();
?>

  <div class="content">
    <div class="tars-row sides-padding">
      <div class="sp-col-12">
        <?php 
        if(function_exists('yoast_breadcrumb')) {
          yoast_breadcrumb('<p id="breadcrumbs">','</p>');
        }

        while(have_posts()) {
          the_post(); ?>
          <h1><?php the_title(); ?></h1>
          <p><?php the_content(); ?></p>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
  
<?php
  get_footer();
?>