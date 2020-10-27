<?php
use yii\helpers\Html;
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Nuevo Contacto</title>
		<meta http-equiv="Content-Type" content="text/html;" charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<!--[if !mso]>
			<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<![endif]-->
		<style type="text/css">
			/* CLIENT-SPECIFIC STYLES */
			#outlook a {
				padding: 0;
			}

			.ReadMsgBody {
				width: 100%;
			}

			.ExternalClass {
				width: 100%;
			}

			.ExternalClass,
			.ExternalClass p,
			.ExternalClass span,
			.ExternalClass font,
			.ExternalClass td,
			.ExternalClass div,
			.ExternalClass * {
				line-height: 100%;
			}

			body,
			table,
			td,
			a {
				-webkit-text-size-adjust: 100%;
				-ms-text-size-adjust: 100%;
			}

			table,
			td {
				mso-table-lspace: 0pt;
				mso-table-rspace: 0pt;
			}

			img {
				-ms-interpolation-mode: bicubic;
			}

			/* RESET STYLES */
			body {
				height: 100% !important;
				margin: 0 !important;
				padding: 0 !important;
				width: 100% !important;
			}

			img {
				border: 0;
				height: auto;
				line-height: 100%;
				outline: none;
				text-decoration: none;
			}

			table {
				border-collapse: collapse !important;
			}
			.table {
				border-collapse: collapse !important;
				border: 1px solid #dee2e6;
			}
			.table tr td, .table tr th {
				padding: 12px!important;
				border-color: #e0e0e0!important;
			}
			.table tr:nth-of-type(odd) {
				background-color: rgba(0,0,0,.05);
			}



			/* Remove margin on email wrapper in Android 4.4 KitKat */
			/* See more at: https://blog.jmwhite.co.uk/2015/09/19/revealing-why-emails-appear-off-centre-in-android-4-4-kitkat/ */
			div[style*="margin: 16px 0"] {
				margin: 0 !important;
				font-size: 100% !important;
			}

			/* Remove ios blue links */
			a[x-apple-data-detectors] {
				color: inherit !important;
				text-decoration: none !important;
				font-size: inherit !important;
				font-family: inherit !important;
				font-weight: inherit !important;
				line-height: inherit !important;
			}

			/* Outline styles */
			@media only screen and (max-width: 599px) {
				.content-table {
					width: 100% !important;
				}

				img[class="img-max"] {
					width: 100% !important;
					height: auto !important;
				}

				table[class="mobile-button-wrap"] {
					margin: 0 auto;
					width: 100% !important;
				}

				a[class="mobile-button"] {
					width: 80% !important;
					padding: 8px !important;
					border: 0 !important;
				}

				.mobile-align-center {
					text-align: center !important;
					margin-right: auto;
					margin-left: auto;
				}
			}
		</style>
	</head>
	<body style="margin: 0 auto !important; padding: 0 !important;background: #EEE;">
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tr>
				<td>
					<table class="content-table" border="0" cellpadding="0" cellspacing="0" style="width:640px;margin: 0 auto;background: #FFF;border:1px solid #CCC;margin-top: 20px;">
						<tr>
							<td valign="top">
								<img style="display: block;max-width:300px;max-height:100px;padding: 10px;" src="http://bisaurios.com/images/bisaurios-logo-300.png" border="0">
							</td>
						</tr>
						<tr>
							<td style="padding: 0 16px 0 16px;" valign="top">
								<!-- content -->
								<?= $content ?>
								<!-- end content -->
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>

		<!-- footer full centre -->
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tr>
				<td style="padding: 20px 0 0 0;" align="center">
					<table border="0" cellpadding="0" cellspacing="0" width="100%">
						<tr>
							<td bgcolor="#546E7A" align="center">
								<table class="content-table" align="center" border="0" cellpadding="0" cellspacing="0" width="600">
									<tr>
										<td style="padding: 16px 16px 16px 16px;" align="center" valign="top">
											<!-- content -->
											<table border="0" cellpadding="0" cellspacing="0" width="100%">
												<tr>
													<td style="color: #90A4AE; font-family: 'Roboto', Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 21px;" align="center"> Copyright © <a style="color: #CFD8DC; text-decoration: none;" href="#">Bisaurios S.A.S. <?= date('Y'); ?></a>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<!-- /footer full centre -->
	</body>
</html>