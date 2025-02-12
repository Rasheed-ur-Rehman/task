<?php
/*
Plugin Name: IP Redirect
Description: Redirect users if their IP address starts with 77.29.
Version: 1.0
Author: RAsheed Ur Rehman
*/

function hs_redirect_by_ip() {
    $user_ip = $_SERVER['REMOTE_ADDR'];
    if (strpos($user_ip, '77.29') === 0) {
        wp_redirect('https://rasheed-developer.site/'); 
        exit;
    }
}
add_action('init', 'hs_redirect_by_ip');

