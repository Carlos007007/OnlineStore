<html>
    <head>
        <title>Admin</title>
        <meta charset="UTF-8">
        <meta http-equiv="Refresh" content="12;url=../configAdmin.php">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/media.css">
        <link rel="Shortcut Icon" type="image/x-icon" href="../assets/icons/logo.ico" />
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/autohidingnavbar.min.js"></script>
    </head>
    <body>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-md-offset-3 text-center">
        <?php
        session_start();
        include '../library/configServer.php';
        include '../library/consulSQL.php';
        
        $codeProd= $_POST['prod-codigo'];
        $nameProd= $_POST['prod-name'];
        $cateProd= $_POST['prod-categoria'];
        $priceProd= $_POST['prod-price'];
        $modelProd= $_POST['prod-model'];
        $marcaProd= $_POST['prod-marca'];
        $stockProd= $_POST['prod-stock'];
        $codePProd= $_POST['prod-codigoP'];
        $adminProd= $_POST['admin-name'];

        if(!$codeProd=="" && !$nameProd=="" && !$cateProd=="" && !$priceProd=="" && !$modelProd=="" && !$marcaProd=="" && !$stockProd=="" && !$codePProd=="" && !$_FILES['img']['name']==""){
            $verificar=  ejecutarSQL::consultar("select * from producto where CodigoProd='".$codeProd."'");
            $verificaltotal = mysql_num_rows($verificar);
            if($verificaltotal<=0){
                if(move_uploaded_file($_FILES['img']['tmp_name'],"../assets/img-products/".$_FILES['img']['name'])){
                    if(consultasSQL::InsertSQL("producto", "CodigoProd, NombreProd, CodigoCat, Precio, Modelo, Marca, Stock, NITProveedor, Imagen, Nombre", "'$codeProd','$nameProd','$cateProd','$priceProd', '$modelProd','$marcaProd','$stockProd','$codePProd','".$_FILES['img']['name']."','$adminProd'")){
                       echo '
                            <img src="../assets/img/correctofull.png" class="center-all-contens">
                            <br>
                            <h3>El producto se añadio a la tienda con éxito</h3>
                            <p class="lead text-cente">
                                La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
                                <a href="../configAdmin.php" class="btn btn-primary btn-lg">Volver a administración</a>
                            </p>';
                   }else{
                      echo '
                            <img src="../assets/img/incorrectofull.png" class="center-all-contens">
                            <br>
                            <h3>Ha ocurrido un error. Por favor intente nuevamente</h3>
                            <p class="lead text-cente">
                                La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
                                <a href="../configAdmin.php" class="btn btn-primary btn-lg">Volver a administración</a>
                            </p>';
                   }   
                }else{
                    echo ' 
                        <img src="../assets/img/incorrectofull.png" class="center-all-contens">
                         <br>
                         <h3>Ha ocurrido un error al cargar la imagen</h3>
                         <p class="lead text-cente">
                             La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
                             <a href="../configAdmin.php" class="btn btn-primary btn-lg">Volver a administración</a>
                         </p>';
                }
            }else{
                echo '
                    <img src="../assets/img/incorrectofull.png" class="center-all-contens">
                    <br>
                    <h3>El Código de producto ya esta registrado.<br>Por favor ingrese otro código de producto</h3>
                    <p class="lead text-cente">
                        La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
                        <a href="../configAdmin.php" class="btn btn-primary btn-lg">Volver a administración</a>
                    </p>';
            }
        }else {
            echo '
                <img src="../assets/img/incorrectofull.png" class="center-all-contens">
                <br>
                <h3>Error los campos no deben de estar vacíos</h3>
                <p class="lead text-cente">
                    La pagina se redireccionara automaticamente. Si no es asi haga click en el siguiente boton.<br>
                    <a href="../configAdmin.php" class="btn btn-primary btn-lg">Volver a administración</a>
                </p>';
        }
        ?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>