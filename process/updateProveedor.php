<?php
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(5);

$nitOldProveUp=$_POST['nit-prove-old'];
$nitProveUp=$_POST['nit-prove'];
$nameProveUp=$_POST['prove-name'];
$dirProveUp=$_POST['prove-dir'];
$telProveUp=$_POST['prove-tel'];
$webProveUp=$_POST['prove-web'];

if(consultasSQL::UpdateSQL("proveedor", "NITProveedor='$nitProveUp',NombreProveedor='$nameProveUp',Direccion='$dirProveUp',Telefono='$telProveUp',PaginaWeb='$webProveUp'", "NITProveedor='$nitOldProveUp'")){
    echo '
    <br>
    <img class="center-all-contens" src="assets/img/Check.png">
    <p><strong>Hecho</strong></p>
    <p class="text-center">
        Recargando<br>
        en 7 segundos
    </p>
    <script>
        setTimeout(function(){
        url ="configAdmin.php";
        $(location).attr("href",url);
        },7000);
    </script>
 ';
}else{
    echo '
    <br>
    <img class="center-all-contens" src="assets/img/cancel.png">
    <p><strong>Error</strong></p>
    <p class="text-center">
        Recargando<br>
        en 7 segundos
    </p>
    <script>
        setTimeout(function(){
        url ="configAdmin.php";
        $(location).attr("href",url);
        },7000);
    </script>
 ';
}