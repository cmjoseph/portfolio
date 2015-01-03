<?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  <div class="item">
	<a class="box" href="<?php the_permalink(); ?>">
		<img class="img-responsive" src="<?php echo $image[0]; ?>" alt="">
	  	<div class="caption">
	  		<h1><?php the_title(); ?></h1>
	  		<p><?php echo word_count(get_the_excerpt(), '20').'&hellip;'; ?></p>
	  	</div>
  	</a>
  </div>
<?php endif; ?>
	
