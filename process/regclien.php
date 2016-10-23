<?php
include '../library/configServer.php';
include '../library/consulSQL.php';

sleep(3);
$nitCliente= $_POST['clien-nit'];
$nameCliente= $_POST['clien-name'];
$fullnameCliente= $_POST['clien-fullname'];
$apeCliente= $_POST['clien-lastname'];
$passCliente= md5($_POST['clien-pass']);
$dirCliente= $_POST['clien-dir'];
$phoneCliente= $_POST['clien-phone'];
$emailCliente= $_POST['clien-email'];

if(!$nitCliente=="" && !$nameCliente=="" && !$apeCliente=="" && !$dirCliente=="" && !$phoneCliente=="" && !$emailCliente=="" && !$fullnameCliente==""){
    $verificar=  ejecutarSQL::consultar("select * from cliente where NIT='".$nitCliente."'");
    $verificaltotal = mysql_num_rows($verificar);
    if($verificaltotal<=0){
        if(consultasSQL::InsertSQL("cliente", "NIT, Nombre, NombreCompleto, Apellido, Direccion, Clave, Telefono, Email", "'$nitCliente','$nameCliente','$fullnameCliente','$apeCliente','$dirCliente', '$passCliente','$phoneCliente','$emailCliente'")){
            echo '<img src="assets/img/ok.png" class="center-all-contens"><br>El registro se completo con éxito';
        }else{
           echo '<img src="assets/img/error.png" class="center-all-contens"><br>Ha ocurrido un error.<br>Por favor intente nuevamente'; 
        }
    }else{
        echo '<img src="assets/img/error.png" class="center-all-contens"><br>El NIT que ha ingresado ya esta registrado.<br>Por favor ingrese otro número de NIT';
    }
}else {
    echo '<img src="assets/img/error.png" class="center-all-contens"><br>Error los campos no deben de estar vacíos';
}

