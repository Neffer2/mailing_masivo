<?php 
	session_start();
	include '../conexion.php';
	$GLOBALS['dbh'] = $conexion;
	$data = json_decode(file_get_contents("php://input"), TRUE);
	$function = (isset($data['function']) ? $function = $data['function'] : (isset($_POST['function']) ? $function = $_POST['function'] : null));
	

	// $function puede tener search, update o delete. Cada uno se envia a su funcion. 
	switch ($function) {
		case 'search':
			search($data['id']);
			break;
		case 'update':
			update_action();
			break;
		case 'delete':
			delete_action(trim($_POST['id']));
			break;
		default:
			break;
	}

	//actualiza con los datos enviados
	function update_action() {	
		$id = trim($_POST['id']);
		$codigo_usuario = trim($_POST['codigo_usuario']);
		function inner_update (){
			$id = trim($_POST['id']);
			$nombre = trim($_POST['nombre']);
			$identificacion = trim($_POST['identificacion_form']);
			$email = trim($_POST['email']);
			$telefono = trim($_POST['telefono']);
			$sector = trim($_POST['sector']);
			$barrio = trim($_POST['barrio']);
			$direccion = trim($_POST['direccion']);
			//$codigo_usuario = trim($_POST['codigo_usuario']);
			$envio_factura = trim($_POST['envio_factura']);
			$solicitud = trim($_POST['solicitud']);

			$sql = "UPDATE clientes SET nombre = '".$nombre."', identificacion = '".$identificacion."', email = '".$email."', telefono = '".$telefono."', sector = '".$sector."', barrio = '".$barrio."', direccion = '".$direccion."', envio_factura = '".$envio_factura."', solicitud = '".$solicitud."' , ultima_modificacion = '".date("Y-m-d H:i:s")."' WHERE id = '".$id."'";
			
			if ($GLOBALS['dbh']->query($sql) == TRUE){
				$_SESSION['update_status'] = 1;
				header("Location:/modulo/crud_datos.php");
			}else {
				$_SESSION['update_status'] = 0;
				header("Location:/modulo/crud_datos.php");
			}	
		}

		$stmt = $GLOBALS['dbh']->prepare("SELECT id,codigo_usuario FROM clientes WHERE codigo_usuario = ? ");
		if ($stmt->execute([$codigo_usuario])){
			$data = $stmt->fetch();

			if ($data == false){
				inner_update();
			}else{
				if ($data['id'] == $id && $data['codigo_usuario'] == $codigo_usuario){
					inner_update();
				}else{
					$_SESSION['update_status'] = 2; // codigo ya existe
					header("Location:/modulo/crud_datos.php");
				}
			}
		}
	}

	//elimina con la id
	function delete_action($id) {	
		$sql = "DELETE FROM clientes WHERE id = '".$id."'";
		
		if ($GLOBALS['dbh']->query($sql) == TRUE){
			$_SESSION['delete_status'] = 1;
			header("Location:/modulo/crud_datos.php");
		}else {
			$_SESSION['delete_status'] = 0;
			header("Location:/modulo/crud_datos.php");
			//echo "Error: " . $sql . "<br>" . $GLOBALS['dbh']->error;
		}
		die();
	}

	// consulta el usuario con la identificacion
	function search ($id){
		$stmt = $GLOBALS['dbh']->prepare("SELECT * FROM clientes WHERE codigo_usuario = ?");
		if ($stmt->execute([$id])){
			$user = $stmt->fetch();
			echo json_encode($user);
		}else{
			echo json_encode((object) array('Error' => 'Error'));
		}
	}
?>