<?php

    //Plugin Name: Dark Mode
    //Description: Activa el modo oscuro en el Thema.
    //Version:1.0
    //Author: Enrique Mendez Roger
    //Author URI: https://diegomendez11117.github.io

    function style_plugins()
    {
        $styles_uri = plugin_dir_url(__FILE__);

        wp_enqueue_style('modo_oscuro', $styles_uri.'/assets/css/style.css','','1.0','all');
    }

    add_action('wp_enqueue_scripts','style_plugins');

?>