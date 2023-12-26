<?php

/**
 * @version 0.0.1
 */
/*
Plugin Name: Simple
Plugin URI: iwatheq.com
Description: simple description
Author: Watheq
Version: 0.0.1
Author URI: iwatheq.com
*/

function my_func_action()
{
    wp_mail('email@gmail.com', 'Subject', 'Message..');
}
add_action('init', 'my_func_action');


function my_func_filter($content)
{
    $content .= '<p>Costom content</p>';
    return $content;
}

add_filter('the_content', 'my_func_filter');

function my_plugin_on_activation()
{
    if (!current_user_can('activate_plugins')) return;

    add_option('my_plugin_posts_per_page', 10);
    add_option('my_plugin_show_welcome_page', true);
}

register_activation_hook(__FILE__, 'my_plugin_on_activation');


function my_plugin_on_deactivation()
{
    if (!current_user_can('activate_plugins')) return;

    flush_rewrite_rules();
}

register_deactivation_hook(__FILE__, 'my_plugin_on_deactivation');


function my_plugin_on_uninstall()
{
    if (!current_user_can('activate_plugins')) return;

    delete_option('my_plugin_posts_per_page');
    delete_option('my_plugin_show_welcome_page');
}

register_activation_hook(__FILE__, 'my_plugin_on_uninstall');


// customize
function custom_logout()
{
    // something..
}
add_action('wp_logout', 'custom_logout');

// or..

function wp_logout()
{
    $user_id = get_current_user_id();

    wp_destroy_current_session();
    // wp_clear_auth_cookie();
    wp_set_current_user(0);

    /**
     * Fires after a user is logged out.
     *
     * @since 1.5.0
     * @since 5.5.0 Added the `$user_id` parameter.
     *
     * @param int $user_id ID of the user that was logged out.
     */
    do_action('wp_logout', $user_id);
}
