<?php 


        require_once get_template_directory(). '/inc/kirki_customizer.php';
        require_once get_template_directory(). '/inc/class-tgm-plugin-activation.php';
        require_once get_template_directory(). '/inc/plugins_activation.php';

        load_theme_textdomain( 'portfolio', get_template_directory() . '/languages' );
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');


        function portfolio_theme() {
            register_nav_menus( array(
                'primary-menu'=>__('Navigation Menu'),
                'left_menu'=>__('Left humbargar'),
                'single_blog_menu'=>__('Single blog menu'),
            ));
        }
       add_action('after_setup_theme', 'portfolio_theme');
        
       
       
       //title trim
       function limit_word_count($title) {
        $len = 5; //change this to the number of words
        if (str_word_count($title) > $len) {
            $keys = array_keys(str_word_count($title, 2));
            $title = substr($title, 0, $keys[$len]);
        }
        return $title;
    }
    add_filter('the_title', 'limit_word_count');



        function myportfolio_enque(){

        //bootstrap main 
    wp_enqueue_style( 'maincss', get_template_directory_uri().'/assets/css/bootstrap.min.css',array(), '1.0.0', 'all' );

        //fontawesome_ main 
    wp_enqueue_style( 'fontawesome_', get_template_directory_uri().'/assets/css/font-awesome.min.css',array(), '1.0.0', 'all' );


        //owl-carosel main 
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.css',array(), '1.0.0', 'all' );

        //magnific_popup 
    wp_enqueue_style( 'magnific_popup', get_template_directory_uri().'/assets/css/magnific-popup.css',array(), '1.0.0', 'all' );

        //animate_css 
    wp_enqueue_style( 'animate_css', get_template_directory_uri().'/assets/css/animate.css',array(), '1.0.0', 'all' );

        //responsive_css 
    wp_enqueue_style( 'responsive', get_template_directory_uri().'/assets/css/responsive.css',array(), '1.0.0', 'all' );

    wp_enqueue_style( 'themestyle', get_template_directory_uri().'/style.css',array(), '1.0.0', 'all' );

    wp_enqueue_style( 'style-name', get_stylesheet_uri() );





    // javascript part

        //jquery main
    wp_enqueue_script( 'jquery', get_template_directory_uri().'/assets/js/jquery.min.js',array(), '1.0.0', true );

    //bootstrap-js
    wp_enqueue_script( 'bootstrap_jquery', get_template_directory_uri().'/assets/js/bootstrap.min.js',array(), '1.0.0', true );


    wp_enqueue_script( 'carosel_jquery', get_template_directory_uri().'/assets/js/owl.carousel.min.js',array(), '1.0.0', true );


    wp_enqueue_script( 'plugin_jquery', get_template_directory_uri().'/assets/js/isotope.pkgd.min.js',array(), '1.0.0', true );

    wp_enqueue_script( 'magnific_jquery', get_template_directory_uri().'/assets/js/magnific-popup.min.js',array(), '1.0.0', true );

    wp_enqueue_script( 'player_jquery', get_template_directory_uri().'/assets/js/jquery.mb.YTPlayer.min.js',array(), '1.0.0', true );

    wp_enqueue_script( 'wow_jquery', get_template_directory_uri().'/assets/js/wow-1.3.0.min.js',array(), '1.0.0', true );

    wp_enqueue_script( 'nav_jquery', get_template_directory_uri().'/assets/js/jquery.nav.js',array(), '1.0.0', true );

    wp_enqueue_script( 'main_jquery', get_template_directory_uri().'/assets/js/main.js',array(), '1.0.0', true );

      }

    
    add_action( 'wp_enqueue_scripts', 'myportfolio_enque' );




    //comments///////

    function move_comment_field( $fields ) {
        $comment_field = $fields['comment'];
        unset( $fields['comment'] );
        $fields['comment'] = $comment_field;
        return $fields;
    }
    add_filter( 'comment_form_fields', 'move_comment_field' );
    
    // comment field placeholder
    function wpse_62742_comment_placeholders( $fields )
    {
        $fields['author'] = str_replace(
            '<input',
            '<input placeholder="'
                . _x(
                    'Your name',
                    'comment form placeholder',
                    'theme_text_domain'
                    )
                . '"',
            $fields['author']
        );
        $fields['email'] = str_replace(
            '<input id="email" name="email" type="text"',
            /* We use a proper type attribute to make use of the browser’s
             * validation, and to get the matching keyboard on smartphones.
             */
            '<input type="email" placeholder="mail@youremail.com"  id="email" name="email"',
            $fields['email']
        );
        $fields['url'] = str_replace(
            '<input id="url" name="url" type="text"',
            // Again: a better 'type' attribute value.
            '<input placeholder="your website link" id="url" name="url" type="text"',
            $fields['url']
        );
        return $fields;
    }
    add_filter( 'comment_form_default_fields', 'wpse_62742_comment_placeholders' );
    //for field type textarea | comment box
    function placeholder_comment_form_field($fields) {
        $replace_comment = __('Your Comment', 'yourdomain');
        $fields['comment_field'] = '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) .
        '</label><textarea id="comment" name="comment" cols="45" rows="8" placeholder="'.$replace_comment.'" aria-required="true"></textarea></p>';
        return $fields;
     }
    
    add_filter( 'comment_form_defaults', 'placeholder_comment_form_field' );
    



    //widgets 

    function wpdocs_theme_slug_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'Main Sidebar', 'textdomain' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
            'before_widget' => '<h4 id="%1$s" class="widget %2$s">',
            'after_widget'  => '</h4>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>',
        ) );
    }
    add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );
    


//customizer option
    function my_export_option_keys( $keys ) {
        $keys[] = 'my_option_key';
        $keys[] = 'another_option_key';
        return $keys;
    }
    
    add_filter( 'cei_export_option_keys', 'my_export_option_keys' );