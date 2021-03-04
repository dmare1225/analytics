<?php
/**
 * Plugin Name:  Analytics
 * Description:  Page analytics for UKI's main website that displays the top most visited pages.
 * Version:      1.0
 * Author:       RIM Team
 * Requires PHP: 7.0
 * License:      GNU General Public License v3 or later
 * License URI:  https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:  uki
 */

/**
 * ANALYTICS MENU
 * Adds analytics to the admin menu and calls the uki_analytics_page( ) to create the page when clicked on.
 */
function uki_analytics_menu( )
{
    add_menu_page("Analytics", "Analytics", "manage_options", "uki-analytics-page", "uki_analytics_page", "dashicons-chart-line", 30);
}
add_action("admin_menu", "uki_analytics_menu");

/**
 * ANALYTICS PAGE
 * Creates the analytics page.
 */
function uki_analytics_page( )
{
    require(plugin_dir_path(__FILE__) . "templates/analytics-page.php");
}