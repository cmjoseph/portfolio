<?php

$field = get_fields();

$slides = $field['website_image'];

get_header(); 

while ( have_posts() ) : the_post(); 

?>
	
	<section class="single" data-template="single">
		<div id="single" class="section">
			<div class="single-content">
				<div class="slider">
					<ul id="slider-single" class="rslides">
						<?php foreach ($slides as $key => $value): 
							$image = $value['slide'];
						?>
						<li>
							<div class="item" style="background-image: url('<?php echo $image['sizes']['fullscreen'] ?>')"></div>
						</li>
						<?php endforeach ?>
					</ul>
					<ul id="slider-pagination" class="pagination">
						<?php foreach ($slides as $key => $value): ?>
						<li><a href="#" class="dot"></a></li>
						<?php endforeach ?>
					</ul>
				</div>
				<div class="panel">
					<div class="content">
						<div class="top">
							<a target="_blank" href="<?php echo $field['website_url']; ?>"><img class="logo" src="<?php echo $field['website_logo']['url']; ?>" alt="<?php echo the_title(); ?>"></a>
							<h2><?php echo the_title(); ?></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php endwhile; ?>

<?php get_footer(); ?>