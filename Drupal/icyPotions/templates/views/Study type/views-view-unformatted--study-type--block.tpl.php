<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="card">
<?php if (!empty($title)): ?>
  <h2><?php print $title; ?></h2>
<?php endif; ?>
	<div class="row row-study">
		<?php foreach ($rows as $id => $row): ?>
			<?php print $row; ?>
		<?php endforeach; ?>
	</div>
</div>