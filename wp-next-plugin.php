<?php

   /***
    * Plugin Name: Next-Keshab
    * Plugin Uri: google.com
    * Author: Keshab Pal
    * Author Uri: google.com.org 
    * Version: 1.2.3 
    * Description: This is simple Test Plugin using ajax and jquery
    * Tags: tag1,tag2, Ksolution pvt ltd
    * Lisence: GPL V2
    * Text Domain: akismet
    */

    define("NEXT_PLUGIN_DIR_PATH", plugin_dir_path(__FILE__));

    function next_menus_development(){
        add_menu_page("Next Plugin","Next Plugin","manage_options","wp-next-plugin","next_wp_list_call");
        add_submenu_page("wp-next-plugin","List Students","List Students","manage_options","wp-next-plugin","next_wp_list_call");
        add_submenu_page("wp-next-plugin","Add Student","Add Student","manage_options","wp-next-add","next_wp_add_call");


    }

    add_action("admin_menu","next_menus_development");

    function next_wp_list_call(){
        include_once NEXT_PLUGIN_DIR_PATH.'/views/list-student.php';
    }

    function next_wp_add_call(){
        include_once NEXT_PLUGIN_DIR_PATH.'/views/add-student.php';
    }

    ?>