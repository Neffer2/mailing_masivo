<?php session_start() ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="https://www.aaaespinal.com.co" class="navbar-brand">EAAA DE EL ESPINAL</a>
        </div>
    </nav>
    <br>
    <div class="col-md-12">
        <center><h2><p>CRUD</p></h2></center>
        </div>
        <div class="container">
            <?php 
                if (isset($_SESSION['update_status']) && $_SESSION['update_status'] == 1){
                    ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert" id="myAlert">
                        <strong>Cambios guardados satisfactoriamente</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }elseif (isset($_SESSION['update_status']) && $_SESSION['update_status'] == 0) {
                    ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" id="myAlert">
                        <strong>Error</strong> no se guardaron los cambios
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }elseif (isset($_SESSION['update_status']) && $_SESSION['update_status'] == 2){
                    ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" id="myAlert">
                        <strong>Error</strong> el código de usuario ya se encuentra registrado
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }
            ?>
            <?php 
                if (isset($_SESSION['delete_status']) && $_SESSION['delete_status'] == 1){
                    ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert" id="myAlert">
                        <strong>Registro eliminado exitosamente</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }elseif (isset($_SESSION['delete_status']) && $_SESSION['delete_status'] == 0) {
                    ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" id="myAlert">
                        <strong>Error</strong> no se eliminaron registros
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }
            ?>
                <div class="card col-md-12">
                    <div class="card-body">
                        <div class="row">
                            <div class="row g-3">
                                    <div class="col-md-3">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Consulta por código de cuenta" style="font-weight: bold;">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="identificacion" placeholder="código de cuenta" maxlength="5">
                                    </div>
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-primary mb-3" onclick="search()">Consultar</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="card bg-light">
                <div class="card-body">
                    <form action="/modulo/actions/crud_datos_action.php" method="POST" class="row g-3" id="form_">
                        <div class="col-md-6">
                            <input type="hidden" name="id" value="" id="id_">
                            <input type="hidden" name="function" value="" id="function">
                            <label class="form-label" for="nombre">Nombre: *</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
                        </div>  
                        <div class="col-md-6">
                            <label class="form-label" for="identificacion_form">Número de identificación: *</label>
                            <input type="text" class="form-control" name="identificacion_form" id="identificacion_form" placeholder="Número" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="email">Correo electrónico: *</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="telefono">Teléfono/Celular: *</label>
                            <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Número" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="sector">Sector: *</label>
                            <select name="sector" id="sector" class="form-select">
                                <option value="Espinal">Espinal</option>
                                <option value="Chicoral">Chicoral</option>
                            </select> 
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="barrio">Barrio/Vereda: *</label>        
                            <select name="barrio" id="barrio" class="form-select">
                                <option value="Andalucia">Andalucia</option>
                                <option value="Arkabal">Arkabal</option>
                                <option value="Aso Juan Pablo II 2 Etapa">Aso Juan Pablo II 2 Etapa</option>
                                <option value="Asociacion Betania">Asociacion Betania</option>
                                <option value="Asociación de Vivienda Juan Pablo II">Asociación de Vivienda Juan Pablo II</option>
                                <option value="Asociacion de Vivienda Santa Rosa">Asociacion de Vivienda Santa Rosa</option>
                                <option value="Asociacion San Francisco">Asociacion San Francisco</option>
                                <option value="Belen">Belen</option>
                                <option value="Betania">Betania</option>
                                <option value="Betania Campestre">Betania Campestre</option>
                                <option value="Bosques del Roa">Bosques del Roa</option>
                                <option value="Caballero y Gongora">Caballero y Gongora</option>
                                <option value="Casabianca">Casabianca</option>
                                <option value="Ciudadela Cafasur">Ciudadela Cafasur</option>
                                <option value="Ciudadela Cafasur II Etapa">Ciudadela Cafasur II Etapa</option>
                                <option value="Ciudadela Real">Ciudadela Real</option>
                                <option value="Comfatolima">Comfatolima</option>
                                <option value="Conjunto Cerrado Balkanes del Vergel  I">Conjunto Cerrado Balkanes del Vergel  I</option>
                                <option value="Conjunto Cerrado Balkanes del Vergel II">Conjunto Cerrado Balkanes del Vergel II</option>
                                <option value="Conjunto Cerrado Caracoli Campo">Conjunto Cerrado Caracoli Campo</option>
                                <option value="Conjunto Cerrado Casa Club Balkanes">Conjunto Cerrado Casa Club Balkanes</option>
                                <option value="Conjunto Cerrado Condominio Pradera Azul">Conjunto Cerrado Condominio Pradera Azul</option>
                                <option value="Conjunto Cerrado Estacion Balkanes">Conjunto Cerrado Estacion Balkanes</option>
                                <option value="Conjunto Cerrado Portal de Balkanes">Conjunto Cerrado Portal de Balkanes</option>
                                <option value="Conjunto Cerrado Quintas de Gratamira I">Conjunto Cerrado Quintas de Gratamira I</option>
                                <option value="Conjunto Cerrado Quintas de Gratamira II">Conjunto Cerrado Quintas de Gratamira II</option>
                                <option value="Conjunto Cerrado Reserva del Bosque">Conjunto Cerrado Reserva del Bosque</option>
                                <option value="Conjunto Cerrado Reservas de la Villa">Conjunto Cerrado Reservas de la Villa</option>
                                <option value="Conjunto Cerrado Villa de Palmeras">Conjunto Cerrado Villa de Palmeras</option>
                                <option value="Conjunto Cerrado Villa Lucero">Conjunto Cerrado Villa Lucero</option>
                                <option value="Conjunto Cerrado Villa Marcela">Conjunto Cerrado Villa Marcela</option>
                                <option value="Conjunto de Vivienda Balkanes">Conjunto de Vivienda Balkanes</option>
                                <option value="Conjunto Residencial Isabella II">Conjunto Residencial Isabella II</option>
                                <option value="Conjunto Residencial La Alborada">Conjunto Residencial La Alborada</option>
                                <option value="Conjunto Residencial Rey Midas">Conjunto Residencial Rey Midas</option>
                                <option value="Conjunto Residencial Villa de Palmeras II">Conjunto Residencial Villa de Palmeras II</option>
                                <option value="Divino Niño Jesus">Divino Niño Jesus</option>
                                <option value="El Bosque">El Bosque</option>
                                <option value="El Centro">El Centro</option>
                                <option value="El Futuro">El Futuro</option>
                                <option value="El Palmar">El Palmar</option>
                                <option value="El Portal del Bunde">El Portal del Bunde</option>
                                <option value="El Recreo">El Recreo</option>
                                <option value="Entre Rios">Entre Rios</option>
                                <option value="Fatima">Fatima</option>
                                <option value="Guayacan">Guayacan</option>
                                <option value="Isaias Olivar">Isaias Olivar</option>
                                <option value="Jardines de Babilonia">Jardines de Babilonia</option>
                                <option value="La Cascada">La Cascada</option>
                                <option value="La Ceiba">La Ceiba</option>
                                <option value="La Esperanza">La Esperanza</option>
                                <option value="La Felicidad">La Felicidad</option>
                                <option value="La Magdalena 1A">La Magdalena 1A</option>
                                <option value="La Magdalena 1B">La Magdalena 1B</option>
                                <option value="Las Acacias">Las Acacias</option>
                                <option value="Las Marianitas">Las Marianitas</option>
                                <option value="Las Palmeras">Las Palmeras</option>
                                <option value="Libertador">Libertador</option>
                                <option value="Llano Grande">Llano Grande</option>
                                <option value="Los Almendros">Los Almendros</option>
                                <option value="Los Balkanes">Los Balkanes</option>
                                <option value="Los Héroes">Los Héroes</option>
                                <option value="Los Prados">Los Prados</option>
                                <option value="Luis Carlos Galan Sarmiento">Luis Carlos Galan Sarmiento</option>
                                <option value="Mi Palacio">Mi Palacio</option>
                                <option value="Nacional">Nacional</option>
                                <option value="Orlando">Orlando</option>
                                <option value="Portal de Altamira">Portal de Altamira</option>
                                <option value="Portal del Bunde">Portal del Bunde</option>
                                <option value="Praderas de Puerto Peñón">Praderas de Puerto Peñón</option>
                                <option value="Praderas de Puerto Peñon II Etapa">Praderas de Puerto Peñon II Etapa</option>
                                <option value="Praderas de Puerto Peñon III Etapa">Praderas de Puerto Peñon III Etapa</option>
                                <option value="Primero de Mayo">Primero de Mayo</option>
                                <option value="Rondon">Rondon</option>
                                <option value="San Miguel">San Miguel</option>
                                <option value="San Nicolas del Norte">San Nicolas del Norte</option>
                                <option value="San Pedro">San Pedro</option>
                                <option value="San Rafael">San Rafael</option>
                                <option value="Santa Margarita Maria">Santa Margarita Maria</option>
                                <option value="Santa Rosa II">Santa Rosa II</option>
                                <option value="Saucedal">Saucedal</option>
                                <option value="Talura">Talura</option>
                                <option value="Tolima Grande">Tolima Grande</option>
                                <option value="Treinta de Octubre">Treinta de Octubre</option>
                                <option value="Urb Iguaima">Urb Iguaima</option>
                                <option value="Urb Las Victorias I Etapa">Urb Las Victorias I Etapa</option>
                                <option value="Urb Los Palmares">Urb Los Palmares</option>
                                <option value="Urb Rincon Campestre">Urb Rincon Campestre</option>
                                <option value="Urb Villa Maita">Urb Villa Maita</option>
                                <option value="Urb. Santa Margarita Maria">Urb. Santa Margarita Maria</option>
                                <option value="Villa Andres">Villa Andres</option>
                                <option value="Villa Campestre">Villa Campestre</option>
                                <option value="Villa Campestre">Villa Campestre</option>
                                <option value="Villa Catalina">Villa Catalina</option>
                                <option value="Villa Cielo">Villa Cielo</option>
                                <option value="Villa del Prado">Villa del Prado</option>
                                <option value="Villa del Prado II">Villa del Prado II</option>
                                <option value="Villa del Prado III">Villa del Prado III</option>
                                <option value="Villa del Sol">Villa del Sol</option>
                                <option value="Villa Laura">Villa Laura</option>
                                <option value="Villa Leydi">Villa Leydi</option>
                                <option value="Villa Lorena">Villa Lorena</option>
                                <option value="Villa Luz Dary">Villa Luz Dary</option>
                                <option value="Villa Luz Mery">Villa Luz Mery</option>
                                <option value="Villa Marina">Villa Marina</option>
                                <option value="Villa Paz I">Villa Paz I</option>
                                <option value="Villa Paz II">Villa Paz II</option>
                                <option value="Villas del Palmar">Villas del Palmar</option>
                                <option value="Zona Industrial Rural Espinal-Chicoral">Zona Industrial Rural Espinal-Chicoral</option>
                                <option value="Zona Industrial Rural Espinal-Girardot">Zona Industrial Rural Espinal-Girardot</option>
                                <option value="Zona Industrial Urbana Espinal-Chicoral">Zona Industrial Urbana Espinal-Chicoral</option>
                                <option value="Zona Industrial Urbana Espinal-Girardot">Zona Industrial Urbana Espinal-Girardot</option>
                                <option value="Vda Agua Blanca Alta">Vda Agua Blanca Alta</option>
                                <option value="Vda Dindalito Centro">Vda Dindalito Centro</option>
                                <option value="Vda Dindalito La Union">Vda Dindalito La Union</option>
                                <option value="Vda Dindalito Sena">Vda Dindalito Sena</option>
                                <option value="Vda Guadualejo">Vda Guadualejo</option>
                                <option value="Vda Guasimal">Vda Guasimal</option>
                                <option value="Vda Guayabal">Vda Guayabal</option>
                                <option value="Vda la Joya">Vda la Joya</option>
                                <option value="Vda Las Delicias">Vda Las Delicias</option>
                                <option value="Vda Patio Bonito">Vda Patio Bonito</option>
                                <option value="Vda Rincon de San Francisco">Vda Rincon de San Francisco</option>
                                <option value="Vda Sucre">Vda Sucre</option>
                                <option value="Vda Talura Puerto Peñon">Vda Talura Puerto Peñon</option>
                                <option value="Agrario - Chicoral">Agrario - Chicoral</option>
                                <option value="Camala - Chicoral">Camala - Chicoral</option>
                                <option value="El Carmen - Chicoral">El Carmen - Chicoral</option>
                                <option value="El Centro - Chicoral">El Centro - Chicoral</option>
                                <option value="El Paraiso - Chicoral">El Paraiso - Chicoral</option>
                                <option value="La Esperanza - Chicoral">La Esperanza - Chicoral</option>
                                <option value="La Floresta - Chicoral">La Floresta - Chicoral</option>
                                <option value="Las Brisas - Chicoral">Las Brisas - Chicoral</option>
                                <option value="Libertador - Chicoral">Libertador - Chicoral</option>
                                <option value="Primero de Mayo - Chicoral">Primero de Mayo - Chicoral</option>
                                <option value="Villa del Rosario - Chicoral">Villa del Rosario - Chicoral</option>
                                <option value="Villa Inés - Chicoral">Villa Inés - Chicoral</option>
                                <option value="Villanueva - Chicoral">Villanueva - Chicoral</option>
                                <option value="Vda La Arenosa - Chicoral">Vda La Arenosa - Chicoral</option>
                                <option value="Vda La Trinidad - Chicoral">Vda La Trinidad - Chicoral</option>
                                <option value="Vda San Francisco Centro - Chicoral">Vda San Francisco Centro - Chicoral</option>
                                <option value="Vda Cunira - Coello">Vda Cunira - Coello</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="direccion">Dirección: *</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="codigo_usuario">Código de cuenta: *</label>
                            <input type="text" readonly class="form-control" id="codigo_usuario" name="codigo_usuario" placeholder="Código de cuenta" required maxlength="5">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="envio_factura">Forma en que se desea recibir la factura: *</label>        
                            <select name="envio_factura" id="envio_factura" class="form-select">
                                <option value="correo">solo por correo electrónico</option>
                                <option value="correo y factura">por correo electrónico y factura física en mi domicilio</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="solicitud">Solicita este servicio en calidad de: *</label>
                            <select name="solicitud" id="solicitud" class="form-select">
                                <option value="Propietario">Propietario</option>
                                <option value="Arrendatario">Arrendatario</option>
                                <option value="Usuario">Usuario</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <div class="btn-group">
                                <button name="function" id="update" class="btn btn-outline-primary" value="update" onclick="update_confirmation()">Guardar cambios</button>
                                <button name="function" id="delete" class="btn btn-outline-danger" value="delete" onclick="delete_confirmation()">Eliminar registro</button>
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <div class="col-md-12">
                            <center><p>© Elaborado por Iván Alberto Carrillo Mendoza</h2></center>
                        </div>
        <br>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script type="text/javascript">
    // carga la pagina y deshabilita los botones de enviar y eliminar
    window.onload = function() {
        document.getElementById("update").disabled = true;
        document.getElementById("delete").disabled = true;
    };
    //consulta el usuario con la identificacion
    function search (){
        axios({
          method: 'post',
          url: 'actions/crud_datos_action.php',
          data: {
            id: document.getElementById('identificacion').value,
            function: 'search'
          }
        })
        .then(function (response) {
            // console.log(response.data);
            //la respuesta mete los datos en los inputs, y habilita los botones
            if (response.data != false){
                document.getElementById("update").disabled = false;
                document.getElementById("delete").disabled = false;
                document.getElementById("id_").value = response.data.id;
                document.getElementById("nombre").value = response.data.nombre;
                document.getElementById("identificacion_form").value = response.data.identificacion;
                document.getElementById("email").value = response.data.email;
                document.getElementById("telefono").value = response.data.telefono;
                document.getElementById("sector").value = response.data.sector;
                document.getElementById("barrio").value = response.data.barrio;
                document.getElementById("direccion").value = response.data.direccion;
                document.getElementById("codigo_usuario").value = response.data.codigo_usuario;
                document.getElementById("envio_factura").value = response.data.envio_factura;
                document.getElementById("solicitud").value = response.data.solicitud;
            }
        })
        .catch(function (error) {
            console.log(error);
        });
    }
    // confirma que se desea eliminar el registro
    function delete_confirmation(){
        if (confirm("¿Desea eliminar este registro?")){
            document.getElementById('function').value = 'delete';
            document.getElementById("form_").submit();
        }else{
            document.getElementById("form_").addEventListener("click", function(event){
            event.preventDefault()});
        }
    }
    // confirma que se desea actualizar el registro
    function update_confirmation(){
        if (confirm("¿Desea guardar cambios?")){
            document.getElementById('function').value = 'update';
            document.getElementById("form_").submit();
        }else{
            document.getElementById("form_").addEventListener("click", function(event){
            event.preventDefault()});
        }
    }
</script>
</body>
</html>
<?php session_destroy() ?>