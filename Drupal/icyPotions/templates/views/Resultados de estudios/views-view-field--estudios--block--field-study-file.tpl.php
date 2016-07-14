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
if(count($row->node_title) > 0):
	$name_study = $row->node_title;
endif;
if(count($row->field_field_study_file) > 0):
	$file = iClinica_file_directory_path()."/".$row->field_field_study_file[0]['raw']['filename'];
	$description = $row->field_field_study_file[0]['raw']['description'];
endif;
if(count($row->field_field_study_date ) > 0):
	$date_study = explode(" ", $row->field_field_study_date[0]['raw']['value']);
endif;
?>
    <div class="row row-result">
		<div class="col-sm-3">
			<p><span>Nombre: </span><?php print $name_study; ?></p>
		</div>
		<div class="col-sm-2">
			<p><span>Fecha: </span><?php print $date_study[0]; ?></p>
		</div>
		<div class="col-sm-4">
			<p><span>Descripci&oacute;n del Estudio: </span><?php print $description; ?></p>
		</div>
		<div class="col-sm-3">
			<p><span>Archivo: </span><a href="<?php print $file; ?>" target="_blank"><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a></p>
		</div>
	</div>