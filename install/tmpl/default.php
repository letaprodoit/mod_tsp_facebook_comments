<?php
/*
 * TSP Facebook Comments Joomla! module
 *
 * @package		TSP Facebook Comments Joomla! module
 * @filename	default.php
 * @version		1.0.0
 * @author		Sharron Denice, The Software People, LLC on 2013/02/09
 * @copyright	Copyright © 2013 The Software People, LLC (www.thesoftwarepeople.com). All rights reserved
 * @license		GNU Public License v3.0 (http://www.gnu.org/licenses/gpl-3.0.html)
 * @brief		default template
 * 
 */

defined('_JEXEC') or die('Restricted access'); // no direct access 
?>

<div id="tsp_facebook_comments">
	<p>&nbsp;</p>
	<?php if (!empty($section_label)): ?>
		<h3><?php echo $section_label; ?></h3>
	<?php endif; ?>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=<?php echo $data_app_id; ?>";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
	<div class="fb-like" data-href="<?php echo $data_href; ?>" data-send="<?php echo $data_send; ?>" data-width="<?php echo $data_width; ?>" data-show-faces="<?php echo $data_show_faces; ?>" data-action="<?php echo $data_action; ?>"></div>
	<div class="fb-comments" data-href="<?php echo $data_href; ?>" data-width="<?php echo $data_width; ?>" data-num-posts="<?php echo $data_num_posts; ?>" data-colorscheme="<?php echo $data_colorscheme; ?>" data-orderby="<?php echo $data_orderby; ?>" data-mobile="<?php echo $data_mobile; ?>"></div>
</div>