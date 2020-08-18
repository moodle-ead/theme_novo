<?php
/**
 * Theme novo - Settings file
 *
 * @package    theme_novo
 * @author     Kelson C. Medeiros <kelsoncm@gmail.com>
 * @license    MIT https://opensource.org/licenses/MIT
 */

defined('MOODLE_INTERNAL') || die();
require_once __DIR__ . '/lib.php';

if ($ADMIN->fulltree) {
    // $theme_name = "theme_novo";

    // // Create general tab.
    // $page = new admin_settingpage("{$theme_name}_general", get_string('generalsettings', $theme_name));

    // // Add settings
    // $page->add(new admin_setting_heading("$theme_name/favicon", get_string('favicon', $theme_name), null));

    // // Create settings page with tabs and add tab to settings page.
    // $settings = new theme_boost_admin_settingspage_tabs('themesettingnovo', get_string('configtitle', $theme_name));
    // $settings->add($page);
}
