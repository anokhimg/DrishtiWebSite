<?php
/**
 * functions.php
 * @package WordPress
 * @subpackage kulebe
 * @since kulebe 1.7
 * 
 */
 
 
 /*************************************************
## Post Type
*************************************************/

if (is_admin() ){
	function kulebe_admin_scripts(){	
		wp_enqueue_script('klbmetajs', get_template_directory_uri() .'/js/init.js', array('jquery','media-upload','thickbox'));
	}
}
add_action('admin_enqueue_scripts', 'kulebe_admin_scripts');

add_theme_support( 'post-formats', array('gallery', 'audio', 'video')); 


 /*************************************************
## Post Type Support
*************************************************/

function kulebe_post_formats() {
	add_post_type_support( 'service', 'post-formats' );
	add_post_type_support( 'portfolio', 'post-formats' );
}
add_action( 'init', 'kulebe_post_formats' );


 /*************************************************
## Kulebe Fonts
*************************************************/

function kulebe_fonts_url() {
        $fonts_url = '';
 
		$montserrat = _x( 'on', 'Montserrat font: on or off', 'kulebe' );
		$raleway = _x( 'on', 'Raleway font: on or off', 'kulebe' );
		 
		if ( 'off' !== $raleway || 'off' !== $montserrat ) {
		$font_families = array();
		 
		if ( 'off' !== $montserrat ) {
		$font_families[] = 'Montserrat:400,700';
		}
		
		if ( 'off' !== $raleway ) {
		$font_families[] = 'Raleway:400,300,500,600,700,200';
		}
		
		$query_args = array( 
		'family' => urlencode( implode( '|', $font_families ) ), 
		'subset' => urlencode( 'latin,latin-ext' ), 
		); 
		 
		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
		}
 
return esc_url_raw( $fonts_url );
}

/*************************************************
## Admin style and scripts  
*************************************************/ 

function kulebe_admin_styles() {
 
  wp_enqueue_style('kadmin', get_template_directory_uri().'/css/admin/klbtheme.css');
 
}
add_action('admin_enqueue_scripts', 'kulebe_admin_styles');


/*************************************************
## Styles and Scripts
*************************************************/ 
define('KULEBE_INDEX_JS', get_template_directory_uri()  . '/js');
define('KULEBE_INDEX_CSS', get_template_directory_uri()  . '/css');

function kulebe_scripts() {

	if ( is_admin_bar_showing() ) {
	     wp_enqueue_style( 'klbtheme', KULEBE_INDEX_CSS . '/admin/klbtheme.css', false, '1.0');
	}   

     if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); 
     wp_enqueue_style( 'font-awesome',   get_template_directory_uri() . '/css/font.awesome.min.css', false, '1.0');
     wp_enqueue_style( 'normalize',      get_template_directory_uri() . '/css/normalize.css', false, '1.0');
     wp_enqueue_style( 'foundation',     get_template_directory_uri() . '/css/foundation.css', false, '1.0');
     wp_enqueue_style( 'owlcarousel',    get_template_directory_uri() . '/css/owl.carousel.css', false, '1.0');
     wp_enqueue_style( 'owltransitions', get_template_directory_uri() . '/css/owl.transitions.css', false, '1.0');
     wp_enqueue_style( 'owltheme',       get_template_directory_uri() . '/css/owl.theme.css', false, '1.0');
     wp_enqueue_style( 'animate',        get_template_directory_uri() . '/css/animate.css', false, '1.0');
     wp_enqueue_style( 'navigation',     get_template_directory_uri() . '/css/navigation.css', false, '1.0');
     wp_enqueue_style( 'tribe',          get_template_directory_uri() . '/css/tribe-events.css', false, '1.0');
     wp_enqueue_style( 'cubeportfolio',  get_template_directory_uri() . '/css/cubeportfolio.css', false, '1.0');
     wp_enqueue_style( 'layout',         get_template_directory_uri() . '/css/layout.css', false, '1.0');
     wp_enqueue_style( 'skins',          get_template_directory_uri() . '/css/skins/blue.css', false, '1.0'); 
     wp_enqueue_style( 'fontas',         kulebe_fonts_url(), array(), null );	 
     wp_enqueue_style( 'style',          get_stylesheet_uri() );

     $mapkey = ot_get_option('kulebe_mapapi');
	 
	 wp_enqueue_script( 'modernizr',     		  get_template_directory_uri() . '/js/vendor/modernizr.js', array('jquery'), '1.0', true);
	 wp_enqueue_script( 'foundation',    		  get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '1.0', true);
	 wp_enqueue_script( 'f-accordion',   		  get_template_directory_uri() . '/js/foundation/foundation.accordion.js', array('jquery'), '1.0', true);
	 wp_enqueue_script( 'owlcarousel',   		  get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '1.0', true);
	 wp_enqueue_script( 'device',        		  get_template_directory_uri() . '/js/device.min.js', array('jquery'), '1.0', true);
	 wp_enqueue_script( 'appear',        		  get_template_directory_uri() . '/js/jquery.appear.js', array('jquery'), '1.0', true);
	 wp_enqueue_script( 'stellar',       		  get_template_directory_uri() . '/js/jquery.stellar.min.js', array('jquery'), '1.0', true);
     wp_enqueue_script( 'daisynav',      		  get_template_directory_uri() . '/js/jquery.daisynav.js', array('jquery'), '1.0', true);
	 wp_enqueue_script( 'cubeportfolio', 		  get_template_directory_uri() . '/js/jquery.cubeportfolio.min.js', array('jquery'), '1.0', true);
	 wp_register_script( 'googlemap',     		  'https://maps.googleapis.com/maps/api/js?key='. $mapkey .'', array('jquery'), '1.0', true);
	 wp_register_script( 'kulebe_main-slider', 	  get_template_directory_uri() . '/js/custom/main-slider.js', array('jquery'), '1.0', true);
	 wp_register_script( 'kulebe_services', 	  get_template_directory_uri() . '/js/custom/services.js', array('jquery'), '1.0', true);
	 wp_register_script( 'kulebe_portfolio', 	  get_template_directory_uri() . '/js/custom/portfolio.js', array('jquery'), '1.0', true);   
     wp_enqueue_script( 'customjs',      		  get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0', true);  
}

add_action( 'wp_enqueue_scripts', 'kulebe_scripts' );

/*************************************************
## Events Calendar Map Filter
*************************************************/ 
add_filter('tribe_events_google_maps_api','kulebe_google_api_key');
 
function kulebe_google_api_key() {
    $mapkey = ot_get_option('kulebe_mapapi');
    return '//maps.googleapis.com/maps/api/js?key='. $mapkey .'';
}

/*************************************************
## Register Menu 
*************************************************/

function kulebe_register_menus() {
	register_nav_menus( array( 'main-menu' => 'Primary Navigation Menu') );
}
add_action('init', 'kulebe_register_menus');
 
 
class kulebe_main_menu extends Walker_Nav_Menu {
	
// add classes to ul sub-menus
function start_lvl( &$output, $depth = 0, $args = array() ) {
    // depth dependent classes
    $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
    $display_depth = ( $depth + 1); // because it counts the first submenu as 0
    $classes = array(
        '',
        ( $display_depth % 2  ? 'dropdown' : 'menu-even' ),
        ( $display_depth >=2 ? 'dropdown' : '' ),
        'menu-depth-' . $display_depth
        );
    $class_names = implode( ' ', $classes );
  
    // build html
    $output .= "\n" . $indent . '<ul class="sub-menu ' . $class_names . '" role="menu">' . "\n";
}

    function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output )
    {
        $id_field = $this->db_fields['id'];
        if ( is_object( $args[0] ) ) {
            $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
        }
        return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }


      function start_el(&$output, $object, $depth = 0, $args = Array() , $current_object_id = 0) {
           
           global $wp_query;

           $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

           $class_names = $value = '';

           $classes = empty( $object->classes ) ? array() : (array) $object->classes;
           $icon_class = $classes[0];
		   $classes = array_slice($classes,1);

           $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $object ) );
           $class_names = ' class="'. esc_attr( $class_names ) . '"';

           

           $attributes  = ! empty( $object->attr_title ) ? ' title="'  . esc_attr( $object->attr_title ) .'"' : '';
           $attributes .= ! empty( $object->target )     ? ' target="' . esc_attr( $object->target     ) .'"' : '';
           $attributes .= ! empty( $object->xfn )        ? ' rel="'    . esc_attr( $object->xfn        ) .'"' : '';
          	
          	if( $icon_class != '' ) {
            	$icon_classes = '';
		   	}
		   	else{
		   		$icon_classes = '';
		   	}

           if($object->object == 'page')
           {
                $varpost = get_post($object->object_id);                
                $separate_page = get_post_meta($object->object_id, "klb_separate_page", true);
                $disable_menu = get_post_meta($object->object_id, "klb_disable_section_from_menu", true);
				$current_page_id = get_option('page_on_front');

                if ( ( $disable_menu != true ) && ( $varpost->ID != $current_page_id ) ) {

                	$output .= $indent . '<li ' . $value . $class_names .'>';

                	if ( $separate_page == true )
	                	$attributes .= ! empty( $object->url ) ? ' href="'   . esc_attr( $object->url ) .'" data-text="'.apply_filters( 'the_title', $object->title, $object->ID ).'"' : '';
	                else{
	                	if (is_front_page()) 
	                		$attributes .= ' class="internal" href="#' . $varpost->post_name . '" '; 
	                	else 
	                		$attributes .= ' class="external" href="' .  ''.esc_url( home_url( '/' ) ).'#' . $varpost->post_name . '" ';
	                }		

	                $object_output = $args->before;
		            $object_output .= '<a data-scroll '. $attributes .'>';
		            $object_output .= $args->link_before . $icon_classes .  apply_filters( 'the_title', $object->title, $object->ID ) . '';
		            $object_output .= $args->link_after;
		            $object_output .= '</a>';
		            $object_output .= $args->after;    

		             $output .= apply_filters( 'walker_nav_menu_start_el', $object_output, $object, $depth, $args );            	              	
                }
                                         
           }
           else{

           		$output .= $indent . '<li ' . $value . $class_names .'>';

                $attributes .= ! empty( $object->url ) ? ' href="' . esc_attr( $object->url ) .'"' : '';

	            $object_output = $args->before;
	            $object_output .= '<a data-scroll '. $attributes .'>';
	            $object_output .= $args->link_before . $icon_classes .  apply_filters( 'the_title', $object->title, $object->ID ) . '';
	            $object_output .= $args->link_after;
	            $object_output .= '</a>';
	            $object_output .= $args->after;

	             $output .= apply_filters( 'walker_nav_menu_start_el', $object_output, $object, $depth, $args );
	        }

           
      }
}


add_filter('nav_menu_css_class' , 'kulebe_nav_class' , 10 , 2);
function kulebe_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

add_filter('nav_menu_css_class' , 'kulebe1_nav_class' , 10 , 2);
function kulebe1_nav_class($classes, $item){
     if( in_array('menu-item-has-children', $classes) ){
             $classes[] = 'has-submenu';
     }
     return $classes;
}


/*************************************************
## Word Limiter
*************************************************/ 
function kulebe_limit_words($string, $limit) {
	$words = explode(' ', $string);
	return implode(' ', array_slice($words, 0, $limit));
}

/*************************************************
## Theme Setup
*************************************************/ 

if ( ! isset( $content_width ) ) $content_width = 960;

function kulebe_theme_setup() {
	
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'kulebe_theme_setup' );


/*************************************************
## Theme option
*************************************************/ 

	require_once get_template_directory() . '/includes/metaboxes.php';
	require_once get_template_directory() . '/includes/style.php';
	require_once get_template_directory() . '/includes/aq_resizer.php';
	add_filter( 'ot_show_pages', '__return_false' );
	add_filter( 'ot_show_new_layout', '__return_false' );
	add_filter( 'ot_theme_mode', '__return_true' );
	require_once get_template_directory() . '/option-tree/ot-loader.php';
	require_once get_template_directory() . '/option-tree/theme-options.php';
	if(function_exists('vc_set_as_theme')) {
	  require_once get_template_directory() . '/includes/js_composer/shortcodes.php';
	}
	load_theme_textdomain( 'kulebe', get_template_directory() . '/languages' );

/*************************************************
## Include the TGM_Plugin_Activation class.
*************************************************/ 

require_once get_template_directory() . '/includes/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'kulebe_register_required_plugins' );

function kulebe_register_required_plugins() {
	
	$plugins = array(
		
		array(
			'name'      => esc_html__('Meta Box','kulebe'),
			'slug'      => 'meta-box',
		),

		array(
			'name'      => esc_html__('Portfolio Post Type','kulebe'),
			'slug'      => 'portfolio-post-type',
		),

		array(
			'name'      => esc_html__('Contact Form 7','kulebe'),
			'slug'      => 'contact-form-7',
		),
		
		array(
			'name'      => esc_html__('The Events Calendar','kulebe'),
			'slug'      => 'the-events-calendar',
		),

        array(
            'name'                  => 'Seamless Donations',
            'slug'                  => 'seamless-donations',
        ),

        array(
            'name'                  => esc_html__('Envato WordPress Toolkit','kulebe'),
            'slug'                  => 'wp-envato-market-master',
            'source'                => get_template_directory() . '/plugins/wp-envato-market-master.zip',
            'required'              => true,
            'version'               => '1.0',
            'force_activation'      => false,
            'force_deactivation'    => false,
            'external_url'          => '',
        ),


        array(
            'name'                  => esc_html__('Visual Composer','kulebe'),
            'slug'                  => 'js_composer',
            'source'                => get_template_directory() . '/plugins/js-composer.zip',
            'required'              => false,
            'version'               => '5.0.1',
            'force_activation'      => false,
            'force_deactivation'    => false,
            'external_url'          => '',
        ),
		
        array(
            'name'                  => esc_html__('Klb Shortcode','kulebe'),
            'slug'                  => 'klb-shortcode',
            'source'                => get_template_directory() . '/plugins/klb-shortcode.zip',
            'required'              => false,
            'version'               => '1.4',
            'force_activation'      => false,
            'force_deactivation'    => false,
            'external_url'          => '',
        ),

        array(
            'name'                  => esc_html__('Service Post Type','kulebe'),
            'slug'                  => 'service-post-type',
            'source'                => get_template_directory() . '/plugins/service-post-type.zip',
            'required'              => false,
            'version'               => '0.9.3',
            'force_activation'      => false,
            'force_deactivation'    => false,
            'external_url'          => '',
        ),

        array(
            'name'                  => esc_html__('Total Donations','kulebe'),
            'slug'                  => 'totaldonations',
            'source'                => get_template_directory() . '/plugins/totaldonations.zip',
            'required'              => false,
            'version'               => '2.0.5',
            'force_activation'      => false,
            'force_deactivation'    => false,
            'external_url'          => '',
        ),

        array(
            'name'                  => esc_html__('Revolution Slider','kulebe'),
            'slug'                  => 'revslider',
            'source'                => get_template_directory() . '/plugins/revslider.zip',
            'required'              => false,
            'version'               => '5.3.1.5',
            'force_activation'      => false,
            'force_deactivation'    => false,
            'external_url'          => '',
        ),

        array(
            'name'                  => esc_html__('Demo Installation','kulebe'),
            'slug'                  => 'easy_installer',
            'source'                => get_template_directory() . '/plugins/easy_installer.zip',
            'required'              => false,
            'version'               => '1.2',
            'force_activation'      => false,
            'force_deactivation'    => false,
            'external_url'          => '',
        ),

	);

	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}
		
 /*************************************************
## Pagination Function
*************************************************/

function kulebe_pagination($pages = '', $range = 4) {
	$showitems = ($range * 2)+1;
	
	global $paged;
	if(empty($paged)) $paged = 1;
	
	if($pages == '') {
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages) {
			$pages = 1;
		}
	}
	 if(1 != $pages){
	    echo '<ul class="pagination"><li>'.get_previous_posts_link( esc_html__('Prev','kulebe') ).'</li>';
		if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li class='active'><a class'button button-small' href='".get_pagenum_link(1)."'>&laquo; " . esc_html__('First', 'kulebe') . "</a></li>";
		if($paged > 1 && $showitems < $pages) echo "<li><a class=\"page-numbers \" href='".get_pagenum_link($paged - 1)."'>&lsaquo; </a></li>";
		
		for ($i=1; $i <= $pages; $i++) {
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
				echo ($paged == $i)? "<li class='active'><a href='".get_pagenum_link($i)."' >".$i."</a></li>":"<li><a href='".get_pagenum_link($i)."' >".$i."</a></li>";
			}
		}
	
		if ($paged < $pages && $showitems < $pages) echo "<li><a class=\"active\" href=\"".get_pagenum_link($paged + 1)."\">" . esc_html__('Next', 'kulebe') . " &rsaquo;</a></li>";
		if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a class=\"active\" href='".get_pagenum_link($pages)."'>" . esc_html__('Last', 'kulebe') . " &raquo;</a></li>";
	    echo '</ul>';

		}
}

/*************************************************
## Widgets
*************************************************/ 


function kulebe_widgets_init() {
	register_sidebar( array(
	  'name' => esc_html__( 'Blog Sidebar', 'kulebe' ),
	  'id' => 'sidebar-1',
	  'description'   => esc_html__( 'These are widgets for the Blog page.','kulebe' ),
	  'before_widget' => '<div class="category-menu blog-title2 %2$s">',
	  'after_widget'  => '</div>',
	  'before_title'  => '<h4 class="text-center"><strong>',
	  'after_title'   => '</strong></h4>'
	) );

}
add_action( 'widgets_init', 'kulebe_widgets_init' );

/*************************************************
## Excerpt More
*************************************************/ 

function kulebe_excerpt_more($more) {
  global $post;
  return '&hellip;<div class="medium-12 text-center"><a href="'. get_permalink($post->ID) . '" class="link-btn big" data-hover="' . '' . esc_html__('Read More', 'kulebe') . '"><span>' . '' . esc_html__('Read More', 'kulebe') . '</a></span></div>';
 }
 add_filter('excerpt_more', 'kulebe_excerpt_more');
 
 
 /*************************************************
## Kulebe Comment
*************************************************/

if ( ! function_exists( 'kulebe_comment' ) ) :
 function kulebe_comment( $comment, $args, $depth ) {
  $GLOBALS['comment'] = $comment;
  switch ( $comment->comment_type ) :
   case 'pingback' :
   case 'trackback' :
  ?>

   <div class="comments">
   <article class="post pingback">
   <p><?php esc_html_e( 'Pingback:', 'kulebe' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( esc_html__( '(Edit)', 'kulebe' ), ' ' ); ?></p>
  <?php
    break;
   default :
  ?>

                   <li class="box-users">
				      <div class="avatar"><?php echo get_avatar( $comment, 80 ); ?></div>
									<div class="comment">
										<h4 class="title"><?php comment_author(); ?></h4>
										<span class="date"><time class="comment-date" pubdate datetime="<?php comment_time( 'c' ); ?>"><?php comment_date(); ?> at <?php comment_time(); ?></time></span>
										<?php comment_text(); ?>
										<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
										<?php if ( $comment->comment_approved == '0' ) : ?>
										<em><?php esc_html_e( 'Your comment is awaiting moderation.', 'kulebe' ); ?></em>
										<?php endif; ?> 
										<article class="clearfix" id="comment-<?php comment_ID(); ?>"></article>    
									</div>    
					</li>
                 
  <?php
    break;
  endswitch;
 }
endif;

/*************************************************
## DONATION
*************************************************/ 

function kulebe_donation_filter($array) {
$giving_levels = dgx_donate_get_giving_levels ();
foreach( $giving_levels as $giving_level ) {
 $giving_level_key    = "dgx_donate_giving_level_" . $giving_level;
 $formatted_amount = seamless_donations_get_escaped_formatted_amount ( $giving_level, 0 );

	$array['elements'][$giving_level_key]['prompt'] = "<label for='donate-$giving_level' class='$giving_level_key'>$formatted_amount</label>";
	$array['elements'][$giving_level_key]['id'] = "donate-$giving_level";
	$array['elements']['other_radio_button']['prompt'] = "<label for='dgx-donate-other-radio' class='$giving_level_key'>Other</label>";

}
return $array;

}

add_filter('seamless_donations_form_donation_section', 'kulebe_donation_filter');