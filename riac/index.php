<?php
include "include/conecta.php";
include "include/Login.php";


error_reporting(0);
if(isset($_POST['btnIngresar'])){
    $UserSistem = "RiacDeveloper";
    $PasswoerdSistem = "Admin506";
    $User =$_POST['Usuario'];
    $Pass =$_POST['Pass'];
    /* 
    verificar que se recivan los datos
    echo " El usuario es:  ".$User." y el password es:" .$Pass; 
    */
    if($UserSistem == $User and $PasswoerdSistem == $Pass){
        $alerta.="<div class='alert alert-success mt-4 alert-dismissible fade show' role='alert'>
                <strong>Bienvenido</strong> Bienvenido Loco
                <button type='button' class='btn-close' data-bs-dismiss ='alert' aria-labe ='Close'></button>
        </div>";
    }
    else{
        $alerta.="<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Error</strong> Tu quien eres Loco
            <button type='button' class='btn-close' data-bs-dismiss ='alert' aria-label ='Close'></button>
        </div>";
    }

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>riac / login</title>
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <!--no puedo tener columnas sin antes tener una linea-->
            <div class="justify-container-center mt2">
                <div class="col.sm-10 col-md-10 col-lg-10">
                    <h1 class="text-center display-6">Riac / <span class="text-info">inicio de sesion</span></h1>
                </div>
            </div>
            </div>
        </div>
        <div class="row mt-2">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" autocomplate="off">
                <div class="row justify-content-center mt-3 mb-1">
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        <input type="text" name="Usuario" id="Usuario" placeholder="Usuario" class="form-control roundend-pill border-info">
                    </div>
                </div>
                <div class="row mt-2 justify-content-center mb-1">
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        <input type="password" name="Pass" id="Pass" placeholder="Password" class="form-control roundend-pill border-info">
                    </div>
                </div>
                <div class="row mt-2 justify-content-center">
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        <div class="d-grid gap-2">
                            <input type="submit" value="Ingresar" name="btnIngresar" class="btn btn-outline-primary">
                        </div>
                    </div>
                </div>
        </div>
            </form>
        <?php echo $alerta; ?>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

