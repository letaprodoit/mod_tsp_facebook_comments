<?php
/*
 * TSP Facebook Comments Joomla! module
 *
 * @package		TSP Facebook Comments Joomla! module
 * @filename	mod_tsp_facebook_comments.php
 * @version		1.0.0
 * @author		Sharron Denice, The Software People, LLC on 2013/02/09
 * @copyright	Copyright © 2013 The Software People, LLC (www.thesoftwarepeople.com). All rights reserved
 * @license		APACHE v2.0 (http://www.apache.org/licenses/LICENSE-2.0)
 * @brief		module loader
 * 
 */

defined('_JEXEC') or die('Direct Access to this location is not allowed.');
 
// Step #1: include the helper file
require_once __DIR__ . '/helper.php';

// Step #2: get user settings
// Comment plugin settings
$data_num_posts = $params->get('data_num_posts');
$data_width = $params->get('data_width');
$data_colorscheme = $params->get('data_colorscheme');
$data_orderby = $params->get('data_orderby');
$data_mobile = $params->get('data_mobile');

// Like plugin settings
$data_send = $params->get('data_show_send');
$data_show_faces = $params->get('data_show_faces');
$data_action = $params->get('data_action');

// template settings
$section_label = $params->get('section_label');
 
// Step #3: get the current url
$data_href = ModTSPFacebookCommentsHelper::getCurrentURL();
 
// Step #4: include the template for display
require(JModuleHelper::getLayoutPath('mod_tsp_facebook_comments'));
?>