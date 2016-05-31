<?php
	if(!class_exists("[TRANSIENT_TEMPLATE]")){
	    /**
	    * Deals with the custom post type and the transient api for the [TRANSIENT_TEMPLATE] page
	    */
	    class [TRANSIENT_TEMPLATE]
	    {
	
	        // WP Hooks
	        public function __construct()
	        {
	        	add_action('publish_post',array($this,'clearTransient'),9001); //IT'S OVER 9 THOUSAAAAANNNNNDD!
	        }
	
	        static function clearTransient(){
	            $transient_label = 'transient_'.__CLASS__;
	            set_transient($transient_label, '');
	            return;
	        }
	
	
	        static function render(){
	            global $post;
	
	            $transient_label = 'transient_'.__CLASS__;
	            $debug = true;
	            
	
	            if($debug)
	                $html = false;
	            else
	                $html = get_transient($transient_label);
	            
	           
	            if(!$html || $html === ""){
	                
	                $html = null; ob_start(); ?>
	                    <!-- [CONTENT START] -->
							
	                    <!-- [CONTENT ENDS] -->
	                <? $html = ob_get_contents();
	                ob_end_clean();
	
	
	                set_transient( $transient_label, $html, DAY_IN_SECONDS );
	            }
	            // return ($html)?$html:false;
	            return $html;
	        }
	    }
	    $CHANGE_THIS_MOFO = new [TRANSIENT_TEMPLATE]();
	}
?>