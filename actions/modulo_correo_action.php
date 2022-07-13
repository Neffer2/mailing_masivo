<?php 
	include '../conexion.php';
	//Import PHPMailer classes into the global namespace
	//These must be at the top of your script, not inside a function
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	//Load Composer's autoloader
	require '../vendor/autoload.php';

	//toma los valores del formilario
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		session_start();
		$GLOBALS['correo_destino'] = (isset($_POST['correo_destino']) ? $GLOBALS['correo_destino'] = $_POST['correo_destino'] : null);
		$GLOBALS['asunto'] = (isset($_POST['asunto']) ? $GLOBALS['asunto'] = $_POST['asunto'] : null);
		$GLOBALS['contenido'] = (isset($_POST['contenido']) ? $GLOBALS['contenido'] = $_POST['contenido'] : null);
	
		//Instantiation and passing `true` enables exceptions
		$mail = new PHPMailer(true);
		$mail->CharSet = 'UTF-8';
		$mail->Encoding = 'base64';

		//configuracion del correo
		try {
		    //Server settings
		    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
		    $mail->isSMTP();                                            //Send using SMTP
		    $mail->Host       = '';                     //Servidor SMTP del correo emisor
		    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		    $mail->Username   = '';                     //SMTP username (direc de correo) 
		    $mail->Password   = '';                               //SMTP password (contraseña)
		    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

		    //Recipients
		    $mail->setFrom('', 'SOY UN TITULO GG');    					
		    $mail->addAddress(trim($GLOBALS['correo_destino']));    							//Add a recipient (correo receptor)
		    $mail->addReplyTo('no-reply@mycomp.com','no-reply');								// No reply
		    // $mail->addCC('cc@example.com');
		    // $mail->addBCC('bcc@example.com');

		    //Attachments
		    if (isset($_FILES['adjunto']) && $_FILES['adjunto']['error'] == UPLOAD_ERR_OK) {
    			$mail->AddAttachment($_FILES['adjunto']['tmp_name'],$_FILES['adjunto']['name']); // toma el archivo (si hay)
			}
		    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
		    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

		    //contenido del mensaje
		    $mail->isHTML(true);                                  //Set email format to HTML
		    $mail->Subject = trim($GLOBALS['asunto']);
		    $mail->Body    = $GLOBALS['contenido'];
		    $mail->AltBody = $GLOBALS['contenido'];        // para receptores de correo non-html

		    $mail->send();

		    $_SESSION['email_status'] = 1;
		} catch (Exception $e) {
		    $_SESSION['email_status'] = 0;
		}
	}
	echo "<script>window.location.assign('../modulo_correos.php')</script>";
	exit();
 ?>
