<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Bisaurios.com';
?>

<?php echo $this->render('_banners'); ?>

<!-- Start deneb_service section -->
<section class="deneb_service service_v1">
	<div class="shape_v2">
		<img src="<?= Yii::getAlias('@web'); ?>/deneb/assets/images/shape/shape_7.png" class="shape_7" alt="">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section_title text-center">
					<h2>Nuestro Servicio</h2>
					<p>Apoyamos su estratégia corporativa con soluciones personalizadas.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="grid_item wow fadeInUp">
					<div class="icon">
						<img src="<?= Yii::getAlias('@web'); ?>/deneb/assets/images/icon_1.png" class="img-fluid" alt="">
					</div>
					<div class="info">
						<h4>Tecnología</h4>
						<p>Nuestra promesa de valor incluye herramientas tecnológicas de alto impacto que buscan resultados medibles para su compañía.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="grid_item wow fadeInUp"  data-wow-delay=".1s">
					<div class="icon">
						<img src="<?= Yii::getAlias('@web'); ?>/deneb/assets/images/icon_2.png" class="img-fluid" alt="">
					</div>
					<div class="info">
						<h4><a href="#">Flexibilidad</a></h4>
						<p>Nuestras soluciones son flexibles y personalizadas, ajustamos nuestro producto a las necesidades de nuestros clientes buscando el mayor impacto posible en el usuario final.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="grid_item wow fadeInUp" data-wow-delay=".2s">
					<div class="icon">
						<img src="<?= Yii::getAlias('@web'); ?>/deneb/assets/images/icon_3.png" class="img-fluid" alt="">
					</div>
					<div class="info">
						<h4><a href="#">Compromiso</a></h4>
						<p>Nuestro compromiso se ve reflejado en la calidad con la que hacemos las cosas. No somos un proveedor más, somos el aliado estratégico que necesita tu compañía.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- End deneb_service section -->
<!-- Start deneb_about section -->
<section class="deneb_about">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-5">
				<div class="deneb_img_box wow fadeInLeft">
					<img src="<?= Yii::getAlias('@web'); ?>/deneb/assets/images/porque/engranaje.jpg" class="img-fluid" alt="">
				</div>
			</div>
			<div class="col-lg-7">
				<div class="deneb_content_box wow fadeInRight">
					<h2>¿Por qué confiar en nosotros?</h2>
					<p>
						Somos el engranaje perfecto que necesita tu compañía, dedicate al 100% de tu negocio que nosotros nos encargamos de las estratégias de apoyo.
					</p>
					<p>
						Nuestro equipo cuenta con más de 15 años de experiencia en el sector, conocimiento del mercado, contactos empresariales, cientos de proveedores y una fuerza tecnológica de alto impacto.
					</p>
					<p>
						Más que una relación corporativa, creamos un compromiso con cada uno de nuestros clientes, enfocandonos en el servicio y la calidad de nuestras soluciones. Esto nos ubica como la mejor alternativa para apoyar las estratégias corporativas de nuestros clientes, grantizando siempre la velocidad y calidad en nuestro servicio. 
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End deneb_about section -->
<!-- Start deneb_testimonial section -->

<!-- Start deneb_cta section -->
<section class="deneb_cta" style="padding-bottom: 90px;">
	<div class="container">
		<div class="cta_wrapper">
			<div class="row align-items-center">
				<div class="col-lg-7">
					<div class="cta_content">
						<h3>¿Tiene un proyecto en mente?</h3>
						<p>Contáctenos y le ayudaremos a hacerlo realidad con nuestra capacidad tecnológica y nuestro capital humano.</p>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="button_box">
						<a href="#" class="deneb_btn">Contáctenos</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End deneb_cta section -->

<!-- Start deneb_contact section -->
<section class="deneb_contact contact_v1" style="margin-top: 125px;padding-bottom: 90px;">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="deneb_img_box">
					<img src="<?= Yii::getAlias('@web'); ?>/deneb/assets/images/contacto/contacto.jpg" class="img-fluid" alt="">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="section_title">
					<h2>Contáctenos</h2>
					<p>Envíenos sus datos para contactarlo, conocer su proyecto y ponerlo en marcha.</p>
				</div>
				<div class="contact_form">
					<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
						<div class="row">
							<div class="col-lg-6">
								<div class="form_group">
									<?= $form->field($model, 'empresa'); //form_control ?>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form_group">
									<?= $form->field($model, 'name') ?>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form_group">
									<?= $form->field($model, 'email') ?>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form_group">
									<?= $form->field($model, 'celular') ?>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form_group">
									<?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="button_box">
									<button class="deneb_btn">Enviar</button>
								</div>
							</div>
						</div>
					<?php ActiveForm::end(); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End deneb_contact section -->
