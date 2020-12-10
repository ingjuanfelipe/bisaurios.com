<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Bisaurios.com';
?>

<!-- Start deneb_contact section -->
<section class="deneb_contact contact_v1" style="margin-top: 0;padding-bottom: 90px;">
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
                    Escribenos a <a href="mailto:gerente.comercial@bisaurios.com"><b>gerente.comercial@bisaurios.com</b></a>
                    <?php /*
                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                        <?= $form->errorSummary($model); ?>
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
                    */ ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End deneb_contact section -->
