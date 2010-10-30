<?php
/**
 * Page icon override medium
 *
 * @package ElggPages
 */

//check to make sure this group forum has been activated
if ($vars['entity']->pages_enable != 'no') {
?>

<div id="group_pages_widget">
<h2><?php echo elgg_echo("pages:groupprofile"); ?></h2>
<?php

	$objects = elgg_list_entities(array('types' => 'object', 'subtypes' => 'page_top', 'container_guid' => elgg_get_page_owner_guid(), 'limit' => 5, 'full_view' => FALSE));

	if($objects)
		echo $objects;
	else
		echo "<div class=\"forum_latest\">" . elgg_echo("pages:nogroup") . "</div>";

?>
<br class="clearfloat" />
</div>

<?php
	}
