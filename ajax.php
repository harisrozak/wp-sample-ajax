<?php
/**
 * ajax.php
 * ajax action identified from script.js is "sample_sum"
 */

add_action('wp_ajax_sample_sum', 'ajax_sample_sum_callback' ); /* for logged in user */
add_action('wp_ajax_nopriv_sample_sum', 'ajax_sample_sum_callback'); /* for non-logged in user */

function ajax_sample_sum_callback() 
{
    global $wpdb; // this is how you get access to the database

    $total = intval($_POST['num_1']) + intval($_POST['num_2']);

    echo $total;

    die();
}