<?php

/*-----------------------------------------------------------------------------------*/
/*	Shortcode Filter
/*-----------------------------------------------------------------------------------*/

vc_remove_element( "vc_gmaps");
vc_remove_element( "vc_wp_search");
vc_remove_element(  "vc_wp_meta" );
vc_remove_element(  "vc_wp_recentcomments" );
vc_remove_element(  "vc_wp_calendar" );
vc_remove_element(  "vc_wp_pages" );
vc_remove_element(  "vc_wp_tagcloud" );
vc_remove_element(  "vc_wp_custommenu" );
vc_remove_element(  "vc_wp_text" );
vc_remove_element(  "vc_wp_posts" );
vc_remove_element(  "vc_wp_categories" );
vc_remove_element(  "vc_wp_archives" );
vc_remove_element(  "vc_wp_rss" );
vc_remove_element(  "vc_progress_bar" );
vc_remove_element(  "vc_message" );
vc_set_as_theme( $disable_updater = false ); 
vc_disable_frontend();
vc_is_updater_disabled();

function kulebe_vc_remove_woocommerce() {
    if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
        vc_remove_element( 'woocommerce_cart' );
        vc_remove_element( 'woocommerce_checkout' );
        vc_remove_element( 'woocommerce_order_tracking' );
        vc_remove_element( 'woocommerce_my_account' );
        vc_remove_element( 'recent_products' );
        vc_remove_element( 'featured_products' );
        vc_remove_element( 'product' );
        vc_remove_element( 'products' );
        vc_remove_element( 'add_to_cart' );
        vc_remove_element( 'add_to_cart_url' );
        vc_remove_element( 'product_page' );
        vc_remove_element( 'product_category' );
        vc_remove_element( 'product_categories' );
        vc_remove_element( 'sale_products' );
        vc_remove_element( 'best_selling_products' );
        vc_remove_element( 'top_rated_products' );
        vc_remove_element( 'product_attribute' );
        vc_remove_element( 'related_products' );
    }
}
// Hook for admin editor.
add_action( 'vc_build_admin_page', 'kulebe_vc_remove_woocommerce', 11 );
// Hook for frontend editor.
add_action( 'vc_load_shortcode', 'kulebe_vc_remove_woocommerce', 11 );




/*-----------------------------------------------------------------------------------*/
/*	Kulebe Slider
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'kulebe_slider_integrateWithVC' );
function kulebe_slider_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Kulebe Slider", "kulebe" ),
      "base" => "slider",
      "params" => array( 
	  
		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Sliders', 'kulebe' ),
			'param_name' => 'values',
			'value' => urlencode( json_encode( array(
				array(
					'title' => esc_html__( 'myslider', 'kulebe' )
				),
			) ) ),			
			'params' => array(
				array(
					'type' => 'attach_image',
					'heading' => esc_html__( 'Slider Image', 'kulebe' ),
					'param_name' => 'image_url',
					'description' => esc_html__( 'Add Slider Image', 'kulebe' ),
					'group' => 'Image',
				),	
				array(
					"type" => "textarea",
					"heading" => esc_html__("Title", "kulebe"),
					"param_name" => "title",
					"description" => esc_html__("Add your title", "kulebe"),
					'admin_label' => true,
				),
				array(
					"type" => "textarea",
					"heading" => esc_html__("Subtitle", "kulebe"),
					"param_name" => "subtitle",
					"description" => esc_html__("Add your subtitle", "kulebe"),
				),
			)
		),
		array(
			"type" => "textfield",
			"heading" => esc_html__("Auto Play", "kulebe"),
			"param_name" => "sliderspeed",
			"description" => esc_html__("Set auto play time.Default : 5000", "kulebe"),
			"group"       => 'Settings',
		),
      ),
   ) );
}
class WPBakeryShortCode_Slider extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	Kulebe Title
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'kulebe_title_integrateWithVC' );
function kulebe_title_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Kulebe Title", "kulebe" ),
      "base" => "title",
      "params" => array( 
	  
			array(
				"type" => "textarea",
				"heading" => esc_html__("Title", "kulebe"),
				"param_name" => "title",
				"description" => esc_html__("Add your title", "kulebe"),
				'admin_label' => true,
			),
			array(
				"type" => "textarea",
				"heading" => esc_html__("Subtitle", "kulebe"),
				"param_name" => "subtitle",
				"description" => esc_html__("Add your subtitle", "kulebe"),
			),
			
			array(
				"type" => "colorpicker",
				"heading" => esc_html__("Color", "kulebe"),
				"param_name" => "fontcolor",
				"description" => esc_html__("Set font color", "kulebe"),
				"group" => 'Color',
			),
		
      ),
   ) );
}
class WPBakeryShortCode_Title extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	Kulebe Service
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'kulebe_service_integrateWithVC' );
function kulebe_service_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Kulebe Service", "kulebe" ),
      "base" => "service",
      "params" => array(
		
        array(
            "type" => "textfield",
            "heading" => esc_html__("Post Count", "kulebe"),
            "param_name" => "posts",
            "description" => esc_html__("Add Post Count for example:8", "kulebe")
        ),

        array(
            "type" => "textfield",
            "heading" => esc_html__("Excerpt Size", "kulebe"),
            "param_name" => "excerpt_size",
            "description" => esc_html__("Add Post Excerpt Size for example : 15", "kulebe")
        ),

        array(
            "type" => "textfield",
            "heading" => esc_html__("Category", "kulebe"),
            "param_name" => "categories",
            "description" => esc_html__("Add a post category or write all", "kulebe")
        ),

		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Column', 'kulebe' ),
			'param_name' => 'column_count',
			'value' => array(
				esc_html__( 'Select Column', 'kulebe' ) => 'select-column',
				esc_html__( '2 Column', 'kulebe' ) => '2',
				esc_html__( '3 Column', 'kulebe' ) => '3',
				esc_html__( '4 Column', 'kulebe' ) => '4',
				esc_html__( '5 Column', 'kulebe' ) => '5',
				esc_html__( '6 Column', 'kulebe' ) => '6',					
			),
			'description' => esc_html__( 'Select column count for the services.', 'kulebe' ),				
		),

        array(
            "type" => "textfield",
            "heading" => esc_html__("Read More Text", "kulebe"),
            "param_name" => "readmore_text",
            "description" => esc_html__("Translate read more button", "kulebe")
        ),	
		
      ),
   ) );
}
class WPBakeryShortCode_Service extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	Kulebe Latest Portfolio
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'kulebe_portfolio_integrateWithVC' );
function kulebe_portfolio_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Kulebe Portfolio", "kulebe" ),
      "base" => "portfolio",
      "params" => array(
	  
        array(
            "type" => "textfield",
            "heading" => esc_html__("Post Count", "kulebe"),
            "param_name" => "posts",
            "description" => esc_html__("Add Post Count for example:8", "kulebe")
        ),
		
		
        array(
            "type" => "textfield",
            "heading" => esc_html__("Category", "kulebe"),
            "param_name" => "categories",
            "description" => esc_html__("Add category slug or use all", "kulebe")
        ),		

		array(
			'type' => 'checkbox',
			'param_name' => 'filter',
			'heading' => esc_html__( 'Activate Category Filter?', 'kulebe' ),
			'description' => esc_html__( 'You want to use filter with categories?', 'kulebe' ),
			'value' => array( esc_html__( 'Yes', 'kulebe' ) => 'yes' ),

		),	

        array(
            "type" => "textfield",
            "heading" => esc_html__("All Text", "kulebe"),
            "param_name" => "all_text",
            "description" => esc_html__("Translate All button", "kulebe")
        ),

		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Column', 'kulebe' ),
			'param_name' => 'column_count',
			'value' => array(
				esc_html__( 'Select Column', 'kulebe' ) => 'select-column',
				esc_html__( '2 Column', 'kulebe' ) => '2',
				esc_html__( '3 Column', 'kulebe' ) => '3',
				esc_html__( '4 Column', 'kulebe' ) => '4',
				esc_html__( '5 Column', 'kulebe' ) => '5',
				esc_html__( '6 Column', 'kulebe' ) => '6',					
			),
			'description' => esc_html__( 'Select column count for the portfolio.', 'kulebe' ),				
		),
		
      ),
   ) );
}
class WPBakeryShortCode_Portfolio extends WPBakeryShortCode {
}


/*-----------------------------------------------------------------------------------*/
/*	Kulebe Latest Blog
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'kulebe_blog_integrateWithVC' );
function kulebe_blog_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Kulebe Blog", "kulebe" ),
      "base" => "blog",
      "params" => array(
		
        array(
            "type" => "textfield",
            "heading" => esc_html__("Post Count", "kulebe"),
            "param_name" => "posts",
            "description" => esc_html__("Add Post Count for example:8", "kulebe")
        ),

        array(
            "type" => "textfield",
            "heading" => esc_html__("Excerpt Size", "kulebe"),
            "param_name" => "excerpt_size",
            "description" => esc_html__("Add Post Excerpt Size for example : 15", "kulebe")
        ),

        array(
            "type" => "textfield",
            "heading" => esc_html__("Category", "kulebe"),
            "param_name" => "categories",
            "description" => esc_html__("Add a post category or write all", "kulebe")
        ),	
		
      ),
   ) );
}
class WPBakeryShortCode_Blog extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	Kulebe Latest Events
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'kulebe_events_integrateWithVC' );
function kulebe_events_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Kulebe Events", "kulebe" ),
      "base" => "latest_events",
      "params" => array(
		
        array(
            "type" => "textfield",
            "heading" => esc_html__("Post Count", "kulebe"),
            "param_name" => "posts",
            "description" => esc_html__("Add Post Count for example:8", "kulebe")
        ),

        array(
            "type" => "textfield",
            "heading" => esc_html__("Excerpt Size", "kulebe"),
            "param_name" => "excerpt_size",
            "description" => esc_html__("Add Post Excerpt Size for example : 15", "kulebe")
        ),

        array(
            "type" => "textfield",
            "heading" => esc_html__("Category", "kulebe"),
            "param_name" => "categories",
            "description" => esc_html__("Add a post category or write all", "kulebe")
        ),	
		
      ),
   ) );
}
class WPBakeryShortCode_Latest_Events extends WPBakeryShortCode {
}


/*-----------------------------------------------------------------------------------*/
/*	Kulebe Volunteer
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'kulebe_volunteer_integrateWithVC' );
function kulebe_volunteer_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Kulebe Volunteer", "kulebe" ),
      "base" => "volunteer",
      "params" => array( 
	  
		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Volunteers', 'kulebe' ),
			'param_name' => 'values',
			'value' => urlencode( json_encode( array(
				array(
					'title' => esc_html__( 'volunteer', 'kulebe' )
				),
			) ) ),			
			'params' => array(
				array(
					'type' => 'attach_image',
					'heading' => esc_html__( 'Image', 'kulebe' ),
					'param_name' => 'image_url',
					'description' => esc_html__( 'Add volunteer Image', 'kulebe' ),
				),	
				array(
					"type" => "textarea",
					"heading" => esc_html__("Name", "kulebe"),
					"param_name" => "title",
					"description" => esc_html__("Add name of the volunteer", "kulebe"),
					'admin_label' => true,
				),
				array(
					"type" => "textarea",
					"heading" => esc_html__("Profession", "kulebe"),
					"param_name" => "profession",
					"description" => esc_html__("Add profession of the volunteer", "kulebe"),
				),
				
				array(
					"type" => "textarea",
					"heading" => esc_html__("Content", "kulebe"),
					"param_name" => "content",
					"description" => esc_html__("Add text about the volunteer", "kulebe"),
				),
			)
		),
		
      ),
   ) );
}
class WPBakeryShortCode_Volunteer extends WPBakeryShortCode {
}


/*-----------------------------------------------------------------------------------*/
/*	Kulebe Action Box
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'kulebe_action_box_klb' );
function kulebe_action_box_klb() {
   vc_map( array(
      "name" => esc_html__( "Kulebe Action Box", "kulebe" ),
      "base" => "action_box",
      "params" => array(
		
		array(
			'type' => 'iconpicker',
			'heading' => esc_html__( 'Icon', 'kulebe' ),
			'param_name' => 'icon_fontawesome',
			'value' => 'fa fa-info-circle',
			'settings' => array(
				'emptyIcon' => false, // default true, display an "EMPTY" icon?
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'description' => esc_html__( 'Select icon from library.', 'kulebe' ),
		),

        array(
            "type" => "textfield",
            "heading" => esc_html__("Title", "kulebe"),
            "param_name" => "title",
            "description" => esc_html__("Add box title", "kulebe")
        ),
		
        array(
            "type" => "textarea",
            "heading" => esc_html__("Content", "kulebe"),
            "param_name" => "contentbox",
            "description" => esc_html__("Add box content", "kulebe")
        ),
		
		array(
			'type' => 'checkbox',
			'param_name' => 'external_link',
			'heading' => esc_html__( 'Add External Link?', 'kulebe' ),
			'description' => esc_html__( 'You want to use external link instead of popup modal?', 'kulebe' ),
			'value' => array( 
			               esc_html__( 'Yes', 'kulebe' ) => 'yes',
                           esc_html__( 'No', 'kulebe' ) => 'no'
					   ),
		),
		
		array(
			'type' => 'vc_link',
			'heading' => esc_html__( 'URL (Link)', 'kulebe' ),
			'param_name' => 'link',
			'description' => esc_html__( 'Add a url for button.', 'kulebe' ),
			'dependency' => array(
				'element' => 'external_link',
				'value' => 'yes',
			),						
		),
		
        array(
            "type" => "textfield",
            "heading" => esc_html__("Button Text", "kulebe"),
            "param_name" => "button_text",
            "description" => esc_html__("Add button text", "kulebe"),
			'dependency' => array(
				'element' => 'external_link',
				'value' => 'no',
			),
        ),

        array(
            "type" => "textfield",
            "heading" => esc_html__("Title", "kulebe"),
            "param_name" => "modaltitle",
            "description" => esc_html__("Add popup modal title", "kulebe"),
			'dependency' => array(
				'element' => 'external_link',
				'value' => 'no',
			),
			"group" => 'Popup',
        ),
		
        array(
            "type" => "textarea_html",
            "heading" => esc_html__("Content", "kulebe"),
            "param_name" => "content",
            "description" => esc_html__("Add popup modal content", "kulebe"),
			'dependency' => array(
				'element' => 'external_link',
				'value' => 'no',
			),
			"group" => 'Popup',
        ),
		
      ),
   ) );
}
class WPBakeryShortCode_Action_Box extends WPBakeryShortCode {
}



/*-----------------------------------------------------------------------------------*/
/*	Kulebe Icon Box
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'kulebe_icon_box_integrateWithVC' );
function kulebe_icon_box_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Kulebe Icon Box", "kulebe" ),
      "base" => "icon_box",
      "params" => array( 
	  
		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Boxes', 'kulebe' ),
			'param_name' => 'values',
			'value' => urlencode( json_encode( array(
				array(
					'title' => esc_html__( 'myicon', 'kulebe' )
				),
			) ) ),			
			'params' => array(
				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'Icon', 'kulebe' ),
					'param_name' => 'icon_fontawesome',
					'value' => 'fa fa-info-circle',
					'settings' => array(
						'emptyIcon' => false, // default true, display an "EMPTY" icon?
						'iconsPerPage' => 4000, // default 100, how many icons per/page to display
					),
					'description' => esc_html__( 'Select icon from library.', 'kulebe' ),
				),
				array(
					"type" => "textarea",
					"heading" => esc_html__("Content", "kulebe"),
					"param_name" => "contentm",
					"description" => esc_html__("Add content", "kulebe"),
				),

			)
		),
		
      ),
   ) );
}
class WPBakeryShortCode_Icon_Box extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	Kulebe Google Map
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'kulebe_map_integrateWithVC' );
function kulebe_map_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Kulebe Google Map", "kulebe" ),
      "base" => "map_container",
      "params" => array(


        array(
            "type" => "textfield",
            "heading" => esc_html__("Latitude", "kulebe"),
            "param_name" => "latitude",
            "description" => esc_html__("Add latitude for google map", "kulebe")
        ),

        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Longitude', 'kulebe' ),
            'param_name' => 'longitude',
            "description" => esc_html__("Add longitude for google map", "kulebe"),
        ),

        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Zoom', 'kulebe' ),
            'param_name' => 'zoom',
            "description" => esc_html__("Adjust zoom for google map", "kulebe"),
        ),

        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Height', 'kulebe' ),
            'param_name' => 'height',
            "description" => esc_html__("Adjust height for google map", "kulebe"),
        ),
		
        array(
            'type' => 'css_editor',
            'heading' => esc_html__( 'Css', 'kulebe' ),
            'param_name' => 'css',
            'group' => esc_html__( 'Design options', 'kulebe' ),
        ),


      ),
   ) );
}
class WPBakeryShortCode_Map extends WPBakeryShortCode {
}
/*-----------------------------------------------------------------------------------*/
/*	Kulebe Campaign Form
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'kulebe_campaign_form_integrateWithVC' );
function kulebe_campaign_form_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Kulebe Campaign Form", "kulebe" ),
      "base" => "campaign_form",
      "params" => array( 		
		
		
      ),
   ) );
}
class WPBakeryShortCode_Campaign_Form extends WPBakeryShortCode {
}


/*-----------------------------------------------------------------------------------*/
/*	Kulebe Campaign Box
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'kulebe_campaign_box_integrateWithVC' );
function kulebe_campaign_box_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Kulebe Campaign Box", "kulebe" ),
      "base" => "campaign_box",
      "params" => array( 
		array(
			'type' => 'attach_image',
			'heading' => esc_html__( 'Campaign Image', 'kulebe' ),
			'param_name' => 'image_url',
			'description' => esc_html__( 'Add Campaign Image', 'kulebe' ),
		),

		array(
			"type" => "textfield",
			"heading" => esc_html__("Campaign Title", "kulebe"),
			"param_name" => "title",
			"description" => esc_html__("Add one of the available name of the campaign(Total Donations > Campaign)", "kulebe"),
			'admin_label' => true,
		),

		array(
			"type" => "textfield",
			"heading" => esc_html__("Campaign Id", "kulebe"),
			"param_name" => "campaign_id",
			"description" => esc_html__("Add one of the available id of the campaign(Total Donations > Campaign)", "kulebe"),
		),

		array(
			"type" => "textarea_html",
			"heading" => esc_html__("Content", "kulebe"),
			"param_name" => "content",
			"description" => esc_html__("Text area with default WordPress WYSIWYG Editor", "kulebe"),
		),		
		
		
      ),
   ) );
}
class WPBakeryShortCode_Campaign_Box extends WPBakeryShortCode {
}


add_filter( 'vc_shortcodes_css_class', 'kulebe_css_classes_for_vc_row_and_vc_column', 10, 2 );
function kulebe_css_classes_for_vc_row_and_vc_column( $class_string, $tag ) {

  if ( $tag == 'vc_column' || $tag == 'vc_column_inner' ) {
    $class_string = str_replace( 'vc_column_container ', ' ', $class_string ); // This will replace "vc_row-fluid" with "my_row-fluid"
  }
  
  if ( $tag == 'vc_column' || $tag == 'vc_column_inner' ) {
    $class_string = preg_replace( '/vc_col-sm-(\d{1,2})/', 'medium-$1 columns', $class_string ); // This will replace "vc_col-sm-%" with "my_col-sm-%"
  }

  return $class_string; // Important: you should always return modified or original $class_string
}