<?php

/* 
template name: Home
*/

get_header();

$field = get_fields();
$slides = $field['slider'];
$skills = $field['skills'];

$args = array(
    'post_type'         => 'projects',
    'post_status'       => 'publish',
    'orderby' 			=> 'menu_order', 
    'posts_per_page'    => -1,
    'order' 	=> 'ASC', 
);

$projects = get_posts($args);

?>

<section class="home" data-template="home">
	<div id="home" class="section">
		<div class="home-content">
			<div class="slider">
				<ul id="slider-home" class="rslides">
					<?php foreach ($slides as $key => $value): 
						$image = $value['slide'];
					?>
					<li>
						<div class="item" style="background-image: url('<?php echo $image['sizes']['fullscreen'] ?>')">
							<div class="overlay"></div>
							<h2><?php echo $value['title'] ?></h2>
						</div>
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
	</div>
	<?php if ($projects): ?>
	<div id="projects" class="section">
		<h3 class="title">Projects</h3>
		<div class="projects-content">
			<div class="grid">
				<?php foreach ($projects as $key => $value): 
					$data = get_fields($value->ID);
					$link = get_permalink($value->ID);
				?>
				<div class="grid-item" style="background-color:<?php echo $data['website_color'] ?>">
					<a href="<?php echo $link; ?>">
						<img class="logo" src="<?php echo $data['website_logo']['url'] ?>">
						<div class="detail">
							<div class="content">
								<h4><?php echo $value->post_title; ?></h4>
								<p>
									<?php echo wp_trim_words($data['website_description'], 25, ' ...') ?>
								</p>
								<button>Details</button>
							</div>
						</div>
					</a>
				</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<?php endif ?>
	<?php if ($skills): ?>
	<div id="skills" class="section">
		<h3 class="title">Skills</h3>
		<div class="skills-content">
			<div class="grid">
				<?php foreach ($skills as $key => $value): ?>
				<div class="skill-item">
					<div class="content">
						<img class="sk-logo" src="<?php echo $value['skill_logo']['url']; ?>" alt="">
					</div>
					<span class="name"><?php echo $value['skill_name'] ?></span>
				</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<?php endif ?>
	<div id="about" class="section">
		<h3 class="title">About me</h3>
		<div class="about-content">
			<div class="front">
				<div class="content">
					<h4>Doing my job...one day at a time</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo blanditiis odio nostrum totam, dignissimos ipsa, adipisci recusandae unde sapiente similique voluptates aliquam error distinctio accusamus culpa ipsum laboriosam laborum reprehenderit, natus temporibus facilis sint. Nulla cupiditate culpa possimus facere vitae?</p>
				</div>
			</div>
			<div class="back">
				<div class="overlay"></div>
				<video autoplay loop>
					<source src="<?php echo get_template_directory_uri(); ?>/video/video.mp4" type="video/mp4">
				</video>
			</div>
		</div>
	</div>
	<div id="contact" class="section">
		<h3 class="title">Contact</h3>
		<?php echo do_shortcode("[contact-form-7 id='112' title='Contact form 1']"); ?>
	</div>
</section>

<?php get_footer(); ?>