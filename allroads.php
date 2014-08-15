<?php
/*
  Plugin Name: All Roads Home Page Customizer
  Plugin URI: http://smartcatdesign.net/
  Description: Allows for easy modification of the homepage's boxes & articles
  Version: 1.0
  Author: SmartCat
  Author URI: http://smartcatdesign.net
  License: GPL v2
 */


register_activation_hook(__FILE__, 'allroads_install');

function allroads_install() {
    global $wp_version;

    if (version_compare($wp_version, "3.2.1", "<")) {
        deactivate_plugins(basename(__FILE__));
        wp_die("This plugin requires WordPress version 3.2.1 or higher.");
    }
    set_allroads();
}

add_action('admin_menu', 'allroads_menu');
add_action('wp_head', 'show_prp');

function allroads_menu(){
	add_menu_page('Allroads plugin','Allroads plugin','administrator','allroads.php','allroads_action',plugins_url . '/allroads/allroads.png');
}
function show_prp(){
    include_once 'script.php';
}
function allroads_action(){
	if (isset($_REQUEST['act_allroads'])) {
        switch ($_REQUEST['act_allroads']) {
            case "save":
                set_allroads();
                //echo '<div class="updated below-h2" id="message" style="position:relative; clear:both;"><p>Under Construction: ' . $_REQUEST['set_opt'] . '</p></div>';
                break;
            default:
        }
    }
    $allroads_post1 = get_option('allroads_post1');
    $allroads_post2 = get_option('allroads_post2');
    $allroads_post3 = get_option('allroads_post3');
    $allroads_post4 = get_option('allroads_post4');
    $allroads_post5 = get_option('allroads_post5');
    $allroads_post6 = get_option('allroads_post6');
    $allroads_post7 = get_option('allroads_post7');
    $allroads_post8 = get_option('allroads_post8');
    $allroads_post9 = get_option('allroads_post9');
    $allroads_post10 = get_option('allroads_post10');
    $allroads_post11 = get_option('allroads_post11');
    $allroads_post12 = get_option('allroads_post12');
	include_once('form.php');
}
function set_allroads(){
	$new_value1 = ($_REQUEST['allroads_post1'] == "") ? 'not assigned' : $_REQUEST['allroads_post1'];
    if (get_option('allroads_post1') !== false) {
        update_option('allroads_post1', $new_value1);
    } else {
        $deprecated = null;
        $autoload = 'no';
        add_option('allroads_post1', $new_value1, $deprecated, $autoload);
    }

    $new_value2 = ($_REQUEST['allroads_post2'] == "") ? 'not assigned' : $_REQUEST['allroads_post2'];
    if (get_option('allroads_post2') !== false) {
        update_option('allroads_post2', $new_value2);
    } else {
        $deprecated = null;
        $autoload = 'no';
        add_option('allroads_post2', $new_value2, $deprecated, $autoload);
    }
     
    $new_value3 = ($_REQUEST['allroads_post3'] == "") ? 'not assigned' : $_REQUEST['allroads_post3'];
    if (get_option('allroads_post3') !== false) {
        update_option('allroads_post3', $new_value3);
    } else {
        $deprecated = null;
        $autoload = 'no';
        add_option('allroads_post3', $new_value3, $deprecated, $autoload);
    }    
    $new_value4 = ($_REQUEST['allroads_post4'] == "") ? 'not assigned' : $_REQUEST['allroads_post4'];
    if (get_option('allroads_post4') !== false) {
        update_option('allroads_post4', $new_value4);
    } else {
        $deprecated = null;
        $autoload = 'no';
        add_option('allroads_post4', $new_value4, $deprecated, $autoload);
    }
    $new_value5 = ($_REQUEST['allroads_post5'] == "") ? 'not assigned' : $_REQUEST['allroads_post5'];
    if (get_option('allroads_post5') !== false) {
        update_option('allroads_post5', $new_value5);
    } else {
        $deprecated = null;
        $autoload = 'no';
        add_option('allroads_post5', $new_value5, $deprecated, $autoload);
    }
    $new_value6 = ($_REQUEST['allroads_post6'] == "") ? 'not assigned' : $_REQUEST['allroads_post6'];
    if (get_option('allroads_post6') !== false) {
        update_option('allroads_post6', $new_value6);
    } else {
        $deprecated = null;
        $autoload = 'no';
        add_option('allroads_post6', $new_value6, $deprecated, $autoload);
    }
    $new_value7 = ($_REQUEST['allroads_post7'] == "") ? 'not assigned' : $_REQUEST['allroads_post7'];
    if (get_option('allroads_post7') !== false) {
        update_option('allroads_post7', $new_value7);
    } else {
        $deprecated = null;
        $autoload = 'no';
        add_option('allroads_post7', $new_value7, $deprecated, $autoload);
    }
    $new_value8 = ($_REQUEST['allroads_post8'] == "") ? 'not assigned' : $_REQUEST['allroads_post8'];
    if (get_option('allroads_post8') !== false) {
        update_option('allroads_post8', $new_value8);
    } else {
        $deprecated = null;
        $autoload = 'no';
        add_option('allroads_post8', $new_value8, $deprecated, $autoload);
    }
    $new_value9 = ($_REQUEST['allroads_post9'] == "") ? 'not assigned' : $_REQUEST['allroads_post9'];
    if (get_option('allroads_post9') !== false) {
        update_option('allroads_post9', $new_value9);
    } else {
        $deprecated = null;
        $autoload = 'no';
        add_option('allroads_post9', $new_value9, $deprecated, $autoload);
    }
    $new_value10 = ($_REQUEST['allroads_post10'] == "") ? 'not assigned' : $_REQUEST['allroads_post10'];
    if (get_option('allroads_post10') !== false) {
        update_option('allroads_post10', $new_value10);
    } else {
        $deprecated = null;
        $autoload = 'no';
        add_option('allroads_post10', $new_value10, $deprecated, $autoload);
    }    
    $new_value11 = ($_REQUEST['allroads_post11'] == "") ? 'not assigned' : $_REQUEST['allroads_post11'];
    if (get_option('allroads_post11') !== false) {
        update_option('allroads_post11', $new_value11);
    } else {
        $deprecated = null;
        $autoload = 'no';
        add_option('allroads_post11', $new_value11, $deprecated, $autoload);
    }    
    $new_value12 = ($_REQUEST['allroads_post12'] == "") ? 'not assigned' : $_REQUEST['allroads_post12'];
    if (get_option('allroads_post12') !== false) {
        update_option('allroads_post12', $new_value12);
    } else {
        $deprecated = null;
        $autoload = 'no';
        add_option('allroads_post12', $new_value12, $deprecated, $autoload);
    }
}

// create the shortcode
add_shortcode('allroads-more','get_more_posts');
function get_more_posts($atts){
    extract(shortcode_atts(array(
        'id' => '1'
    ), $atts));


    $args = array(
        'numberposts' => 14,
        'post_type' => 'post',
        'post_status' => 'publish',
    );
    $posts = get_posts($args); ?>

    <div id="loader" class="center">
        <img src="/wp-content/uploads/loading.gif"/>
    </div>
    <div class="allroads-more-articles">
        <div class="allroads-homepage left uk-width-1-1 uk-width-medium-1-3">
        <?php 
        foreach ($posts as $post) { ?>
            
                <div class=" homepage-post">
                    <a href="<?php echo get_permalink($post->ID); ?>">
                        <?php echo get_the_post_thumbnail($post->ID,'small'); ?>
                    </a>
                    <h2 class='overlay'>
                        <a href="<?php echo get_permalink($post->ID); ?>">
                            <?php echo get_the_title($post->ID); ?>
                        </a>
                    </h2>    
                </div>
            
        <?php } ?>
        </div>

        <?php
        $args = array(
            'numberposts' => 14,
            'post_type' => 'post',
            'post_status' => 'publish',
            'offset' => 14        
        );
        $posts = get_posts($args); ?>

        <div class="allroads-homepage left uk-width-1-1 uk-width-medium-1-3">
        <?php 
        foreach ($posts as $post) { ?>
            
                <div class=" homepage-post">
                    <a href="<?php echo get_permalink($post->ID); ?>">
                        <?php echo get_the_post_thumbnail($post->ID,'small'); ?>
                    </a>
                    <h2 class='overlay'>
                        <a href="<?php echo get_permalink($post->ID); ?>">
                            <?php echo get_the_title($post->ID); ?>
                        </a>
                    </h2>    
                </div>
            
        <?php } ?>
        </div>

        <?php
        $args = array(
            'numberposts' => 16,
            'post_type' => 'post',
            'post_status' => 'publish',
            'offset' => 28
        );
        $posts = get_posts($args); ?>

        <div class="allroads-homepage left uk-width-1-1 uk-width-medium-1-3">
        <?php 
        foreach ($posts as $post) { ?>
            
                <div class=" homepage-post">
                    <a href="<?php echo get_permalink($post->ID); ?>">
                        <?php echo get_the_post_thumbnail($post->ID,'small'); ?>
                    </a>
                    <h2 class='overlay'>
                        <a href="<?php echo get_permalink($post->ID); ?>">
                            <?php echo get_the_title($post->ID); ?>
                        </a>
                    </h2>    
                </div>
            
        <?php } ?>
        </div>        
    </div>


<?php

function get_related_articles(){


    return 1;
}

}
