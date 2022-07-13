<?php
	include './conexion.php';
	//Import PHPMailer classes into the global namespace
	//These must be at the top of your script, not inside a function
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	//Load Composer's autoloader
	require 'vendor/autoload.php';



	if ($_SERVER["REQUEST_METHOD"] == "POST") {


		$GLOBALS['asunto'] = "Registro realizado - Acueducto de El Espinal";  // asunto correo registro
		

		$GLOBALS['contenido'] = "Buen día.<br><br>Su registro ha sido realizado satisfactoriamente, a partir de ahora recibirá mensualmente su factura en su correo electrónico y/o físicamente en su domicilio, según la opción seleccionada.<br><br>Señor usuario recuerde que para mantenerse al día con la información de La Empresa de Acueducto, Alcantarillado y Aseo de El Espinal ESP puede visitar nuestra página: www.aaaespinal.com.co<br><br>Sigános en nuestras redes sociales:<br><br>Facebook: https://www.facebook.com/eaaaespinal<br><br>twitter: https://twitter.com/aaaespinal<br><br>Instagram: https://www.instagram.com/eaaaespinal";  // contenido correo registro


		$nombre = $_POST['nombre'];
		$identificacion = $_POST['identificacion'];
		$email = $_POST['email'];
		$telefono = $_POST['telefono'];
		$sector = $_POST['sector'];
		$barrio = $_POST['barrio'];
		$direccion = $_POST['direccion'];
		$codigo_usuario = $_POST['codigo_usuario'];
		$envio_factura = $_POST['envio_factura'];
		$solicitud = $_POST['solicitud'];
		$fecha_creacion = date("Y-m-d H:i:s");

		
		$stmt = $conexion->prepare("SELECT codigo_usuario FROM clientes WHERE codigo_usuario = ?");
		if ($stmt->execute([$codigo_usuario])){

			if ($stmt->fetch() == false){
				$insert = $conexion->prepare("INSERT INTO `clientes`(`nombre`, `identificacion`, `email`, `telefono`, `sector`, `barrio`, `direccion`, `codigo_usuario`, `envio_factura`, `solicitud`, `fecha_creacion`) VALUES (:nombre, :identificacion, :email, :telefono, :sector, :barrio, :direccion, :codigo_usuario, :envio_factura, :solicitud, :fecha_creacion)");
				if ($insert->execute(array(
					':nombre' => $nombre,
					':identificacion' => $identificacion,
					':email' => $email,
					':telefono' => $telefono,
					':sector' => $sector,
					':barrio' => $barrio,
					':direccion' => $direccion,
					':codigo_usuario' => $codigo_usuario,
					':envio_factura' => $envio_factura,
					':solicitud' => $solicitud,
					':fecha_creacion' => $fecha_creacion))) {

					// correo notificacion registro
					//Instantiation and passing `true` enables exceptions
					$mail = new PHPMailer(true);
					$mail->CharSet = 'UTF-8';
					$mail->Encoding = 'base64';
						//configuracion del correo
						try {
						    //Server settings
						    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
						    $mail->isSMTP();                                            //Send using SMTP
						    $mail->Host       = 'mail.aaaespinal.com.co';                     //Servidor SMTP del correo emisor
						    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
						    $mail->Username   = 'facturaseaaa@aaaespinal.com.co';                     //SMTP username (direc de correo) 
						    $mail->Password   = 'Facturas2021#';                               //SMTP password (contraseña)
						    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
						    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
						    //Recipients
						    $mail->setFrom('facturaseaaa@aaaespinal.com.co', 'EAAA del Espinal E.S.P');
						    $mail->addAddress(trim($email));    						//Add a recipient (correo receptor)
						    $mail->addReplyTo('no-reply@mycomp.com','no-reply');		// No reply
						    // $mail->addCC('cc@example.com');
						    // $mail->addBCC('bcc@example.com');
						    //contenido del mensaje
						    $mail->isHTML(true);                                  //Set email format to HTML
						    $mail->Subject = trim($GLOBALS['asunto']);
			    			$mail->Body    = trim($GLOBALS['contenido']);
			    			$mail->AltBody = trim($GLOBALS['contenido']);        // para receptores de correo non-html
						    $mail->send();
						} catch (Exception $e) {
						    $array = array(
								"status" => "Error",
								"msg" => "No se pudo registrar con éxito, error correo electronico"
							);
							echo json_encode($array);
						}
						$array = array(
							"status" => "Ok",
							"msg" => "Registro enviado con éxito"
						);
						echo json_encode($array);
				}else{
					$array = array(
						"status" => "Error",
						"msg" => "No se pudo registrar con éxito"
					);
					echo json_encode($array);
				}
			}else{
				$array = array(
					"status" => "Error",
					"msg" => "ERROR No se pudo registrar, el codigo de usuario ya se encuentra registrado",
					"validity" => "No se pudo registrar, el codigo de usuario ya se encuentra registrado"
				);
				echo json_encode($array);
			}
		}else{
			$array = array(
				"status" => "Error",
				"msg" => "No se pudo registrar con éxito"
			);
			echo json_encode($array);
		}
		
		
}
