<!-- <?php get_template_part('templates/page', 'header'); ?> -->

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>
<section class="projects">
  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('sections/loop', get_post_format()); ?>
  <?php endwhile; ?>
</section>
<?php if ($wp_query->max_num_pages > 1) : ?>
  <div id="load_btn">
    <div class="load"><?php next_posts_link(__('More Projects', 'roots')); ?></div>
    <div class="loading"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/loading.gif" alt="">Loading...</div>
  </div>
  <!-- <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav> -->
<?php endif; ?>
<?php get_template_part('sections/profile'); ?>
