<?php session_start() ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correos masivos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
    <style type="text/css">
        .margen{
            margin: 5px;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">Bull Marketing</a>
        </div>
    </nav>
    <br>
        <div class="container">
            <?php 
                if (isset($_SESSION['email_status']) && $_SESSION['email_status'] == 1){
                    ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert" id="myAlert">
                        <strong>Envío masivo realizado exitosamente</strong>
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
                <form form action="actions/masivo_action.php" method="POST">
                    <div class="col-md-12">
                            <center><h2><p>Envío de Correos masivos</p></h2></center>
                    </div>
                    
                     <div class="mb-3 row">
                        <label for="inputAsunto" class="col-md-2 col-form-label"><b>Asunto:</b></label>
                        <div class="col-md-10">
                          <input type="text" class="form-control" id="Asunto" name="asunto" required="">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="contenido" class="form-label"><b>Mensaje:</b></label>
                        <textarea class="form-control" id="contenido" rows="3" name="contenido" required=""></textarea>
                    </div>

                    <div class="mb-3">
                        <div class="col-md-12">
                            <center><button class="btn btn-primary">Enviar</button></center>
                        </div>
                    </div>
                </form>
            </div>
            <br>
            <div class="col-md-12">
                <center><p>© Elaborado por Nefer Barragán</h2></center>
            </div>
        </div>
    <br>
    <br>
</body>
</html>
<?php session_destroy() ?>