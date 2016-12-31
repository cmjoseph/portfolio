<?php

/* 
template name: Home
*/

get_header();

$field = get_fields();
$slides = $field['slider'];

?>

<section class="home" data-template="home">
	<div id="home" class="section">
		<div class="home-content">
			<h2><?php echo $field['title'] ?></h2>
		</div>
		<div class="slider">
			<div class="overlay"></div>
			<ul id="slider-home" class="rslides">
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
	</div>
	<div id="projects" class="section">
		<div class="projects-content">
			
		</div>
	</div>
	<div id="skills" class="section"></div>
	<div id="about" class="section"></div>
	<div id="contact" class="section"></div>
</section>

<?php get_footer(); ?>