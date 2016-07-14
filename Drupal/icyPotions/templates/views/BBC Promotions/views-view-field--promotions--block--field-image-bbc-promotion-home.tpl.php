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

if(count($row->field_field_image_bbc_promotion_home) > 0):
	$image = iClinica_file_directory_path()."/".$row->field_field_image_bbc_promotion_home[0]['raw']['filename'];
endif;
if(count($row->field_field_link_bbc_promotions) > 0){
	$url = $row->field_field_link_bbc_promotions[0]['raw']['value'];
}else{
	$url = iClinica_get_link_content($row);
}
$button =  $row->field_field_text_promotions[0]['raw']['value'];

//kpr($row);
?>
    <div class="col-sm-6 col-md-4">
		<div class="border-shadow">
		    <?php if(count($row->field_field_text_bbc_promotion_slogan) > 0): ?>
		    <div class="caption">
				<?php print $row->field_field_text_bbc_promotion_slogan[0]['raw']['value']; ?>
			</div>
			<?php endif; ?>
			<img src="<?php print $image; ?>" class="img-responsive">
			<div class="col-xs-12">
				<a href="<?php print $url; ?>">
					<button type="button" class="btn btn-primary"><?php print $button; ?></button>
				</a>
			</div>
		</div>
	</div>