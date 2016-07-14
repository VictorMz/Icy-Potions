<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */
?>
<?php

if(count($row->field_field_image_study_type) > 0):
	$image = iClinica_file_directory_path()."/".$row->field_field_image_study_type[0]['raw']['filename'];
endif;

$name_study = $row->node_title;
$url = iClinica_get_link_content($row);

?>
	
	<div class="col-xs-12 col-sm-3 col-md-2 info-study">
		<a href="<?php print $url; ?>">
			<button>
				<img src="<?php print $image; ?>">
				<p><?php print $name_study; ?></p>
			</button>
		</a>
	</div>
