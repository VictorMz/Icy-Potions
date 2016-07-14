<div class="col-sm-2 logo">
						<img src="<?php  print $logo ?>" class="img-responsive">
					</div>
					<div class="col-sm-10">
						<nav class="navbar navbar-default">
							<div class="container-fluid">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Menu</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									
								</div>
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<?php if (!empty($page['main_menu'])): ?>
										<?php print render($page['main_menu']); ?>										
									<?php endif; ?>
								</div>
							</div>
						</nav>
					</div>