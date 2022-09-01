<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once(dirname(__FILE__)."/../libs/phpmailer/src/Exception.php");
require_once(dirname(__FILE__)."/../libs/phpmailer/src/PHPMailer.php");
require_once(dirname(__FILE__)."/../libs/phpmailer/src/SMTP.php");

function enviaCorreo($nombre,$correo,$telefono,$maestria,$mensaje,$fecha,$hora){
	$mail = new PHPMailer(true);
	$mail->setLanguage('es', '../libs/phpmailer/language/');
	$mail->CharSet = 'utf-8';
	try{
		//Server settings
		$mail->SMTPOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
			)
		);
		$mail->isSMTP();
		$mail->Mailer = "smtp";
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587;
		$mail->Host = 'smtp.gmail.com';
		$mail->Username = 'no-responder@unag.edu.hn';
		$mail->Password = 'Webmaster5*';
		
		$mail->isHTML(true);
		switch ($maestria) {
			case 'Maestría en Ciencias Agroalimentarias':
				$mail->addAddress('coordinacionmca@unag.edu.hn', 'Coordinación MCA');
				$mail->addAddress('investigacion_posgrados@unag.edu.hn', 'Investigación Posgrados');
				break;
			case 'Maestría en Gestión de la Producción Animal Sostenible':
				$mail->addAddress('coordinacionmgpas@unag.edu.hn', 'Coordinación GPAS');
				$mail->addAddress('investigacion_posgrados@unag.edu.hn', 'Investigación Posgrados');
				break;
			case 'Maestría en Recursos Naturales y Producción Sostenible':
				$mail->addAddress('coordinacionmrnps@unag.edu.hn', 'Coordinación RNPS');
				$mail->addAddress('investigacion_posgrados@unag.edu.hn', 'Investigación Posgrados');
				break;
			case 'Máster en Agro 4.0':
				$mail->addAddress('coordinacionmagro4_0@unag.edu.hn', 'Coordinación Agro 4.0');
				$mail->addAddress('investigacion_posgrados@unag.edu.hn', 'Investigación Posgrados');
				break;
			case 'Máster en Biotecnología Agroalimentaria':
				$mail->addAddress('coordinacionmabioagro@unag.edu.hn', 'Coordinación BA');
				$mail->addAddress('investigacion_posgrados@unag.edu.hn', 'Investigación Posgrados');
				break;
			case 'Doctorado en Ciencias Agrarias':
				$mail->addAddress('doctoradociagro@unag.edu.hn', 'Coordinación DCA');
				break;
		}		
		// $mail->addAddress('marlopez@unag.edu.hn', 'Miguel López');
		
		$mail->setFrom('no-responder@unag.edu.hn', 'UNAG');
		$mail->Subject = 'Mensaje capturado desde el maestrias.unag.edu.hn';
		$mail->addCustomHeader("List-Unsubscribe",'<admin@unag.edu.hn>, <https://maestrias.unag.edu.hn/unsubscribe?email='.$correo.'>');
		
		$content = '
			<html lang="es">
				<table style="width: 100%; font-family: \'Lucida Grande\', \'Lucida Sans Unicode\', \'Lucida Sans\', \'DejaVu Sans\', Verdana, \'sans-serif\'; font-size: small; border-collapse: collapse; color: #455a64;">
					<tr>
						<td>
							<table style="width: 100%; max-width: 600px; margin: 0 auto; border-collapse: collapse;">
								<thead>
									<tr>
										<td style="background-color: #1BA333; padding: 24px; text-align: center;"><img src="https://dasdie.unag.edu.hn/wp-content/uploads/2021/08/logoUnag-B150.png" alt=""></td>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<td style="background-color: #e5e5e5; padding: 12px;">
											<p style="margin-bottom: 0; padding-bottom: 0"><strong>Importante:</strong> Ha recibido este correo como parte del proceso de captura de mensajes dejados por visitantes en maestrias.unag.edu.hn.</p>
										</td>
									</tr>
								</tfoot>
								<tbody>
									<tr>
										<td>
											<table style="width: 100%;">
												<tr>
													<td style="width: 60%; padding: 12px 12px 0 12px;">
														<p style="margin-top: 0; margin-bottom: 0;">A continuación le detallamos la información capturada:</p>
														<p style="margin-bottom: 0;">
															Nombre: '.$nombre.'<br>
															Correo: '.$correo.'<br>
															Teléfono: '.$telefono.'<br>
															Maestría: '.$maestria.'<br>
															Mensaje: '.$mensaje.'<br>
															Fecha: '.$fecha.'<br>
															Hora: '.$hora.'
														</p>
													</td>
												</tr>
												<tr>
													<td style="padding: 12px;">
														<p>
															Reciba los más cordiales saludos del equipo de SETIC / UNAG.
														</p>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
				</table>
			</html>
		';
		$mail->AltBody = '
			¡Hola '.$nombre.'!
			A continuación le detallamos la información capturada:
			Nombre: '.$nombre.'
			Correo: '.$correo.'			
			Teléfono: '.$telefono.'
			Maestría: '.$maestria.'
			Mensaje: '.$mensaje.'
			Fecha: '.$fecha.'
			Hora: '.$hora.'
			Reciba los más cordiales saludos del equipo de SETIC / UNAG.			
			Importante: Ha recibido este correo como parte del proceso de captura de mensajes dejados por visitantes en maestrias.unag.edu.hn.
		';
		
		$mail->MsgHTML($content);
		if(!$mail->Send()) {
			// return $mail->ErrorInfo;
			// echo "Mailer Error: " . $mail->ErrorInfo;
			return 'ERRROR';
		 } else {
			return 'OK';
		 }		
	}
	catch(Exception $e){
		return $mail->ErrorInfo;
	}
}