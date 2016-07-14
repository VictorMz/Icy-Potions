<?php

/**
 
 */
?>
    <div class="container-fluid main-content">
		
		<div class="container">
		
		    <div class="row introduction">
			    <?php if(count($node->field_image_section) > 0):?>
		        <div class="col-sm-6 image-section">
					<img src="<?php print icyPotions_file_directory_path().'/'.render($node->field_image_section['und'][0]['filename']); ?>" class="img-responsive">
				</div>
				<?php endif; ?>
				
			    <div class="col-sm-6">
					<div class="row title-section">
					<?php 
					if(count($node->field_image_title) > 0){?>
						<img src="<?php print icyPotions_file_directory_path().'/'.render($node->field_image_title['und'][0]['filename']); ?>" class="img-responsive">			
					<?php
					}else{
						print '<h1>'.render($node->title).'</h1>';
					}
					?>
					</div>
					<?php if(count($node->field_introduction_text) > 0):?>
					<div class="row introduction-section">
						<?php print render($node->field_introduction_text['und'][0]['value']);?>
					</div>
					<?php endif; ?>
				</div>
			</div>
			
			<?php if(count($node->field_data_information) > 0):?>
			<div class="row information">
			    <div class="container">
					<?php foreach ($node->field_data_information['und'] as $i => $value): ?>
							<?php print render($node->field_data_information['und'][$i]['safe_value']);	?>
					<?php endforeach; ?>
				</div>
			</div>
			<?php endif; ?>
			
		</div>
		
	</div>