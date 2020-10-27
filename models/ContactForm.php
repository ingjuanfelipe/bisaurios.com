<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\Contacto;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
	public $name;
	public $empresa;
	public $email;
	public $celular;
	public $subject = 'Nuevo Contacto bisaurios.com';
	public $body;
	public $verifyCode;


	/**
	 * @return array the validation rules.
	 */
	public function rules()
	{
		return [
			// name, email, subject and body are required
			[['name','empresa','email','celular','body'], 'required'],
			// email has to be a valid email address
			['email', 'email'],
			// verifyCode needs to be entered correctly
			//['verifyCode', 'captcha'],
		];
	}

	/**
	 * @return array customized attribute labels
	 */
	public function attributeLabels()
	{
		return [
			'name' => 'Nombre',
			'empresa' => 'Empresa',
			'email' => 'Email',
			'celular' => 'Celular',
			'body' => 'Mensaje',
			'verifyCode' => 'Verification Code',
		];
	}

	/**
	 * Sends an email to the specified email address using the information collected by this model.
	 * @param string $email the target email address
	 * @return bool whether the model passes validation
	 */
	public function contact($email)
	{
		if ($this->validate()) {
			$contacto = new Contacto;
			$contacto->empresa = $this->empresa;
			$contacto->name = $this->name;
			$contacto->email = $this->email;
			$contacto->celular = $this->celular;
			$contacto->body = $this->body;
			if ($contacto->save()) {
				Yii::$app->mailer->compose()
					->setTo($email)
					->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
					->setReplyTo([$this->email => $this->name])
					->setSubject($this->subject)
					->setTextBody($this->body)
					->send();
				return true;
			}else
				Yii::$app->session->setFlash('error', 'No se pudo enviar su mensaje');
		}else
			Yii::$app->session->setFlash('error', 'Corrija los errores.');
		return false;
	}
}
