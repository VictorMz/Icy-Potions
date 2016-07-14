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

if(count($row->field_field_image_slider_home) > 0):
	$header = iClinica_file_directory_path()."/".$row->field_field_image_slider_home[0]['raw']['filename'];
endif;
if(count($row->field_field_url_img_slider_home) > 0):
	$url = $row->field_field_url_img_slider_home[0]['raw']['value'];
endif;
$caption =  $row->field_field_text_button_slider_home[0]['raw']['safe_value'];

//kpr($row);
?>
    <div class="item <?php ($id == 1) ? print 'active' : print ''; ?>">
		<img src="<?php print $header; ?>" class="img-responsive">
		<div class="carousel-caption">
			<a href="<?php print $url; ?>">
				<button class="btn"><?php print $caption; ?></button>
			</a>
		</div>
	</div>