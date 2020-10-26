<!-- Start header_area -->
<header class="header_area header_v1 transparent_header">
	<div class="container">
		<div class="site_menu">
			<div class="row align-items-center">
				<div class="col-lg-2">
					<div class="brand">
						<a href="/" class="logo">
							<img src="<?= Yii::getAlias('@web'); ?>/images/bisaurios-logo-300.png" class="img-fluid" alt="">
						</a>
					</div>
				</div>
				<div class="col-lg-10">
					<div class="primary_menu" id="menu">
						<nav class="main_menu">
							<ul>
								<?php echo $this->render('_header_menu'); ?>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="mobile_wrapper">
			<div class="mobile_header">
				<div class="row align-items-center">
					<div class="col-6">
						<div class="brand_logo">
							<a href="/"><img src="<?= Yii::getAlias('@web'); ?>/images/bisaurios-logo-300.png" class="img-fluid" alt=""></a>
						</div>
					</div>
					<div class="col-6">
						<div class="menu_button">
							<div class="menu_icon">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="sidenav_menu">
				<div class="close_icon">
					<a href="#" class="close_btn"><i class="fas fa-times"></i></a>
				</div>
				<ul class="sidebar-menu">
					<?php echo $this->render('_header_menu'); ?>
				</ul>
			</div>
		</div>
	</div>
</header><!-- End header_area -->