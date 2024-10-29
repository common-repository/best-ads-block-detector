<?php







 /**



 * Plugin Name:       Best Ads Block Detector



 * Description:       Best Plugin to Detect Adblock Extensions.



 * Version:           1.0.2



 * Requires at least: 5.2



 * Requires PHP:      7.2



 * Author:            Code Prof



 * Author URI:        https://www.facebook.com/Code-Prof-110511874050372



 * License:           GPL v2 or later



 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html



 * Text Domain:       best-adsblock-detector



 */







/*



Best Ads Block Detector is free software: you can redistribute it and/or modify



it under the terms of the GNU General Public License as published by



the Free Software Foundation, either version 2 of the License, or



any later version.







Best Ads Block Detector is distributed in the hope that it will be useful,



but WITHOUT ANY WARRANTY; without even the implied warranty of



MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the



GNU General Public License for more details.







You should have received a copy of the GNU General Public License



along with Best Ads Block Detector.



*/







if ( ! defined( 'ABSPATH' ) ) exit(0);







if ( !class_exists( 'BestAdsBlockDetector' ) ) {







class BestAdsBlockDetector {







public $plugin_name;







function __construct() {



    $this->plugin_name = plugin_basename(__FILE__);



}







function init() {







    add_action( 'wp_enqueue_scripts',  [$this, 'enqueue'], 1);







    add_action( 'wp_head',  [$this, 'css'], 100);







    add_action( 'wp_footer',  [$this, 'js'], 100);







    add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );







    add_filter( "plugin_action_links_$this->plugin_name", array( $this, 'settings_link' ) );







}







function enqueue() {







    // enqueue all our scripts



    wp_enqueue_style( 'myPluginStyle', plugins_url( '/assets/css/style-dialog-admin.css', __FILE__ ) );



    wp_enqueue_script( 'myPluginScript', plugins_url( '/assets/js/main-dialog-container.js', __FILE__ ), false, false, true );







}







public function css( ){







    $header_part = plugin_dir_path(__FILE__) . 'includes/html elements/header.php';



    if( file_exists( $header_part ) ){







        ob_start();



        require_once $header_part;



        $content = ob_get_clean();



        echo apply_filters("frontend_css", $content);







    }



}







public function js(){







    $footer_part = plugin_dir_path(__FILE__) . 'includes/html elements/footer.php';











    if( file_exists( $footer_part ) ){







        ob_start();



        require_once $footer_part;



        $content = ob_get_clean();



        echo apply_filters("frontend_js", $content);







    }



}







function add_admin_pages() {



    add_menu_page( 'Best Ads Block Detector', 'Best Ads Block Detector', 'manage_options', 'Best_Ads_Block_Detector_Plugin', array($this, 'admin_require_files'), 'dashicons-store', 5 );



}







public function admin_require_files() {







    ob_start();







    require_once plugin_dir_path(__FILE__) . 'pages/admin.php';







}







function settings_link( $links ) {



    $settings_link = '<a href="admin.php?page=Best_Ads_Block_Detector_Plugin">Settings</a>';



    array_push( $links, $settings_link );



    return $links;



}











function activate() {











    // flush rewrite rules



    flush_rewrite_rules();



}







function deactivate() {



    // flush rewrite rules



    flush_rewrite_rules();



}







// end of class







}







if ( class_exists('BestAdsBlockDetector') ) {



    $BestAdsBlockDetector = new BestAdsBlockDetector();



    $BestAdsBlockDetector->init();



}











// activation



register_activation_hook(__FILE__, array( $BestAdsBlockDetector, 'activate' ) );







// deactivation



register_deactivation_hook(__FILE__, array( $BestAdsBlockDetector, 'deactivate' ) );







}