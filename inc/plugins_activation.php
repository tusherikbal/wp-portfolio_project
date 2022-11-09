<?php 
function tgmpa_plugin_activation(){

    $plugin = array(
        array(
            'name' => 'contact form 7',
            'slug' => 'contact-form-7',
            'required' => true
        ),
        array(
            'name' => 'Kirki Customizer Framework ',
            'slug' => 'kirki',
            'required' => true
        ),
        array(
            'name' => 'Customizer Export Import ',
            'slug' => 'customizer-export-import',
            'required' => true
        ),
     
        );


        $config = array(
            'id' => 'portfolio_theme_plugin',
            'menu' => 'Portfolio theme plugin installation',
            'parent_slug' => 'themes.php',
            'has_notice' => true,

        );        


        tgmpa( $plugin, $config );


}
add_action('tgmpa_register','tgmpa_plugin_activation');