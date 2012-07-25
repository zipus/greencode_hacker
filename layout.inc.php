<?php
/**
 * general file configuration style
 * more specific changes go to css folder
 */

/**
 * navi frame
 */
// navi frame width
$GLOBALS['cfg']['NaviWidth']                = 200;

// foreground (text) color for the navi frame
$GLOBALS['cfg']['NaviColor']                = '#00ff00';

// background for the navi frame
$GLOBALS['cfg']['NaviBackground']           = '#000000';

// foreground (text) color of the pointer in navi frame
$GLOBALS['cfg']['NaviPointerColor']         = '#000000';
// background of the pointer in navi frame
$GLOBALS['cfg']['NaviPointerBackground']    = '#00ff00';

/**
 * main frame
 */
// foreground (text) color for the main frame
$GLOBALS['cfg']['MainColor']                = '#00ff00';

// background for the main frame
$GLOBALS['cfg']['MainBackground']           = '#000000';
// for a solid vertical line, uncomment this:
//$GLOBALS['cfg']['MainBackground']       = '#F5F5F5 url(../' . $_SESSION['PMA_Theme']->getImgPath() . 'vertical_line.png) repeat-y';

// foreground (text) color of the pointer in browse mode
$GLOBALS['cfg']['BrowsePointerColor']       = '#000000';

// background of the pointer in browse mode
$GLOBALS['cfg']['BrowsePointerBackground']  = '#00FF00';

// foreground (text) color of the marker (visually marks row by clicking on it) in browse mode
$GLOBALS['cfg']['BrowseMarkerColor']        = '#000000';

// background of the marker (visually marks row by clicking on it) in browse mode
$GLOBALS['cfg']['BrowseMarkerBackground']   = '#00FF00';

/**
 * fonts
 */
/**
 * the font family as a valid css font family value,
 * if not set the browser default will be used
 * (depending on browser, DTD and system settings)
 */
$GLOBALS['cfg']['FontFamily']           = 'Consolas';
/**
 * fixed width font family, used in textarea
 */
$GLOBALS['cfg']['FontFamilyFixed']      = 'Consolas';

/**
 * tables
 */
// border
$GLOBALS['cfg']['Border']               = 0;
// table header and footer color
$GLOBALS['cfg']['ThBackground']         = '#31322C';
// table header and footer background
$GLOBALS['cfg']['ThColor']              = '#00ff00';
// table data row background
$GLOBALS['cfg']['BgOne']                = '#000000';
// table data row background, alternate
$GLOBALS['cfg']['BgTwo']                = '#181A15';
//
$GLOBALS['cfg']['BorderTopMenu']        = '#00ff00';

/**
 * query window
 */
// Width of Query window
$GLOBALS['cfg']['QueryWindowWidth']     = 600;
// Height of Query window
$GLOBALS['cfg']['QueryWindowHeight']    = 400;

/**
 * SQL Parser Settings
 * Syntax colouring data
 */
$GLOBALS['cfg']['SQP']['fmtColor']      = array(
    'comment'            => '#00ff00',
    'comment_mysql'      => '',
    'comment_ansi'       => '',
    'comment_c'          => '',
    'digit'              => '',
    'digit_hex'          => 'teal',
    'digit_integer'      => 'teal',
    'digit_float'        => 'aqua',
    'punct'              => 'fuchsia',
    'alpha'              => '',
    'alpha_columnType'   => '#FF9900',
    'alpha_columnAttrib' => '#0000FF',
    'alpha_reservedWord' => '#990099',
    'alpha_functionName' => '#FF0000',
    'alpha_identifier'   => 'black',
    'alpha_charset'      => '#6495ed',
    'alpha_variable'     => '#800000',
    'quote'              => '#008000',
    'quote_double'       => '',
    'quote_single'       => '',
    'quote_backtick'     => ''
);
?>
