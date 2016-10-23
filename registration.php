<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registro</title>
    <?php include './inc/link.php'; ?>
</head>
<body id="container-page-registration">
    <?php include './inc/navbar.php'; ?>
    <section id="form-registration">
        <div class="container">
            <div class="row">
                <div class="page-header">
                  <h1>Registro de usuarios <small class="tittles-pages-logo">Cat Electronics</small></h1>
                </div>
                <div class="col-xs-12 col-sm-6 text-center">
                   <br><br><br>
                    <p><i class="fa fa-users fa-5x"></i></p>
                    <p class="lead">
                        Al registrarse recibira notificaciones de nuestros productos y ofertas más recientes en nuestra tienda.
                    </p>
                    <br>
                    <img src="assets/img/img-registration.png" alt="electrodomesticos" class="img-responsive">
                </div>
                <div class="col-xs-12 col-sm-6">
                   <br><br>
                    <div id="container-form">
                       <p style="color:#fff;" class="text-center lead">Debera de llenar todos los campos para registrarse</p>
                       <br><br>
                       <form class="form-horizontal FormCatElec" action="process/regclien.php" role="form" method="post" data-form="save">
                           <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                                <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese su número de NIT" required name="clien-nit" data-toggle="tooltip" data-placement="top" title="Ingrese su número de NIT. Solamente números y guiones(-)" maxlength="30" pattern="[0-9-]{14,30}">
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese su nombre de usuario" required name="clien-name" data-toggle="tooltip" data-placement="top" title="Ingrese su nombre. Máximo 9 caracteres (solamente letras)" pattern="[a-zA-Z]{1,9}" maxlength="9">
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese sus nombres" required name="clien-fullname" data-toggle="tooltip" data-placement="top" title="Ingrese sus nombres.(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese sus apellidos" required name="clien-lastname" data-toggle="tooltip" data-placement="top" title="Ingrese sus apellido(solamente letras)" pattern="[a-zA-Z ]{1,50}" maxlength="50">
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                <input class="form-control all-elements-tooltip" type="password" placeholder="Introdusca una contraseña" required name="clien-pass" data-toggle="tooltip" data-placement="top" title="Defina una contraseña para iniciar sesión">
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-home"></i></div>
                                <input class="form-control all-elements-tooltip" type="text" placeholder="Ingrese su dirección" required name="clien-dir" data-toggle="tooltip" data-placement="top" title="Ingrese la direción en la reside actualmente" maxlength="100">
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-mobile"></i></div>
                                <input class="form-control all-elements-tooltip" type="tel" placeholder="Ingrese su número telefónico" required name="clien-phone" maxlength="11" pattern="[0-9]{8,11}" data-toggle="tooltip" data-placement="top" title="Ingrese su número telefónico. Mínimo 8 digitos máximo 11">
                              </div>
                            </div>
                            <br>
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-at"></i></div>
                                <input class="form-control all-elements-tooltip" type="email" placeholder="Ingrese su Email" required name="clien-email" data-toggle="tooltip" data-placement="top" title="Ingrese la dirección de su Email" maxlength="50">
                              </div>
                            </div>
                            <br>
                            <p><button type="submit" class="btn btn-success btn-block"><i class="fa fa-pencil"></i>&nbsp; Registrarse</button></p>
                            <div class="ResForm" style="width: 100%; color: #fff; text-align: center; margin: 0;"></div>
                        </form> 
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <?php include './inc/footer.php'; ?>
</body>
</html>