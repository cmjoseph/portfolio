<?php

/*
Template Name: Home Template
*/	

get_header(); 

?>

<section data-template="home" id="home" class="home">
	<ul class="rslides" id="slides">
		<li class="slide">
			<div class="video">
				<video class="background-video hero-bg-video is-playing" loop="loop" autoplay="autoplay" muted="muted" poster="https://html5backgroundvideos.com/wp-content/uploads/2015/09/programming-ide.jpg" id="bgvid">
					<source src="https://d3k5xyayaartr5.cloudfront.net/programming-ide/programming-ide.mp4" type="video/mp4">
					<source src="https://d3k5xyayaartr5.cloudfront.net/programming-ide/programming-ide.webm" type="video/webm">
					<source src="https://d3k5xyayaartr5.cloudfront.net/programming-ide/programming-ide.ogv" type="video/ogg">
				</video>
			</div>
		</li>
		<li class="slide">
			<div class="video">
				<video class="background-video hero-bg-video is-playing" loop="loop" autoplay="autoplay" muted="muted" poster="https://html5backgroundvideos.com/wp-content/uploads/2015/09/typing-numbers.jpg" id="bgvid">
					<source src="https://d3k5xyayaartr5.cloudfront.net/typing-numbers/typing-numbers.mp4" type="video/mp4">
					<source src="https://d3k5xyayaartr5.cloudfront.net/typing-numbers/typing-numbers.webm" type="video/webm">
					<source src="https://d3k5xyayaartr5.cloudfront.net/typing-numbers/typing-numbers.ogv" type="video/ogg">
				</video>
			</div>
		</li>
		<li class="slide">
			<div class="picture" style="background-image: url('http://img0.mxstatic.com/wallpapers/a8d26751b864cddf91632cddb1232363_large.jpeg')"></div>
		</li>
	</ul>
</section>

<?php get_footer(); ?>