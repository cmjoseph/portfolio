###Wordpress Template V1.0
---

#Hit the ground running!
First of all, take a quick look at the gruntfile.js and edit cssMethod and jsMethod to your liking.
When you start a new project, put this folder in your themes directory, then, run ```npm install``` in the directory and start working with ```grunt```

#Styling
The css is in the css folder in the theme's root. put your scss in /css/scss/*.scss and your less in css/less/*.less . If you want to use pure css, go and learn less/sass. 
Everything will be merged automatically and compiled to /css/build.css

##Using Sass/SCSS
Do whatever you want, **BUT** use @import to import your files in main.scss. Otherwise, they wont be compiled.
the general_admin.css in the admin folder affect everything in the dashboard

#Javascripts
Every js will be compiled into js/build.js
Each javascript file are in the js/ folder in the theme's root. If you add anything, be sure to modify the enqueued_scripts in functions.php

#That's about it. Have fun