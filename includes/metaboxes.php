<?php
add_filter( 'rwmb_meta_boxes', 'kulebe_register_page_meta_boxes' );

function kulebe_register_page_meta_boxes( $meta_boxes ) {
	
$prefix = 'klb_';
$meta_boxes = array();




/* ----------------------------------------------------- */
// Page Settings
/* ----------------------------------------------------- */

$meta_boxes[] = array(
	'id' => 'pagesettings',
	'title' => 'Page Settings',
	'pages' => array( 'page' ),
	'context' => 'side',
	'priority' => 'high',

	// List of meta fields
	'fields' => array(
	
		array(
			'name'		=> esc_html__('Open as a Separate Page','kulebe'),
			'id'		=> $prefix . 'separate_page',
			'type' => 'checkbox',
			// Value can be 0 or 1
			'std'  => 0,
		),
		
		array(
			'name'		=> esc_html__('Disable section from menu','kulebe'),
			'id'		=> $prefix . 'disable_section_from_menu',
			'type' => 'checkbox',
			// Value can be 0 or 1
			'std'  => 0,
		),	
				
	)
);

/* ----------------------------------------------------- */
// Service Icon Area
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'klb-service-icon',
	'title' => 'Service Post Icon',
	'pages' => array( 'service'),
	'context' => 'side',
	'priority' => 'high',

	// List of meta fields
	'fields' => array(	
		array(
			'name'		=> esc_html__('Icon Name','kulebe'),
			'id'		=> $prefix . 'iconname',
			'desc'		=> esc_html__('Enter your icon name for example users','kulebe'),
			'clone'		=> false,
			'type'		=> 'textarea',
			'std'		=> ''
		),
	)
);




/* ----------------------------------------------------- */
// Blog Post Slides Metabox
/* ----------------------------------------------------- */

$meta_boxes[] = array(
	'id'		=> 'klb-blogmeta-gallery',
	'title'		=> 'Blog Post Image Slides',
	'pages'		=> array( 'post' ),
	'context' => 'normal',

	'fields'	=> array(
		array(
			'name'	=> 'Blog Post Slider Images',
			'desc'	=> 'Upload up to 40 images for a slideshow - or only one to display a single image. <br /><br /><strong>Notice:</strong> The Preview Image will be the Image set as Featured Image.',
			'id'	=> $prefix . 'blogitemslides',
			'type'	=> 'image_advanced',
			'max_file_uploads' => 40,
		)
	)
);



/* ----------------------------------------------------- */
// Blog Audio Post Settings
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'klb-blogmeta-audio',
	'title' => 'Audio Settings',
	'pages' => array( 'post'),
	'context' => 'normal',

	// List of meta fields
	'fields' => array(	
		array(
			'name'		=> 'Audio Code',
			'id'		=> $prefix . 'blogaudiourl',
			'desc'		=> 'Enter your Audio URL(Oembed) or Embed Code.',
			'clone'		=> false,
			'type'		=> 'textarea',
			'std'		=> ''
		),
	)
);



/* ----------------------------------------------------- */
// Blog Video Metabox
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id'		=> 'klb-blogmeta-video',
	'title'		=> 'Blog Video Settings',
	'pages'		=> array( 'post' ),
	'context' => 'normal',

	'fields'	=> array(
		array(
			'name'		=> 'Video Type',
			'id'		=> $prefix . 'blog_video_type',
			'type'		=> 'select',
			'options'	=> array(
				'youtube'		=> 'Youtube',
				'vimeo'			=> 'Vimeo',
				'own'			=> 'Own Embed Code'
			),
			'multiple'	=> false,
			'std'		=> array( 'no' )
		),
		array(
			'name'	=> 'Embed Code<br />(Audio Embed Code is possible, too)',
			'id'	=> $prefix . 'blog_video_embed',
			'desc'	=> 'Just paste the ID of the video (E.g. http://www.youtube.com/watch?v=<strong>GUEZCxBcM78</strong>) you want to show, or insert own Embed Code. <br />This will show the Video <strong>INSTEAD</strong> of the Image Slider.<br /><strong>Of course you can also insert your Audio Embedd Code!</strong><br /><br /><strong>Notice:</strong> The Preview Image will be the Image set as Featured Image..',
			'type' 	=> 'textarea',
			'std' 	=> "",
			'cols' 	=> "40",
			'rows' 	=> "8"
		)
	)
);


/* ----------------------------------------------------- */
// Project Slides Metabox
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id'		=> $prefix .'project_gallery',
	'title'		=> 'Project Image Slides',
	'pages'		=> array( 'portfolio','service' ),
	'context' => 'normal',

	'fields'	=> array(
		array(
			'name'	=> 'Project Slider Images',
			'desc'	=> 'Upload up to 40 project images for a slideshow - or only one to display a single image. <br /><br /><strong>Notice:</strong> The Preview Image will be the Image set as Featured Image.',
			'id'	=> $prefix . 'project_item_slides',
			'type'	=> 'image_advanced',
			'max_file_uploads' => 40,
		)
		
	)
);



/* ----------------------------------------------------- */
// Project Video Metabox
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id'		=> $prefix .'project_video',
	'title'		=> 'Project Video',
	'pages'		=> array( 'portfolio','service' ),
	'context' => 'normal',

	'fields'	=> array(
		array(
			'name'		=> 'Video Type',
			'id'		=> $prefix . 'project_video_type',
			'type'		=> 'select',
			'options'	=> array(
				'youtube'		=> 'Youtube',
				'vimeo'			=> 'Vimeo',
			),
			'multiple'	=> false,
			'std'		=> array( 'no' )
		),
		array(
			'name'	=> 'Video URL or own Embedd Code<br />(Audio Embedd Code is possible, too)',
			'id'	=> $prefix . 'project_video_embed',
			'desc'	=> 'Just paste the ID of the video (E.g. http://www.youtube.com/watch?v=<strong>GUEZCxBcM78</strong>) you want to show, or insert own Embed Code. <br />This will show the Video <strong>INSTEAD</strong> of the Image Slider.<br /><strong>Of course you can also insert your Audio Embedd Code!</strong><br /><br /><strong>Notice:</strong> The Preview Image will be the Image set as Featured Image..',
			'type' 	=> 'textarea',
			'std' 	=> "",
			'cols' 	=> "40",
			'rows' 	=> "8"
		)
	)
);



/*  Project Audio Post Settings */

$meta_boxes[] = array(
	'id' => $prefix .'project_audio',
	'title' => 'Audio Settings',
	'pages' => array( 'portfolio','service'),
	'context' => 'normal',

	// List of meta fields
	'fields' => array(	
		array(
			'name'		=> 'Audio Embed Code',
			'id'		=> $prefix . 'projectaudiourl',
			'desc'		=> 'Enter your Audio URL(Oembed) or Embed Code.',
			'clone'		=> false,
			'type'		=> 'textarea',
			'std'		=> ''
		),
	)
);

return $meta_boxes;
}