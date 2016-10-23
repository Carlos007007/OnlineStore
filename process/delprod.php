<?php
 include '../library/configServer.php';
 include '../library/consulSQL.php';

 sleep(4);
 
 $codeProd= $_POST['prod-code'];
 $cons=  ejecutarSQL::consultar("select * from producto where CodigoProd='$codeProd'");
 $totalproductos = mysql_num_rows($cons);
 $tmp=  mysql_fetch_array($cons);
 $imagen=$tmp['Imagen'];
 if($totalproductos>0){
    if(consultasSQL::DeleteSQL('producto', "CodigoProd='".$codeProd."'")){
        $carpeta='../assets/img-products/';
        $directorio=$carpeta.$imagen;
        chmod($directorio, 0777);
        unlink($directorio);
        echo '<img src="assets/img/correcto.png" class="center-all-contens"><br><p class="lead text-center">El producto se elimino de la tienda con éxito</p>';
    }else{
        echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p>'; 
    }
 }else{
     echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">El código del producto no existe</p>';
 }