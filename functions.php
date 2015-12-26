<?php
function add_asset()
{
    wp_enqueue_style('BSmin', get_template_directory_uri()."/css/bootstrap.min.css");
    wp_enqueue_style('BS', get_template_directory_uri()."/css/bootstrap.css");
    wp_enqueue_style('BStheme', get_template_directory_uri()."/css/bootstrap-theme.min.css");
    wp_enqueue_style('VE', get_template_directory_uri()."/css/validationEngine.jquery.css");
    wp_enqueue_style('temp', get_template_directory_uri()."/css/template.css");
    wp_enqueue_style('Jq', get_template_directory_uri()."/css/jquery-ui.css");
    wp_enqueue_style('style', get_template_directory_uri()."/style.css");
    wp_enqueue_style('ajax', 'http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css');

    
    wp_enqueue_script('minJs',get_template_directory_uri()."/js/jquery-1.11.3.min.js");
    wp_enqueue_script('Jqmin',get_template_directory_uri()."/js/jquery-1.8.2.min.js");
    wp_enqueue_script('main',get_template_directory_uri()."/js/main.js");
    wp_enqueue_script('BSjs',get_template_directory_uri()."/js/bootstrap.js");
    wp_enqueue_script('Jqjs',get_template_directory_uri()."/js/jquery-ui.js");
    wp_enqueue_script('JqVEen',get_template_directory_uri()."/js/languages/jquery.validationEngine-en.js");
    wp_enqueue_script('JqVE',get_template_directory_uri()."/js/jquery.validationEngine.js");
}

add_action('init','add_asset');
?>