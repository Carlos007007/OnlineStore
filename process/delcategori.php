<?php
session_start();
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(5);
$codeCateg= $_POST['categ-code'];
$cons=  ejecutarSQL::consultar("select * from categoria where CodigoCat='$codeCateg'");
$totalcateg = mysql_num_rows($cons);

if($totalcateg>0){
    if(consultasSQL::DeleteSQL('categoria', "CodigoCat='".$codeCateg."'")){
        echo '<img src="assets/img/correcto.png" class="center-all-contens"><br><p class="lead text-center">Categoría eliminada éxitosamente</p>';
    }else{
       echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p>'; 
    }
}else{
    echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">El código de la categoria no existe</p>';
}
