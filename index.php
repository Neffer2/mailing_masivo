<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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
        <center><h2><p>Registrate para recibir tu factura por correo electrónico mensualmente</p></h2></center>
    </div>
        <div class="container">
            <div class="card bg-light">
                <div class="card-body">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="sendData(); return false;" id="form">
                        <div class="row g-3" style="border-radius: 3px;">
                        
                        <div class="col-md-6">
                            <label class="form-label" for="nombre">Nombre: *</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
                        </div>  
                        <div class="col-md-6">
                            <label class="form-label" for="id">Número de identificación: *</label>
                            <input type="text" class="form-control" name="id" id="identificacion" placeholder="Número" required>
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
                            <input type="text" class="form-control" id="codigo_usuario" name="codigo_usuario" placeholder="Código de cuenta" maxlength="5" required>
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
                            <div class="form-check">
                                <label class="form-check-label" for="defaultCheck1">
                                    <p>Aceptar los <a style="color:blue;" href="https://aaaespinal.com.co/planesypoliticas/politicas/POL_TRA_DATOS.pdf" target="_blank">Términos y Condiciones</a></p>
                                </label>
                                <input class="form-check-input" type="checkbox" name="terminos" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="btn-group">
                                <button type="submit" name="Enviar" class="btn btn-outline-primary" id="send_button">Enviar datos</button>
                                <button type="reset" class="btn btn-outline-danger">Limpiar</button>
                            </div>
                        </div>
                        <label class="form-label" for="sector"><b>NOTAS Y RECOMENDACIONES:</b><br><br>Como recomendación se aconseja que la persona que se registre, sea el propietario del predio registrado ante la EMPRESA DE ACUEDUCTO, ALCANTARILLADO Y ASEO DE EL ESPINAL ESP.<br><br>Al realizar el registro recibirá una notificación en su correo electrónico que indicará que su registro ha sido correcto.<br><br>En caso de que los correos electronicos no sean visualizados en la bandeja de entrada, por favor verificar la bandeja de spam.<br><br>Si desea algún cambio o tiene alguno de los siguientes inconvenientes:<br>-código de cuenta  ya se encuentra en uso.<br>-modificar registro.<br>-eliminar registro.<br>-no recibe notificación de registro.<br>Por favor comunicarse al correo pqr@aaaespinal.com.co indicando el problema o inconveniente acompañado de sus datos principales (incluyendo código de cuenta).<br><br><p>Para mayor información acerca del manejo y datos requeridos en este formulario visite nuestro <a style="color:blue;" href="" target="_blank">Manual de usuario</a></p></label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <div class="col-md-12">
                            <center><p>© Elaborado por Iván Alberto Carrillo Mendoza</h2></center>
                        </div>
    <br>
    <br>
</body>
    <script>
        function sendData() {
            document.getElementById('send_button').disabled = true;
            var solicitud = document.getElementById("solicitud").value;
            var nombre = document.getElementById("nombre").value;
            var envio_factura = document.getElementById("envio_factura").value;
            var identificacion = document.getElementById("identificacion").value;
            var codigo_usuario = document.getElementById("codigo_usuario").value;
            var direccion = document.getElementById("direccion").value;
            var barrio = document.getElementById("barrio").value;
            var sector = document.getElementById("sector").value;
            var telefono = document.getElementById("telefono").value;
            var email = document.getElementById("email").value;
            var parametros = {
                "nombre": nombre,
                "identificacion": identificacion,
                "solicitud": solicitud,
                "envio_factura": envio_factura,
                "codigo_usuario": codigo_usuario,
                "barrio": barrio,
                "sector": sector,
                "telefono": telefono,
                "email": email,
                "direccion": direccion
            };

            $.ajax({
                    url: './guardar.php',
                    data: parametros,
                    headers: {
                        'Access-Control-Allow-Origin': '*'
                    },
                    headers: {
                        "Access-Control-Allow-Headers": "Origin, X-Requested-With, Content-Type, Accept, x-token"
                    },
                    type: 'POST',
                    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                    crossDomain: true,
                    beforeSend: function() {
                       
                    },
                    success: function(response) {
                        var obj = JSON.parse(response);
                        if (obj['status'] == 'Ok') {
                           alert(obj.msg)
                           document.getElementById('send_button').disabled = false;
                           document.getElementById("form").reset();
                        } else {
                           alert(obj.msg)
                           document.getElementById('send_button').disabled = false;
                           // if (obj.validity != null){
                           //      document.getElementById("codigo_usuario").setCustomValidity(obj.validity);
                           //      document.getElementById("codigo_usuario").reportValidity();
                           // }
                        }
                    }
                });
        }
    </script>
    <script src="./ajax.js"></script>

</html>