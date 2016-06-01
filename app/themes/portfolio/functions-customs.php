<?php

/**
 * Custom made functions that are used in almost every projects
 */

/* Disable Heartbeat */
function stop_heartbeat(){
   wp_deregister_script('heartbeat');
}

add_action('init', 'stop_heartbeat', 1);

$parentSlug = "options";

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Options',
        'menu_slug'     => $parentSlug,
        'capability'	=> 'edit_posts',
        'redirect'		=> true
    ));
}


function get_video_infos($url)
{
    if (preg_match('/youtube\.com\/watch\?v=([^\&\?\/]+)/', $url, $id)) {
        $infos = array('id' => $id[1], 'type' => 'youtube');
    } else if (preg_match('/youtube\.com\/embed\/([^\&\?\/]+)/', $url, $id)) {
        $infos = array('id' => $id[1], 'type' => 'youtube');
    } else if (preg_match('/youtube\.com\/v\/([^\&\?\/]+)/', $url, $id)) {
        $infos = array('id' => $id[1], 'type' => 'youtube');
    } else if (preg_match('/youtu\.be\/([^\&\?\/]+)/', $url, $id)) {
        $infos = array('id' => $id[1], 'type' => 'youtube');
    } else if(preg_match('/player\.vimeo\.com\/video\/([^\&\?\/]+)/', $url, $id)) {
        $infos = array('id' => $id[1], 'type' => 'vimeo');
    } else if(preg_match('/vimeo\.com\/([^\&\?\/]+)/', $url, $id)) {
        $infos = array('id' => $id[1], 'type' => 'vimeo');
    } else {
        $infos = array();
    }

    return $infos;
}

function remove_width_attribute( $html ) {
	   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
	   return $html;
	}
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

// ---------------------------------------------------------------------------------------------------------------------------------------------------------------------

add_action( 'admin_menu', 'wpse_59032_remove_acf_menu', 9999 );
add_action( 'admin_head-edit.php', 'wpse_59032_block_acf_screens' );
add_action( 'admin_head-custom-fields_page_acf-settings', 'wpse_59032_block_acf_screens' );

function wpse_59032_remove_acf_menu() 
{
    /* if not our allowed users, hide menu */
    if ( !current_user_can('delete_plugins') ) {
        remove_menu_page('edit.php?post_type=acf');
       
    }
    if ( !current_user_can('import') ) {
      
        remove_menu_page('edit.php');
    }

}

function wpse_59032_block_acf_screens()
{   
    global $current_screen;

    /* not our screen, do nothing */
    if( 'edit-acf' != $current_screen->id && 'custom-fields_page_acf-settings' != $current_screen->id )
        return;

    /* if not our allowed users, block access */
    if ( !current_user_can('delete_plugins') ) {
        wp_die('message');
    }

}

/**
	Pagination
*/
function hwl_home_pagesize( $query ) {
  	global $allposts,$latestpost, $featuredID;
  	// if(is_post_type_archive("news")){
  	// 	$featured = get_field("featured", 10);
  	// }else{
  	// 	$featured = get_field("featured_video", 19);
  	// }
  	
	// $featured = $featured[0];

	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

	if((!is_admin() && is_post_type_archive("news") ) || (!is_admin() && is_post_type_archive("eckotv") ) || is_tag() || is_search()){
		$query->query_vars['posts_per_page']=2;
		
		$query->query_vars['paged'] = $paged;
		if(!is_tag() && $featured && !is_search()){
			$query->query_vars['post__not_in'] =array($featured);
		}
		return;
	}
	
	return;

}
add_action('pre_get_posts', 'hwl_home_pagesize', 1);

// add_action('admin_menu', 'remove_niggly_bits');
// function remove_niggly_bits() {
//     global $submenu;
//     unset($submenu['edit.php?post_type=news'][15]);
//     print_r($submenu);

function theme_paginate($nav_id, $query = null, $issearch){
	global $wp_query, $post,  $translation_name;
	
	$url = explode("/",$_SERVER['REQUEST_URI']);
	array_shift($url);
	array_pop($url);

	$big = 999999999; // need an unlikely integer

	if($query==NULL){
		$query = $wp_query;
	}
	$currentPage = get_query_var('paged');
	$url = implode("/",$url);
	$pos = strpos($url, '/page/');
	$firstLink = $pos!== FALSE ? substr($url, 0, $pos) : $url;
	if ( $query->max_num_pages > 1 ) :

		$pagination = array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'show_all' => false,
			'prev_next'=>true,
			'prev_text'=>"<i class=\"eckoIcn ecko-chevron-left\"></i>",
			'next_text'=>"<i class=\"eckoIcn ecko-chevron-right\"></i>",
			'type' => 'plain',
		);
		

		?>

		<nav id="<?php echo $nav_id; ?>" class="navigation-pages">
			
			<?php if ($issearch): ?>
			<div class="search-results"><?php printf(
					_n( '%1$s result', '%1$s results', $query->found_posts, $translation_name ),
					number_format_i18n($query->found_posts)
				); ?></div>
			<?php endif ?>
			
			<div class="pagination">
				<div class="first"><?php if($currentPage == 1): ?>
					<span class="disabled left"><i class="eckoIcn ecko-chevron-left"></i><span>First</span></span>
					<?php else: ?>
					<a href="/<?=$firstLink?>/page/1" class="first"><i class="eckoIcn ecko-chevron-left"></i><span>First</span></a>
					<?php endif; ?></div>
				<div class="centered">
					<?php if($currentPage == 1): ?>
					<span class="disabled"><?=$pagination['prev_text'];?></span>
					<?php endif; ?>
					<?php echo paginate_links( $pagination ); ?>
					<?php if($currentPage == $query->max_num_pages): ?>
					<span class="disabled"><?=$pagination['next_text'];?></span>
					<?php endif; ?>
				</div>
				<div class="last"><?php if($currentPage == $query->max_num_pages): ?>
					<span class="disabled right"><span>Last</span><i class="eckoIcn ecko-chevron-right"></i></span>
					<?php else: ?>
					<a href="/<?=$firstLink?>/page/<?=$query->max_num_pages?>" class=""><span>Last</span><i class="eckoIcn ecko-chevron-right"></i></a>
					<?php endif; ?></div>
			</div>
		</nav>


	<?php endif;
	wp_reset_query();

}

/**
	Custom Excerpt
**/

	function custom_wp_trim_excerpt($text, $context = "") {
	$raw_excerpt = $text;

	if ( '' == $text ) {
	    //Retrieve the post content. 
	    $text = get_the_content('');
	}
	 
	    //Delete all shortcode tags from the content. 
	    $text = strip_shortcodes( $text );
	 
	    $text = apply_filters('the_content', $text);
	    $text = str_replace(']]>', ']]&gt;', $text);
	    if($context === "share"){
	    	$allowed_tags = ''; 
	    }elseif($context === "teamListing"){
	    	$allowed_tags = '<p>,<a>,<em>,<strong>'; 
	    }elseif($context === "mailto"){
	    	$allowed_tags = ''; 
	    }else{
	    	$allowed_tags = '<p>,<a>,<em>,<strong>'; 
	    }
	    
	    $text = strip_tags($text, $allowed_tags);
	    
	    if($context === "share"){
	    	$excerpt_word_count = 10;
	    }
	    elseif($context==="teamListing"){
	    	$excerpt_word_count = 32;
	    }elseif($context==="newsEvents" || $context==="othernewsEvents"){
	    	$excerpt_word_count = 24;
	    }else{
	    	$excerpt_word_count = 55;
	    }
	    $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count); 
	     
	    
	    	$excerpt_end = '[...]';
	    

	    if ($context === "mailto") {
	    	 $excerpt_more = apply_filters('excerpt_more', '' . $excerpt_end);
	    } else {
			$excerpt_more = apply_filters('excerpt_more', ' ' . $excerpt_end);
	    }
	    
	   
	     
	    $words = preg_split("/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
	    if ( count($words) > $excerpt_length ) {
	        array_pop($words);
	        $text = implode(' ', $words);
	        $text = $text . $excerpt_more;
	    } else {
	        $text = implode(' ', $words);
	    }
	
	return apply_filters('wp_trim_excerpt', $text, $raw_excerpt);	
	}
	remove_filter('get_the_excerpt', 'wp_trim_excerpt');
	add_filter('get_the_excerpt', 'custom_wp_trim_excerpt');


	function pretty_r($p){
		echo "<pre>";
		print_r($p);
		echo "</pre>";
	}
	function getVideoID($url){
        $length = 11; //Lenght of a youtube video ID
        //Starts with '?v='
  		if(strstr($url, "vimeo")){
  			$start = strpos($url, 'om/');
  		}else{
  			$start = strpos($url, '?v=');
	        if(!$start){
	            /**
	            Unlikely, but if the video starts with &v= instead of ?v=
	            */
	            $start = strpos($url, '&v=');
	        }
	        if(!$start){
	            /**
	            If the link is from the new youtube shortener (youtu.be)
	            */
	            $start = strpos($url, 'be/');
	        }
  		}
        
        if(!$start){
            die("Can't find the video ID, please check that your url is in this format: http://www.youtube.com/watch?v=VIDEOID or this one: http://youtube.be/VIDEOID");
        }
        $start += 3;
        $id = substr($url, $start, $length);

        return $id;
    }
    
    function hasVideo($link, $mode = "fullscreen"){
    	$isVideo = false;
		$player = "";
		$data_id = '';
		$class = array();
		if(strstr($link, "youtu")){
			$isVideo = true;
			$player = "youtube";
		}elseif(strstr($link, "vimeo")){
			$isVideo = true;
			$player = "vimeo";
		}

		if($isVideo){
			$id = getVideoID($link);
			$data_id = "data-videoID='".$id."'";
			$size = ($mode === "overlay")?"elOverlay":"videoOverlay";
			$class = array(
				"noAnim",
				$size,
				$player
			);
		}

		return array(
			'hasVideo' => $isVideo,
			'link' => $link,
			'id' => $id,
			'html' => $data_id,
			'class' => implode(" ", $class)
			);
    }

    include_once("api/bitly.php");
    // include_once("api/tmhOauth.php");
    
    function get_short_link(){
    	global $post, $wpdb;
    	$link = "";
    	$tableName = "bitly_links";
    	$token = '8a4737dcf04fadd3993b3cd70a0a5ec45a2d78d7';
    	
    	if($wpdb->get_var("SHOW TABLES LIKE '$tableName'") != $tableName){
    		$wpdb->query('CREATE TABLE `bitly_links` (
				  `post_id` int(11) unsigned NOT NULL,
				  `shortLink` varchar(50) DEFAULT NULL,
				  `site` varchar(50) DEFAULT NULL,
				  PRIMARY KEY (`post_id`)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;');
    	}
    	$exists = $wpdb->get_results('SELECT shortLink FROM bitly_links WHERE post_id = '.$post->ID.' AND site = '.sanitize_title_with_dashes(get_bloginfo('name')));
    	

    	if($exists){
    		$link = $exists[0]->shortLink;
    	}else{
    		$link = bitly_v3_shorten(get_the_permalink(),$token, 'j.mp');
    		$link = $link['url'];
    		$wpdb->insert(
    			'bitly_links',
    			array(
    				'post_id' => $post->ID,
    				'shortLink' => $link,
    				'site' => sanitize_title_with_dashes(get_bloginfo('name'))
    			)
    		);
    	}
    	
    	
    	return $link;

    }

    function get_next_post_id() {
		global $wp_query;
		if ($wp_query->current_post == $wp_query->post_count) return 0;
		$next_post = $wp_query->posts[$wp_query->current_post + 1];
		return $next_post->ID;
	}
	function get_prev_post_id() {
		global $wp_query;
		if ($wp_query->current_post == $wp_query->post_count) return 0;
		$next_post = $wp_query->posts[$wp_query->current_post - 1];
		return $next_post->ID;
	}

	// add_action("edit_post", 'clearTransient');

	function clearTransient(){
		global $post;
		// print_r($post);
		// print_r($_SERVER);
		// exit();
		// if($post->ID == 27 ){
		// 	$clearHome = new Home; $clearHome->clearTransient();
		// }elseif (get_post_type() === "team") {
		// 	$clearTeam = new TeamListing; $clearTeam->clearTransient();
		// 	$clearPager = new single_team; $clearPager->clearPager();
		// 	$clearSingleTeam = new single_team; $clearSingleTeam->clearTransient();

		// }elseif (get_post_type() === "store") {
		// 	$clearLocator = new storeLocator; $clearLocator->clearTransient();
			

		// }
		return;
	}

	function my_enqueue($hook) {
	  
	    wp_enqueue_style( 'customAdmin', get_template_directory_uri() . '/css/admin/general_admin.css', false, '1.0.0' );
	    wp_register_script( 'generalAdminJs', get_template_directory_uri() . '/js/admin/general_admin.js', array("jquery") );
	 
	    wp_enqueue_script('generalAdminJs');


	}
	add_action( 'admin_enqueue_scripts', 'my_enqueue' );

	function get_depth($id){
		$id = ($id)?$id:$post->ID;
		$depth = 0;
		$parent_id = wp_get_post_parent_id($id);
		while($parent_id > 0){
			$parent_id = wp_get_post_parent_id($parent_id);
			$depth++;
		}
		return $depth;
	}
	function get_top_parent_id($id){
		$id = ($id)?$id:$post->ID;
		$depth = 0;
		$parent_id = wp_get_post_parent_id($id);
		$test = 0;                                                                                   

			if($parent_id > 0){
				$test = $parent_id;
			}
			$parent_id = wp_get_post_parent_id($parent_id);

		return $test;
	}


	/**
     * Remove accent and space in name files
     * @param  [type] $filename [nom du fichier]
     * @return [type]           [nouveau nom du fichier]
     */
    function sanitize_filename_on_upload($filename) {
        $ext = end(explode('.',$filename));
        // Replace all weird characters
        $sanitized = preg_replace('/[^a-zA-Z0-9-_.]/','', substr($filename, 0, -(strlen($ext)+1)));
        // Replace dots inside filename
        $sanitized = str_replace('.','-', $sanitized);
        return strtolower($sanitized.'.'.$ext);
    }

    add_filter('sanitize_file_name', 'sanitize_filename_on_upload', 10);
?>