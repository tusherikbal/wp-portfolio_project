<?php 
function dgtheme_import_files() {
	return array(
		array(
			'import_file_name'             => 'Demo Data Import',
			'local_import_file'            => trailingslashit( get_template_directory() ) . '/demo-data/ourportfolio.WordPress.2022-11-09.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . '/demo-data/localhost-portfolio-widgets.wie',
			
			
			'import_preview_image_url'     => trailingslashit(get_template_directory() ). '/demo-data/demo_image.png',
			
            'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'portfolio' ),

			'preview_url'                  => 'http://www.tusherikbal.com',
		),


		
	);
}


add_filter( 'ocdi/import_files', 'dgtheme_import_files' );