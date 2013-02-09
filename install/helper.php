<?php
/*
 * TSP Facebook Comments Joomla! module
 *
 * @package		TSP Facebook Comments Joomla! module
 * @filename	helper.php
 * @version		1.0.0
 * @author		Sharron Denice, The Software People, LLC on 2013/02/09
 * @copyright	Copyright © 2013 The Software People, LLC (www.thesoftwarepeople.com). All rights reserved
 * @license		APACHE v2.0 (http://www.apache.org/licenses/LICENSE-2.0)
 * @brief		helper class
 * 
 */

defined('_JEXEC') or die('Direct Access to this location is not allowed.');
 
class ModTSPFacebookCommentsHelper
{
    /**
     * Returns the current url
    */
    public static function getCurrentURL()
    {
    	$juri = JURI::getInstance();
     	
		$current_url = $juri->current();
		
        return $current_url;
    } //end getCurrentURL
 
} //end ModTSPFacebookCommentsHelper
?>