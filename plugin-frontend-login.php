<?php
/*
 * Plugin Name:       frontend login
 * Plugin URI:        https://github.com/phaetton
 * Description:       Formulario de login y registro para negocio en linea.
 * Version:           1.0
 * Requires at least: 5.8
 * Requires PHP:      7.4
 * Author:            Rafael Serrano Urtecho
 * Author URI:        https://github.com/phaetton
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

 function rfsu_test(){
    echo "<h1>titulo del plugin</h1>";
 }

 add_action("wp_head",'rfsu_test');

 require_once plugin_dir_path(__FILE__)."public/shortcode/form-registro.php";