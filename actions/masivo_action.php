<?php 
	include '../conexion.php';
	//Import PHPMailer classes into the global namespace
	//These must be at the top of your script, not inside a function
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	session_start();
	//Load Composer's autoloader
	require '../vendor/autoload.php';

	$sql = "SELECT nombre,codigo_usuario,email FROM clientes WHERE 1";
	

	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		//toma los valores del formilario
		$GLOBALS['asunto'] = (isset($_POST['asunto']) ? $GLOBALS['asunto'] = $_POST['asunto'] : null);
		$GLOBALS['contenido'] = (isset($_POST['contenido']) ? $GLOBALS['contenido'] = $_POST['contenido'] : null);
	

		if ($conexion->query($sql) == TRUE){
				foreach($conexion-> query($sql) as $row){
					//Instantiation and passing `true` enables exceptions
					$mail = new PHPMailer(true);
					$mail->CharSet = 'UTF-8';
					$mail->Encoding = 'base64';
					//configuracion del correo
					try {
					    //Server settings
					    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
					    $mail->isSMTP();                                            //Send using SMTP
					    $mail->Host       = '';                     //Servidor SMTP del correo emisor
					    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
					    $mail->Username   = '';                     //SMTP username (direc de correo) 
					    $mail->Password   = '';                             //SMTP password (contraseña)
					    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
					    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

					    //Recipients
					    $mail->setFrom('', 'SOY UN TITULO GG');
					    $mail->addAddress(trim($row['email']));
					    $mail->addReplyTo('no-reply@mycomp.com','no-reply');								// No reply


					    //contenido del mensaje
					    $mail->isHTML(true);
					    $mail->Subject = trim($GLOBALS['asunto']);
					    $mail->Body    = "Hola ".$row['nombre']."<br><br>".$GLOBALS['contenido']."<br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse porttitor sollicitudin ante, vel feugiat erat. Vivamus erat tellus, posuere at facilisis vitae, mollis a nulla. Sed ante urna, ultrices ac libero ut, porta sodales erat. Duis sed diam non quam fringilla ornare quis eget nibh. Nulla ut ultricies justo. Morbi quis venenatis felis.<br><br>Síganos en nuestras redes sociales:<br><br>Facebook: https://www.facebook.com/eaaaespinal<br><br>twitter: https://twitter.com/aaaespinal<br><br>Instagram: https://www.instagram.com/eaaaespinal";
					    $mail->send();

					    $_SESSION['email_status'] = 1;
					} catch (Exception $e) {
					    $_SESSION['email_status'] = 0;
					} 
				}
		}else{$_SESSION['email_status'] = 0;}
	}
	echo "<script>window.location.assign('../masivo.php')</script>";
	exit();
 ?>