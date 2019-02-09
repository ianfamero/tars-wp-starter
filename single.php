<?php 
  get_header();
?>

  <div class="content">
    <div class="tars-row sides-padding">
      <div class="sp-col-12 dt-col-8">
        <?php 
        if(function_exists('yoast_breadcrumb')) {
          yoast_breadcrumb('<p id="breadcrumbs">','</p>');
        }
        if(have_posts()) {
          while(have_posts()) {
            the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <small><strong>Posted on <?php echo the_time('F j, Y'); ?></strong></small>
            <p><?php the_content(); ?></p>
          <?php
          }
        }
        // uncomment if using DISQUS
        // if (comments_open() || get_comments_number()) {
        //   comments_template();
        // }
        ?>
      </div>
      <div class="sp-col-12 dt-col-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
 
<?php
  get_footer();
?>