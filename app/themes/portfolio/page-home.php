<?php

/*
Template Name: Home Template
*/	

get_header(); 

?>

<section data-template="home" id="home" class="home">
	<ul class="rslides" id="slides">
		<li class="slide">
			<div class="overlay"></div>
			<div class="picture" style="background-image: url('http://img0.mxstatic.com/wallpapers/e51affa434533b44445fc00b5d60ad5f_large.jpeg')"></div>
			<div class="caption">
				<div class="caption__inner">
					<div class="text one">Making The Web A Better Place<small>- An Awesome Dude</small></div>
				</div>
			</div>
		</li>
		<li class="slide">
			<div class="overlay"></div>
			<div class="picture" style="background-image: url('http://img0.mxstatic.com/wallpapers/0112fc56151fdcdd378a3db1624bc7fe_large.jpeg')"></div>
			<div class="caption">
				<div class="caption__inner">
					<div class="text two">Making The Web A Better Place</div>
				</div>
			</div>
		</li>
		<li class="slide">
			<div class="overlay"></div>
			<div class="picture" style="background-image: url('http://img0.mxstatic.com/wallpapers/a8d26751b864cddf91632cddb1232363_large.jpeg')"></div>
			<div class="caption">
				<div class="caption__inner">
					<div class="text three">Making The Web A Better Place</div>
				</div>
			</div>
		</li>
	</ul>
</section>

<?php get_footer(); ?>