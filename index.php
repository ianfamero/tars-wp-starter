<?php 
  get_header();
?>

  <div class="content">
    <div class="tars-row sides-padding">
      <?php 
      if(function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p id="breadcrumbs">','</p>');
      }
      
      while(have_posts()) {
        the_post(); ?>
        <div class="sp-col-12 tb-col-6 dt-col-4">
          <a href="<?php the_permalink(); ?>">
            <div class="tars-card">
              <?php the_post_thumbnail(); ?>
              <h1><?php the_title(); ?></h1>
              <small><strong><?php echo the_time('F j, Y'); ?></strong></small>
              <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
            </div>
          </a>
        </div>
      <?php
      }
      ?>
    </div>
  </div>

<?php
  get_footer();
?>