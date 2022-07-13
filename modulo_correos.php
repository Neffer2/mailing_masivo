<?php session_start() ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correos individuales</title>
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
        <div class="container">
            <?php 
                if (isset($_SESSION['email_status']) && $_SESSION['email_status'] == 1){
                    ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert" id="myAlert">
                        <strong>Correo enviado exitosamente</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }elseif (isset($_SESSION['email_status']) && $_SESSION['email_status'] == 0) {
                    ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert" id="myAlert">
                        <strong>Error en el envío</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }
             ?>
            <br>
            <div class="row">
                <form action="actions/modulo_correo_action.php" method="POST" enctype="multipart/form-data">
                    <div class="col-md-12">
                            <center><h2><p>Envío de correos individuales</p></h2></center>
                        </div>
                    <div class="mb-3 row">
                        <label for="destino" class="col-md-2 col-form-label"><b>Correo destino:</b></label>
                        <div class="col-md-10">
                            <input type="email" name="correo_destino" class="form-control" id="destino" value="" required="" placeholder="Alguien@ejemplo.com">
                        </div>
                    </div>
                    
                     <div class="mb-3 row">
                        <label for="inputAsunto" class="col-md-2 col-form-label"><b>Asunto:</b></label>
                        <div class="col-md-10">
                          <input type="text" name="asunto" class="form-control" id="Asunto" required="">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="contenido" class="form-label"><b>Mensaje:</b></label>
                        <textarea class="form-control" id="contenido" name="contenido" rows="3" required=""></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Adjuntar archivo</label>
                        <input class="form-control" name="adjunto" type="file" id="formFile" multiple="false" accept=".pdf">
                    </div>

                    <div class="mb-3">
                        <div class="col-md-12">
                            <center><button type="submit" class="btn btn-primary" id="send_button">Enviar</button></center>
                        </div>
                    </div>
                </form>
            </div>
            <br>
        <div class="col-md-12">
                            <center><p>© Elaborado por Iván Alberto Carrillo Mendoza</h2></center>
                        </div>
        </div>
    <br>
    <br>
</body>
</html>
<?php session_destroy() ?>