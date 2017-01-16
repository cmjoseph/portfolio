<?php

$field = get_fields();

$slides = $field['website_image'];

get_header(); 

while ( have_posts() ) : the_post(); 

?>
	<script>var home = '<?php echo esc_url( home_url( '/' ) ); ?>';</script>
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
				<div id="panel" class="panel">
					<div class="content">
						<div class="top elem">
							<div class="circle" style="background-color:<?php echo $field['website_color'] ?>">
								<a target="_blank" href="<?php echo $field['website_url']; ?>"><img class="logo" src="<?php echo $field['website_logo']['url']; ?>" alt="<?php echo the_title(); ?>"></a>
							</div>
							<h2><?php echo the_title(); ?></h2>
						</div>
						<div class="mid elem wysiwyg">
							<h3>Description</h3>
							<?php echo $field['website_description'] ?>
						</div>
						<div class="bottom elem wysiwyg">
							<h3>Details</h3>
							<?php echo $field['website_details'] ?>
						</div>
						<div class="mandated elem">
							<p>Project mandated by</p>
							<a class="company" href="<?php echo $field['company_link'] ?>" target="_blank"><img src="<?php echo $field['mandated_at']['url'] ?>" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php endwhile; ?>

<?php get_footer(); ?>