<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!-- All Meta -->
	
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="Implementamos Extranets para apoyar las estrategias corporativas basadas en el desarrollo modular de componentes a la medida de las necesidades de nuestros clientes.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- page title -->
	<title><?= $this->title ?></title>
	<!-- Favicon Icon -->
	<link rel="shortcut icon" href="<?= Yii::getAlias('@web'); ?>/deneb/assets/images/favicon.ico" type="image/png">
	<!-- All css -->
	<!--Bootstrap css-->
	<link rel="stylesheet" href="<?= Yii::getAlias('@web'); ?>/deneb/assets/css/bootstrap.min.css">
	<!-- Fontawesome css -->
	<link rel="stylesheet" href="<?= Yii::getAlias('@web'); ?>/deneb/assets/fonts/fontawesome/css/all.css">
	<!-- slick fader css -->
	<link rel="stylesheet" href="<?= Yii::getAlias('@web'); ?>/deneb/assets/css/slick.css">
	<link rel="stylesheet" href="<?= Yii::getAlias('@web'); ?>/deneb/assets/css/slick-theme.css">
	<!-- sidebar-menu -->
	<link rel="stylesheet" href="<?= Yii::getAlias('@web'); ?>/deneb/assets/css/sidebar-menu.css">
	<!--animate css-->
	<link rel="stylesheet" href="<?= Yii::getAlias('@web'); ?>/deneb/assets/css/animate.css">
	<!--style css-->
	<link rel="stylesheet" href="<?= Yii::getAlias('@web'); ?>/deneb/assets/css/style.css">

	<?php $this->registerCsrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>
<body>
	<?php $this->beginBody() ?>

	<!-- Preloader -->
	<div class="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
	</div>
	
	<?php echo $this->render('_header'); ?>

	<?= Alert::widget() ?>
	<?= $content ?>

	<?php echo $this->render('_footer'); ?>

	<!-- jquery  -->
	<script src="<?= Yii::getAlias('@web'); ?>/deneb/assets/js/vendor/jquery-1.12.4.min.js"></script>
	<!--modernizr js-->
	<script src="<?= Yii::getAlias('@web'); ?>/deneb/assets/js/vendor/modernizr-3.6.0.min.js"></script>
	<!-- Bootstrap js  -->
	<script src="<?= Yii::getAlias('@web'); ?>/deneb/assets/js/vendor/bootstrap.min.js"></script>
	<script src="<?= Yii::getAlias('@web'); ?>/deneb/assets/js/vendor/popper.min.js"></script>
	<!-- slick fader js  -->
	<script src="<?= Yii::getAlias('@web'); ?>/deneb/assets/js/vendor/slick.min.js"></script>
	<!-- isotope js  -->
	<script src="<?= Yii::getAlias('@web'); ?>/deneb/assets/js/vendor/isotope.min.js"></script>
	<!-- imageloaded js-->
	<script src="<?= Yii::getAlias('@web'); ?>/deneb/assets/js/vendor/imagesloaded.min.js"></script>
	<!--sidebar js-->
	<script src="<?= Yii::getAlias('@web'); ?>/deneb/assets/js/vendor/sidebar-menu.js"></script>
	<!--wow js-->
	<script src="<?= Yii::getAlias('@web'); ?>/deneb/assets/js/vendor/wow.min.js"></script>
	<!-- custom js  -->
	<script src="<?= Yii::getAlias('@web'); ?>/deneb/assets/js/custom.js"></script>

	<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
