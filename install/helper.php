<?php
/*
 * TSP Facebook Comments Joomla! module
 *
 * @package		TSP Facebook Comments Joomla! module.
 * @version		1.0.0
 * @author		Sharron Denice, The Software People, LLC
 * @copyright	Copyright © 2013 www.thesoftwarepeople.com. All rights reserved
 * @license		APACHE v2.0 (http://www.apache.org/licenses/LICENSE-2.0)
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
    } //end getURL
 
} //end ModTSPFacebookCommentsHelper
?>