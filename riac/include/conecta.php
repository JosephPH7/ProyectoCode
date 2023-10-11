<?php
$ServerJ = "localhost";
$UserJ = "root";
$PasswordJ = "";
$Bd ="riac";
$Connection = mysqli_connect($ServerJ,$UserJ,$PasswordJ,$Bd);
if($Connection ->connect_errno){
    die('Error al conectra la base de datos'.$Connection->connect_errno);
}

?>