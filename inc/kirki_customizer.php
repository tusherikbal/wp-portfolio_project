<?php 
new \Kirki\Panel(
	'customize_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'customization Section', 'portfolio' ),
		'description' => esc_html__( 'Customize your text/image', 'portfolio' ),
	]
);



//hero slider

new \Kirki\Section(
	'slider_section',
	[
		'title'       => esc_html__( 'Slider Section', 'portfolio' ),
		'description' => esc_html__( 'hero Section Description.', 'portfolio' ),
		'panel'       => 'customize_panel',
		'priority'    => 160,
	]
);



//section background image

new \Kirki\Field\Image(
	[
		'settings'    => 'image_setting_id',
		'label'       => esc_html__( 'hero background image', 'portfolio' ),
		'description' => esc_html__( 'This is your hero section background image', 'portfolio' ),
		'section'     => 'slider_section',
		'default'     => '',
		'choices'     => [
			'save_as' => 'array',
		],
	]
);






//slider repeater

new \Kirki\Field\Repeater(
	[
		'settings' => 'slider_setting',
		'label'    => esc_html__( 'Repeater Control', 'kirki' ),
		'section'  => 'slider_section',
		'priority' => 10,

		'fields'   => [
			'slider_img'   => [
				'type'        => 'image',
				'label'       => esc_html__( 'slider Image', 'kirki' ),
				'description' => esc_html__( 'Description', 'kirki' ),
				'default'     => '',
			],

			'slider_h_text'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Slider Title', 'kirki' ),
				'description' => esc_html__( 'Description', 'kirki' ),
				'default'     => '',
			],
			'slider_p_text'    => [
				'type'        => 'textarea',
				'label'       => esc_html__( 'Descriptions', 'kirki' ),
				'description' => esc_html__( 'Description', 'kirki' ),
				'default'     => '',
			],
			'slider_sub_text'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Slider Sub Text', 'kirki' ),
				'description' => esc_html__( 'Description', 'kirki' ),
				'default'     => '',
			],
			'slider_btn_text_1'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Slider Btn Text 1', 'kirki' ),
				'description' => esc_html__( 'Description', 'kirki' ),
				'default'     => '',
			],
			'slider_btn_url_1'    => [
				'type'        => 'url',
				'label'       => esc_html__( 'Slider BTN URL 1', 'kirki' ),
				'description' => esc_html__( 'Description', 'kirki' ),
				'default'     => '',
			],
			'slider_btn_text_2'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Slider Btn Text 2', 'kirki' ),
				'description' => esc_html__( 'Description', 'kirki' ),
				'default'     => '',
			],
			'slider_btn_url_2'    => [
				'type'        => 'url',
				'label'       => esc_html__( 'Slider BTN URL 2', 'kirki' ),
				'description' => esc_html__( 'Description', 'kirki' ),
				'default'     => '',
			],
	
		],
	]
);


///hero section end. 




//////////////////////////




new \Kirki\Section(
	'about_section',
	[
		'title'       => esc_html__( 'About Section', 'portfolio' ),
		'description' => esc_html__( 'About Section Description.', 'portfolio' ),
		'panel'       => 'customize_panel',
		'priority'    => 160,
	]
);

//about image

new \Kirki\Field\Image(
	[
		'settings'    => 'about_us_image',
		'label'       => esc_html__( 'about us image', 'kirki' ),
		'description' => esc_html__( 'about us section image', 'kirki' ),
		'section'     => 'about_section',
		'default'     => '',
	]
);




//about titlle
new \Kirki\Field\Text(
	[
		'settings' => 'about_title',
		'label'    => esc_html__( 'About title', 'kirki' ),
		'section'  => 'about_section',
		'default'  => esc_html__( 'This is a default value', 'kirki' ),
		'priority' => 10,
	]
);

//about titlle
new \Kirki\Field\Textarea(
	[
		'settings' => 'about_description',
		'label'    => esc_html__( 'About description', 'kirki' ),
		'section'  => 'about_section',
		'default'  => esc_html__( 'This is a default value', 'kirki' ),
		'priority' => 10,
	]
);


// buttons. 

	//btn 1
new \Kirki\Field\Text(
	[
		'settings' => 'btn_txt_1',
		'label'    => esc_html__( 'BUtton one', 'kirki' ),
		'section'  => 'about_section',
		'default'  => esc_html__( 'This is a default value', 'kirki' ),
		'priority' => 10,
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'btn_url_1',
		'label'    => esc_html__( 'Button url', 'kirki' ),
		'section'  => 'about_section',
		'default'  => 'https://yoururl.com/',
		'priority' => 10,
	]
);




	//btn 2
new \Kirki\Field\Text(
	[
		'settings' => 'btn_txt_2',
		'label'    => esc_html__( 'Button two', 'kirki' ),
		'section'  => 'about_section',
		'default'  => esc_html__( 'This is a default value', 'kirki' ),
		'priority' => 10,
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'button_Url',
		'label'    => esc_html__( 'URL Control', 'kirki' ),
		'section'  => 'about_section',
		'default'  => 'https://yoururl.com/',
		'priority' => 10,
	]
);


//My services section

new \Kirki\Section(
	'my_service',
	[
		'title'       => esc_html__( 'Services Section', 'portfolio' ),
		'description' => esc_html__( 'Services Section Description.', 'portfolio' ),
		'panel'       => 'customize_panel',
		'priority'    => 160,
	]
);

//section background image
new \Kirki\Field\Image(
	[
		'settings'    => 'services_bg_image',
		'label'       => esc_html__( 'Services image', 'kirki' ),
		'description' => esc_html__( 'services background image', 'kirki' ),
		'section'     => 'my_service',
		'default'     => '',
	]
);

new \Kirki\Field\text(
	[
		'settings'    => 'service_text',
		'label'       => esc_html__( 'Services title', 'kirki' ),
		'description' => esc_html__( 'services  title', 'kirki' ),
		'section'     => 'my_service',
		'default'     => '',
	]
);

new \Kirki\Field\Textarea(
	[
		'settings'    => 'services_description',
		'label'       => esc_html__( 'Services description', 'kirki' ),
		'description' => esc_html__( 'services description', 'kirki' ),
		'section'     => 'my_service',
		'default'     => '',
	]
);





//services part reapeter


new \Kirki\Field\Repeater(
	[
		'settings' => 'services_setting',
		'label'    => esc_html__( 'Services', 'kirki' ),
		'section'  => 'my_service',
		'priority' => 10,
		'choices' => [
			'limit' => 4
		],

		'fields'   => [
			'service_icon'   => [
				'type'        => 'select',
				'label'       => esc_html__( 'services icon', 'kirki' ),
				'description' => esc_html__( 'Description', 'kirki' ),
				'default'     => '',
				'placeholder' => esc_html__( 'Choose Icon', 'kirki' ),

				'choices'     => [
					'fa-industry' => esc_html__( 'industry', 'kirki' ),
					'fa-building' => esc_html__( 'building', 'kirki' ),
					'fa-image' => esc_html__( 'Image', 'kirki' ),
					'fa-gears' => esc_html__( 'Gears', 'kirki' ),
				],
			],
			

			'service_title'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'service Title', 'kirki' ),
				'description' => esc_html__( 'Description', 'kirki' ),
				'default'     => '',
			],
			'service_description'    => [
				'type'        => 'textarea',
				'label'       => esc_html__( 'service textarea', 'kirki' ),
				'description' => esc_html__( 'Description', 'kirki' ),
				'default'     => '',
			],
			
	
		],
	]
);



//skill section

new \Kirki\Section(
	'skill_section',
	[
		'title'       => esc_html__( 'Skill Section', 'portfolio' ),
		'description' => esc_html__( 'skill Section Description.', 'portfolio' ),
		'panel'       => 'customize_panel',
		'priority'    => 160,
	]
);


//section image
new \Kirki\Field\Image(
	[
		'settings'    => 'skill_img',
		'label'       => esc_html__( 'Skill image', 'kirki' ),
		'description' => esc_html__( 'Skill background image', 'kirki' ),
		'section'     => 'skill_section',
		'default'     => '',
	]
);

//section title
new \Kirki\Field\Text(
	[
		'settings'    => 'skill_title',
		'label'       => esc_html__( 'Skill title', 'kirki' ),
		'description' => esc_html__( 'skill title', 'kirki' ),
		'section'     => 'skill_section',
		'default'     => '',
	]
);

//section description
new \Kirki\Field\Textarea(
	[
		'settings'    => 'skill_description',
		'label'       => esc_html__( 'skill description', 'kirki' ),
		'description' => esc_html__( 'skill Description', 'kirki' ),
		'section'     => 'skill_section',
		'default'     => '',
	]
);


//skill name and value

new \Kirki\Field\Repeater(
	[
		'settings' => 'skill_settings',
		'label'    => esc_html__( 'Services', 'kirki' ),
		'section'  => 'skill_section',
		'priority' => 10,
		'choices' => [
			'limit' => 4
		],

		'fields'   => [
			

			'skill_name'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'service Title', 'kirki' ),
				'description' => esc_html__( 'Description', 'kirki' ),
				'default'     => '',
			],
			'Skillnumber'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Skill %', 'kirki' ),
				'description' => esc_html__( 'write 30,50,90 %', 'kirki' ),
				'default'     => '',
			],
		
			]	] );




//client feedback section

new \Kirki\Section(
	'client_feedback_section',
	[
		'title'       => esc_html__( 'Client feedback Title', 'portfolio' ),
		'description' => esc_html__( 'client feedback Description.', 'portfolio' ),
		'panel'       => 'customize_panel',
		'priority'    => 160,
	]
);

//section title
new \Kirki\Field\Text(
	[
		'settings'    => 'client_feedback_title',
		'label'       => esc_html__( 'Client feedback title', 'kirki' ),
		'description' => esc_html__( 'client feedback title', 'kirki' ),
		'section'     => 'client_feedback_section',
		'default'     => '',
	]
);

//section title
new \Kirki\Field\Textarea(
	[
		'settings'    => 'client_feedback_description',
		'label'       => esc_html__( ' Title', 'kirki' ),
		'description' => esc_html__( 'Description', 'kirki' ),
		'section'     => 'client_feedback_section',
		'default'     => '',
	]
);



new \Kirki\Field\Repeater(
	[
		'settings' => 'client_testmonial',
		'label'    => esc_html__( 'Testmonials', 'kirki' ),
		'section'  => 'client_feedback_section',
		'priority' => 10,
		

		'fields'   => [
			

			'client_img'    => [
				'type'        => 'image',
				'label'       => esc_html__( 'Client img', 'kirki' ),
				'description' => esc_html__( 'Description', 'kirki' ),
				'default'     => '',
			],
			'client_name'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Client name', 'kirki' ),
				'description' => esc_html__( 'Client name ', 'kirki' ),
				'default'     => '',
			],

			'client_description'    => [
				'type'        => 'textarea',
				'label'       => esc_html__( 'Client Description', 'kirki' ),
				'description' => esc_html__( 'lorem ipsum doller sit  amet', 'kirki' ),
				'default'     => '',
			],
		
			]	] );



			//contact form 
			
	new \Kirki\Section(
		'contact_form_section',
		[
			'title'       => esc_html__( 'Contact form text', 'portfolio' ),
			'description' => esc_html__( 'Description.', 'portfolio' ),
			'panel'       => 'customize_panel',
			'priority'    => 160,
		]
	);
			
	//section title
	new \Kirki\Field\Text(
		[
			'settings'    => 'contactform_section_title',
			'label'       => esc_html__( 'contact form title', 'kirki' ),
			'description' => esc_html__( 'client feedback title', 'kirki' ),
			'section'     => 'contact_form_section',
			'default'     => '',
		]
	);

	new \Kirki\Field\Textarea(
		[
			'settings'    => 'contactform_section_description',
			'label'       => esc_html__( 'contact form description', 'kirki' ),
			'description' => esc_html__( 'description', 'kirki' ),
			'section'     => 'contact_form_section',
			'default'     => '',
		]
	);



	//footer section 


	//contact form 
			
	new \Kirki\Section(
		'footer',
		[
			'title'       => esc_html__( 'Footer Area', 'portfolio' ),
			'description' => esc_html__( 'Description.', 'portfolio' ),
			'panel'       => 'customize_panel',
			'priority'    => 160,
		]
	);
			
	//section title
	new \Kirki\Field\Text(
		[
			'settings'    => 'footer_copyright_section',
			'label'       => esc_html__( 'Footer social media', 'kirki' ),
			'description' => esc_html__( 'description', 'kirki' ),
			'section'     => 'footer',
			'default'     => '',
		]
	);

	new \Kirki\Field\url(
		[
			'settings'    => 'footer_fb_social_link',
			'label'       => esc_html__( 'Facebook Link', 'kirki' ),
			'description' => esc_html__( 'description', 'kirki' ),
			'section'     => 'footer',
			'default'     => '',
		]
	);
	new \Kirki\Field\url(
		[
			'settings'    => 'footer_tw_social_link',
			'label'       => esc_html__( 'Twitter Link', 'kirki' ),
			'description' => esc_html__( 'description', 'kirki' ),
			'section'     => 'footer',
			'default'     => '',
		]
	);
	new \Kirki\Field\url(
		[
			'settings'    => 'footer_insta_social_link',
			'label'       => esc_html__( 'Instagram Link', 'kirki' ),
			'description' => esc_html__( 'description', 'kirki' ),
			'section'     => 'footer',
			'default'     => '',
		]
	);
	new \Kirki\Field\url(
		[
			'settings'    => 'footer_google_link',
			'label'       => esc_html__( 'google Link', 'kirki' ),
			'description' => esc_html__( 'description', 'kirki' ),
			'section'     => 'footer',
			'default'     => '',
		]
	);




	//portfolio section

	new \Kirki\Section(
		'portfolio_section',
		[
			'title'       => esc_html__( 'Portfolio Area', 'portfolio' ),
			'description' => esc_html__( 'Description.', 'portfolio' ),
			'panel'       => 'customize_panel',
			'priority'    => 160,
		]
	);
			
	//section title
	new \Kirki\Field\Text(
		[
			'settings'    => 'portfolio_text_section',
			'label'       => esc_html__( 'Title', 'kirki' ),
			'description' => esc_html__( 'description', 'kirki' ),
			'section'     => 'portfolio_section',
			'default'     => '',
		]
	);
	new \Kirki\Field\Textarea(
		[
			'settings'    => 'portfolio_description_section',
			'label'       => esc_html__( 'description', 'kirki' ),
			'description' => esc_html__( 'description', 'kirki' ),
			'section'     => 'portfolio_section',
			'default'     => '',
		]
	);



	new \Kirki\Field\Repeater(
		[
			'settings' => 'portfolio_menu_item',
			'label'    => esc_html__( 'Portfolio Items', 'kirki' ),
			'section'  => 'portfolio_section',
			'priority' => 10,
			'choices' => [
				'limit' => 10
			],
	
			'fields'   => [
	
				'portoliio_item_title_menu_top'    => [
					'type'        => 'text',
					'label'       => esc_html__( 'portfolio title', 'kirki' ),
					'description' => esc_html__( 'Description', 'kirki' ),
					'default'     => '',
				],
			]]
			);







	//portfolio reapeter
new \Kirki\Field\Repeater(
	[
		'settings' => 'portfolio_item',
		'label'    => esc_html__( 'Portfolio Items', 'kirki' ),
		'section'  => 'portfolio_section',
		'priority' => 10,
		'choices' => [
			'limit' => 10
		],

		'fields'   => [

			'portoliio_item_title'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'portfolio name', 'kirki' ),
				'description' => esc_html__( 'Description', 'kirki' ),
				'default'     => '',
			],
			'portoliio_item_filter'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'portfolio filter', 'kirki' ),
				'description' => esc_html__( 'poftfolio fileter id', 'kirki' ),
				'default'     => '',
			],

			'portoliio_item_img'    => [
				'type'        => 'image',
				'label'       => esc_html__( 'portfolio image', 'kirki' ),
				'description' => esc_html__( 'Description', 'kirki' ),
				'default'     => '',
			],

			'portoliio_item_title_menu'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'portfolio title menu class', 'kirki' ),
				'description' => esc_html__( 'Description', 'kirki' ),
				'default'     => '',
			],



	
		],
	]
);