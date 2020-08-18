<?php
/**
 * Theme novo - Settings file
 *
 * @package    theme_novo
 * @author     Kelson C. Medeiros <kelsoncm@gmail.com>
 * @license    MIT https://opensource.org/licenses/MIT
 */

defined("MOODLE_INTERNAL") || die();

$boost_path = dirname(__DIR__) . "/boost"; 
require_once("$boost_path/lib.php");
require_once(__DIR__ . "/lib.php");

$THEME->layouts = [
    // Most backwards compatible layout without the blocks - this is the layout used by default.
    "base" => [
        "file" => "columns2.php",
        "regions" => [],
    ],
    // Standard layout with blocks, this is recommended for most pages with general information.
    "standard" => [
        'theme' => 'boost',
        "file" => "columns2.php",
        "regions" => ["side-pre"],
        "defaultregion" => "side-pre",
    ],
    // Main course page.
    "course" => [
        'theme' => 'boost',
        "file" => "columns2.php",
        "regions" => ["side-pre"],
        "defaultregion" => "side-pre",
        "options" => ["langmenu" => true],
    ],
    "coursecategory" => [
        'theme' => 'boost',
        "file" => "columns2.php",
        "regions" => ["side-pre"],
        "defaultregion" => "side-pre",
    ],
    // Part of course, typical for modules - default page layout if $cm specified in require_login().
    "incourse" => [
        'theme' => 'boost',
        "file" => "columns2.php",
        "regions" => ["side-pre"],
        "defaultregion" => "side-pre",
    ],
    // The site home page.
    "frontpage" => [
        'theme' => 'boost',
        "file" => "columns2.php",
        "regions" => ["side-pre"],
        "defaultregion" => "side-pre",
        "options" => ["nonavbar" => true],
    ],
    // Server administration scripts.
    "admin" => [
        'theme' => 'boost',
        "file" => "columns2.php",
        "regions" => ["side-pre"],
        "defaultregion" => "side-pre",
    ],
    // My dashboard page.
    "mydashboard" => [
        'theme' => 'boost',
        "file" => "columns2.php",
        "regions" => ["side-pre"],
        "defaultregion" => "side-pre",
        "options" => ["nonavbar" => true, "langmenu" => true, "nocontextheader" => true],
    ],
    // My public page.
    "mypublic" => [
        'theme' => 'boost',
        "file" => "columns2.php",
        "regions" => ["side-pre"],
        "defaultregion" => "side-pre",
    ],
    "login" => [
        'theme' => 'boost',
        "file" => "login.php",
        "regions" => [],
        "options" => ["langmenu" => true],
    ],

    // Pages that appear in pop-up windows - no navigation, no blocks, no header.
    "popup" => [
        'theme' => 'boost',
        "file" => "columns1.php",
        "regions" => [],
        "options" => ["nofooter" => true, "nonavbar" => true],
    ],
    // No blocks and minimal footer - used for legacy frame layouts only!
    "frametop" => [
        'theme' => 'boost',
        "file" => "columns1.php",
        "regions" => [],
        "options" => ["nofooter" => true, "nocoursefooter" => true],
    ],
    // Embeded pages, like iframe/object embeded in moodleform - it needs as much space as possible.
    "embedded" => [
        'theme' => 'boost',
        "file" => "embedded.php",
        "regions" => []
    ],
    // Used during upgrade and install, and for the "This site is undergoing maintenance" message.
    // This must not have any blocks, links, or API calls that would lead to database or cache interaction.
    // Please be extremely careful if you are modifying this layout.
    "maintenance" => [
        'theme' => 'boost',
        "file" => "maintenance.php",
        "regions" => [],
    ],
    // Should display the content and basic headers only.
    "print" => [
        'theme' => 'boost',
        "file" => "columns1.php",
        "regions" => [],
        "options" => ["nofooter" => true, "nonavbar" => false],
    ],
    // The pagelayout used when a redirection is occuring.
    "redirect" => [
        'theme' => 'boost',
        "file" => "embedded.php",
        "regions" => [],
    ],
    // The pagelayout used for reports.
    "report" => [
        'theme' => 'boost',
        "file" => "columns2.php",
        "regions" => ["side-pre"],
        "defaultregion" => "side-pre",
    ],
    // The pagelayout used for safebrowser and securewindow.
    "secure" => [
        'theme' => 'boost',
        "file" => "secure.php",
        "regions" => ["side-pre"],
        "defaultregion" => "side-pre"
    ]
];

$THEME->name = "novo";
$THEME->sheets = [];
$THEME->editor_sheets = [];
$THEME->editor_scss = ["editor"];
$THEME->usefallback = true;
$THEME->scss = function($theme) {return theme_boost_get_main_scss_content($theme);};
$THEME->parents = [];
$THEME->enable_dock = false;
$THEME->csstreepostprocessor = "theme_boost_css_tree_post_processor";
$THEME->extrascsscallback = "theme_boost_get_extra_scss";
$THEME->prescsscallback = "theme_boost_get_pre_scss";
$THEME->precompiledcsscallback = "theme_boost_get_precompiled_css";
$THEME->yuicssmodules = [];
$THEME->rendererfactory = "theme_overridden_renderer_factory";
$THEME->requiredblocks = "";
$THEME->addblockposition = BLOCK_ADDBLOCK_POSITION_FLATNAV;
$THEME->iconsystem = \core\output\icon_system::FONTAWESOME;
