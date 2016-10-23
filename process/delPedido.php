<?php
session_start();
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(5);
$NumPedidoDel= $_POST['num-pedido'];
$consP=  ejecutarSQL::consultar("select * from venta where NumPedido='$NumPedidoDel'");
$totalP= mysql_num_rows($consP);

if($totalP>0){
    if(consultasSQL::DeleteSQL('venta', "NumPedido='".$NumPedidoDel."'")){
        consultasSQL::DeleteSQL("detalle", "NumPedido='".$NumPedidoDel."'");
        echo '<img src="assets/img/correcto.png" class="center-all-contens"><br><p class="lead text-center">Pedido eliminado éxitosamente</p>';
    }else{
       echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">Ha ocurrido un error.<br>Por favor intente nuevamente</p>'; 
    }
}else{
    echo '<img src="assets/img/incorrecto.png" class="center-all-contens"><br><p class="lead text-center">El pedido no existe</p>';
}
