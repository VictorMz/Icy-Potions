<?php

/**
 
 */
?>

    <div class="container-fluid main-content">
			
			<div class="container">
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
					<div class="col-sm-6 col-sm-offset-4 col-md-4 col-md-offset-4">
						<?php print render($node->field_introduction_text['und'][0]['value']);?>
					</div>
				</div>
				<?php endif; ?>
				
				<div class="row information">
					<?php if(count($node->field_data_information) > 0):?>
					<div class="col-sm-5 col-sm-offset-1 data-info">
						<?php 
							print render($node->field_data_information['und'][0]['safe_value']);					
						?>
					</div>
					<?php endif; ?>
					<div class="col-sm-5 contact">
							<h2>Manda tu <strong>Mensaje</strong></h2>
							<div class="container-fluid">
								<div class="form-area"> 								
										<?php print render($page['view-result']); ?>									
								</div>							
							</div>
					</div>
					
				</div>
				
			</div>
			
	</div>