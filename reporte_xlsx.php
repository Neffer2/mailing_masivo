<?php session_start() ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte Excel</title>
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
            <a href="https://www.aaaespinal.com.co" class="navbar-brand">EAAA DE EL ESPINAL</a>
        </div>
    </nav>
    <br>
        <div class="container">
            <br>
            <div class="col-md-12">
                    <center><h2><p>Reporte Xlsx</p></h2></center>
            </div>
            <div class="row">
                <form form action="actions/reporte_xlsx_action.php" method="POST">
                    <div class="mb-3">
                        <div class="col-md-12">
                            <center><button class="btn btn-primary">Generar</button></center>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br>
        <div class="col-md-12">
                            <center><p>© Elaborado por Iván Alberto Carrillo Mendoza</h2></center>
                        </div>
    <br>
    <br>
</body>
</html>