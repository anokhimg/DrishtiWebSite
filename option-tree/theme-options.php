<?php
/**
 * Initialize the custom theme options.
 */
add_action( 'admin_init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => ''
    ),
    'sections'        => array( 
      array(
        'id'          => 'general',
        'title'       => 'General Config'
      ),

      array(
        'id'          => 'header_settings',
        'title'       => 'Header Settings'
      ),

      array(
        'id'          => 'color_settings',
        'title'       => 'Color Settings'
      ),
      array(
        'id'          => 'blog_layout',
        'title'       => 'Blog Layout'
      ),
	  
      array(
        'id'          => 'donate_settings',
        'title'       => 'Donate Button'
      ),

      array(
        'id'          => 'google_fonts',
        'title'       => 'Google Fonts'
      ),


      array(
        'id'          => 'typography',
        'title'       => 'Typography'
      ),
	  
	  array(
        'id'          => 'social',
        'title'       => 'Social'
      ),

	  array(
        'id'          => 'map_settings',
        'title'       => 'Map Settings'
      ),

      array(
        'id'          => 'copyright',
        'title'       => 'Footer / Copyright'
      )
 
    ),
    'settings'        => array(
      array(
        'label'       => esc_html__( 'Logo', 'kulebe' ),
        'id'          => 'tab_logo',
        'type'        => 'tab',
        'section'     => 'general'
      ),
	  
	array(
        'id'          => 'kulebe_logo',
        'label'       => 'Logo Image',
        'desc'        => 'Upload your own logo.',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  
	array(
        'id'          => 'kulebe_logotext',
        'label'       => 'Logo Text',
        'desc'        => 'Add Logo Text',
        'std'         => 'kulebe',
        'type'        => 'text',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),	

      array(
        'label'       => esc_html__( 'Loader', 'kulebe' ),
        'id'          => 'tab_loader',
        'type'        => 'tab',
        'section'     => 'general'
      ),
	  
	  array(
        'id'          => 'kulebe_loader',
        'label'       => 'Loader Image',
        'desc'        => 'Upload your own loader image.',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

      array(
        'label'       => esc_html__( 'Css', 'kulebe' ),
        'id'          => 'tab_css',
        'type'        => 'tab',
        'section'     => 'general'
      ),
	  
      array(
        'id'          => 'kulebe_css',
        'label'       => esc_html__('Additional CSS','kulebe'),
        'desc'        => 'Additional css here (optional)',
        'std'         => '',
        'type'        => 'css',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  
      array(
        'label'       => esc_html__( 'Js', 'kulebe' ),
        'id'          => 'tab_js',
        'type'        => 'tab',
        'section'     => 'general'
      ),
	  
       array(
        'id'          => 'kulebe_js',
        'label'       => esc_html__('Additional JS','kulebe'),
        'desc'        => 'Additional js here (optional)',
        'std'         => '',
        'type'        => 'css',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

      array(
        'label'       => esc_html__( 'Colors', 'act' ),
        'id'          => 'tab_header_color',
        'type'        => 'tab',
        'section'     => 'header_settings'
      ),

	  array(
        'id'          => 'kulebe_headertop_bgcolor',
        'label'       => 'Header background on the top',
        'desc'        => 'Header background Color on the top',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'header_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

	  array(
        'id'          => 'kulebe_header_bgcolor',
        'label'       => 'Header Background',
        'desc'        => 'Header Background Color',
        'std'         => '#2B2D42',
        'type'        => 'colorpicker',
        'section'     => 'header_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

	  array(
        'id'          => 'kulebe_header_fontcolor',
        'label'       => 'Header Font Color',
        'desc'        => 'Header Font Color',
        'std'         => '#fff',
        'type'        => 'colorpicker',
        'section'     => 'header_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),


	  array(
        'id'          => 'kulebe_header_hovercolor',
        'label'       => 'Header Hover Color',
        'desc'        => 'Header Hover and Active Color',
        'std'         => '#ffd200',
        'type'        => 'colorpicker',
        'section'     => 'header_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),


      array(
        'label'       => esc_html__( 'General', 'act' ),
        'id'          => 'tab_general_color',
        'type'        => 'tab',
        'section'     => 'color_settings'
      ),

	  array(
        'id'          => 'kulebe_main_color',
        'label'       => 'Main',
        'desc'        => 'Set Main Color',
        'std'         => '#ffd200',
        'type'        => 'colorpicker',
        'section'     => 'color_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

	  array(
        'id'          => 'kulebe_secondary_color',
        'label'       => 'Secondary',
        'desc'        => 'Set Secondary Color',
        'std'         => '#2B2D42',
        'type'        => 'colorpicker',
        'section'     => 'color_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),



	  array(
        'id'          => 'kulebe_blog_background',
        'label'       => esc_html__( 'Blog Top Image','kulebe'),
        'desc'        => esc_html__( 'Upload your own blog top background image.','kulebe'),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'blog_layout',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),


      array(
        'id'          => 'kulebe_layout_set',
        'label'       => esc_html__( 'Blog Layout', 'kulebe' ),
        'desc'        => esc_html__( 'Left Sidebar - Right Sidebar - Full Width Sections', 'kulebe' ),
        'std'         => 'right-sidebar',
        'type'        => 'radio-image',
        'section'     => 'blog_layout',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'id'          => 'donate_button',
        'label'       => __( 'On/Off Donate Button', 'act' ),
        'desc'        => 'Disable or Enable Donate Button on Primary Menu',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'donate_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),


	  array(
        'id'          => 'kulebe_donate_button_text',
        'label'       => 'Name of Button',
        'desc'        => 'Set text for donation button',
        'std'         => 'Donate',
        'type'        => 'text',
        'section'     => 'donate_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

      array(
        'id'          => 'donate_button_type',
        'label'       => esc_html__( 'Select Button Type', 'act' ),
        'desc'        => esc_html__( '<strong>Modal Type:</strong> Popup window will be appeared.<br><strong>Default Type:</strong> You can set a url to redirect the button.', 'act' ),
        'std'         => '',
        'type'        => 'select',
        'section'     => 'donate_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'modal_type',
            'label'       => esc_html__( 'Modal Type', 'act' ),
            'src'         => ''
          ),
          array(
            'value'       => 'default_type',
            'label'       => esc_html__( 'Default Type', 'act' ),
            'src'         => ''
          )
        )
      ),

	  array(
        'id'          => 'kulebe_donate_modal_content',
        'label'       => 'Modal Content',
        'desc'        => 'Add content for modal popup screen.',
        'std'         => 'Donate',
        'type'        => 'textarea',
        'section'     => 'donate_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'condition'   => 'donate_button_type:is(modal_type)'
      ),

	  array(
        'id'          => 'kulebe_donate_button_url',
        'label'       => 'Button Url',
        'desc'        => 'Add url for donation button ',
        'std'         => '#',
        'type'        => 'text',
        'section'     => 'donate_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'condition'   => 'donate_button_type:is(default_type)'
      ),



	 array(
	    'id'          => 'body_google_fonts',
	    'label'       => esc_html__('Google Fonts','kulebe'),
	    'desc'        => esc_html__('Add Google Font and after the save settings follow these steps Dashboard > Appearance > Theme Options > Typography','kulebe'),
	    'std'         => '',
	    'type'        => 'google-fonts',
	    'section'     => 'google_fonts',
	    'rows'        => '',
	    'post_type'   => '',
	    'taxonomy'    => '',
	    'min_max_step'=> '',
	    'class'       => '',
	    'condition'   => '',
	    'operator'    => 'and'
	),


      array(
        'label'       => esc_html__( 'General', 'kulebe' ),
        'id'          => 'tab_general',
        'type'        => 'tab',
        'section'     => 'typography'
      ),

      array(
        'id'          => 'tipigrof',
        'label'       => esc_html__( 'Body Typography', 'kulebe' ),
        'desc'        => 'The Typography option type is for adding typography styles to your site.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'label'       => esc_html__( 'H1 Title', 'kulebe' ),
        'id'          => 'tab_h1title',
        'type'        => 'tab',
        'section'     => 'typography'
      ),

      array(
        'id'          => 'h1_tipigrof',
        'label'       => esc_html__( 'H1 Title Typography', 'kulebe' ),
        'desc'        => 'The Typography option type is for adding typography styles to your site.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'label'       => esc_html__( 'H2 Title', 'kulebe' ),
        'id'          => 'tab_h2title',
        'type'        => 'tab',
        'section'     => 'typography'
      ),

      array(
        'id'          => 'h2_tipigrof',
        'label'       => esc_html__( 'H2 Title Typography', 'kulebe' ),
        'desc'        => 'The Typography option type is for adding typography styles to your site.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'label'       => esc_html__( 'H3 Title', 'kulebe' ),
        'id'          => 'tab_h3title',
        'type'        => 'tab',
        'section'     => 'typography'
      ),

      array(
        'id'          => 'h3_tipigrof',
        'label'       => esc_html__( 'H3 Title Typography', 'kulebe' ),
        'desc'        => 'The Typography option type is for adding typography styles to your site.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'label'       => esc_html__( 'H4 Title', 'kulebe' ),
        'id'          => 'tab_h4title',
        'type'        => 'tab',
        'section'     => 'typography'
      ),

      array(
        'id'          => 'h4_tipigrof',
        'label'       => esc_html__( 'H4 Title Typography', 'kulebe' ),
        'desc'        => 'The Typography option type is for adding typography styles to your site.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'label'       => esc_html__( 'H5 Title', 'kulebe' ),
        'id'          => 'tab_h5title',
        'type'        => 'tab',
        'section'     => 'typography'
      ),

      array(
        'id'          => 'h5_tipigrof',
        'label'       => esc_html__( 'H5 Title Typography', 'kulebe' ),
        'desc'        => 'The Typography option type is for adding typography styles to your site.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'label'       => esc_html__( 'H6 Title', 'kulebe' ),
        'id'          => 'tab_h6title',
        'type'        => 'tab',
        'section'     => 'typography'
      ),


      array(
        'id'          => 'h6_tipigrof',
        'label'       => esc_html__( 'H6 Title Typography', 'kulebe' ),
        'desc'        => 'The Typography option type is for adding typography styles to your site.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'label'       => esc_html__( 'P(Content)', 'kulebe' ),
        'id'          => 'tab_pcontent',
        'type'        => 'tab',
        'section'     => 'typography'
      ),

      array(
        'id'          => 'p_tipigrof',
        'label'       => esc_html__( 'P(Content) Typography', 'kulebe' ),
        'desc'        => 'The Typography option type is for adding typography styles to your site.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  
      array(
        'id'          => 'kulebe_socialicons',
        'label'       => 'Set Social Icon',
        'desc'        => 'Create Social Icons',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'social',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'settings'    => array( 
		
          array(
            'id'          => 'kulebe_sociallink',
            'label'       => 'Link',
            'desc'        => 'Add Your Link',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),

          array(
            'id'          => 'kulebe_socialicon',
            'label'       => 'Icon Name',
            'desc'        => 'Add Your Icon : telephone46',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          )

        )
      ),

      array(
        'id'          => 'kulebe_mapapi',
        'label'       => 'Google Map Api Key',
        'desc'        => 'add your google map api key',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'map_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

      array(
        'label'       => esc_html__( 'Copyright', 'kulebe' ),
        'id'          => 'tab_copyright',
        'type'        => 'tab',
        'section'     => 'copyright'
      ),

      array(
        'id'          => 'kulebe_copyright1',
        'label'       => 'Footer Copyright',
        'desc'        => 'Footer Copyright',
        'std'         => 'Copyright 2016.KlbTheme . All rights reserved',
        'type'        => 'text',
        'section'     => 'copyright',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),


      array(
        'label'       => esc_html__( 'Colors', 'act' ),
        'id'          => 'tab_footer_color',
        'type'        => 'tab',
        'section'     => 'copyright'
      ),

	  array(
        'id'          => 'kulebe_footer_bgcolor',
        'label'       => 'Footer Background',
        'desc'        => 'Footer Background Color',
        'std'         => '#2B2D42',
        'type'        => 'colorpicker',
        'section'     => 'copyright',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

	  array(
        'id'          => 'kulebe_footer_fontcolor',
        'label'       => 'Footer Font Color',
        'desc'        => 'Footer Font Color',
        'std'         => '#fff',
        'type'        => 'colorpicker',
        'section'     => 'copyright',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
 
 
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}