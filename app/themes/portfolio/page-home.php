<?php

/*
Template Name: Home Template
*/	

get_header(); 

?>

<section data-template="home" class="home">
	<div class="home__main" id="home">
		<ul class="rslides" id="slides">
			<li class="slide">
				<div class="overlay"></div>
				<div class="picture" style="background-image: url('http://img0.mxstatic.com/wallpapers/e51affa434533b44445fc00b5d60ad5f_large.jpeg')"></div>
				<div class="caption">
					<div class="caption__inner">
						<div class="text one">
							<p>Making The Web A Better Place</p>
							<small>- An Awesome Dude</small>
						</div>
					</div>
				</div>
			</li>
			<li class="slide">
				<div class="overlay"></div>
				<div class="picture" style="background-image: url('http://img0.mxstatic.com/wallpapers/0112fc56151fdcdd378a3db1624bc7fe_large.jpeg')"></div>
				<div class="caption">
					<div class="caption__inner">
						<div class="text two">
							<p>Making The Web A Better Place</p>
							<small>- An Awesome Dude</small>
						</div>
					</div>
				</div>
			</li>
			<li class="slide">
				<div class="overlay"></div>
				<div class="picture" style="background-image: url('http://img0.mxstatic.com/wallpapers/a8d26751b864cddf91632cddb1232363_large.jpeg')"></div>
				<div class="caption">
					<div class="caption__inner">
						<div class="text three">
							<p>Making The Web A Better Place</p>
							<small>- An Awesome Dude</small>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
	<?php 

	$args = array(	
		'post_type' => 'projects',
		

	)


	 ?>
	<div class="home__projects" id="projects">
		<div id="overlay" class="overlay"></div>
		<section class="grid">
			<div data-mh="grid-item" class="grid__item" data-title="Post Test" data-image="http://img0.mxstatic.com/wallpapers/a8d26751b864cddf91632cddb1232363_large.jpeg" data-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, vero." data-web="http://www.google.com">
				<div class="image" style="background-image: url('https://placeimg.com/872/400/any')"></div>
				<div class="screen"></div>
			</div>
			<div data-mh="grid-item" class="grid__item">
				<div class="image" style="background-image: url('https://placeimg.com/872/400/any')"></div>
				<div class="screen"></div>
			</div>
			<div data-mh="grid-item" class="grid__item">
				<div class="image" style="background-image: url('https://placeimg.com/872/400/any')"></div>
				<div class="screen"></div>
			</div>
			<div data-mh="grid-item" class="grid__item">
				<div class="image" style="background-image: url('https://placeimg.com/872/400/any')"></div>
				<div class="screen"></div>
			</div>
			<div data-mh="grid-item" class="grid__item">
				<div class="image" style="background-image: url('https://placeimg.com/872/400/any')"></div>
				<div class="screen"></div>
			</div>
			<div data-mh="grid-item" class="grid__item">
				<div class="image" style="background-image: url('https://placeimg.com/872/400/any')"></div>
				<div class="screen"></div>
			</div>
			<div data-mh="grid-item" class="grid__item">
				<div class="image" style="background-image: url('https://placeimg.com/872/400/any')"></div>
				<div class="screen"></div>
			</div>
			<div data-mh="grid-item" class="grid__item">
				<div class="image" style="background-image: url('https://placeimg.com/872/400/any')"></div>
				<div class="screen"></div>
			</div>
		</section>
		<section class="panel" id="grid-panel">
			<div class="panel__content">
				<h2>Project</h2>
				<div class="image">
					<a class="screen">
						<span class="window"></span>
						<img src="https://placeimg.com/872/400/any" alt="">
					</a>
				</div>
				<article>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus eius eligendi a similique non, neque, quod iste. Quo, rerum, nostrum. Nisi eum, ut animi molestias quam, consequatur dolor natus sequi architecto ea nobis, perferendis. Temporibus, consequatur repellendus nam illum reprehenderit possimus. In debitis saepe vitae iure asperiores molestias, deserunt, delectus unde sequi nulla quod quae voluptatum, aspernatur eligendi? Sint, vero.
				</article>
				<a class="btn-cta" href="">Website</a>
			</div>
		</section>
	</div>
</section>



<?php get_footer(); ?>