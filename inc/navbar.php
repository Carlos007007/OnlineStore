<?php 
    session_start(); 
    error_reporting(E_PARSE);
    if(!isset($_SESSION['contador'])){
        $_SESSION['contador'] = 0;
    }
?>
<section id="container-carrito-compras">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div id="carrito-compras-tienda"></div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <p class="text-center" style="font-size: 80px;">
                    <i class="fa fa-shopping-cart"></i>
                </p>
                <p class="text-center">
                    <a href="pedido.php" class="btn btn-success btn-block"><i class="fa fa-dollar"></i>   Confirmar pedido</a>
                    <a href="process/vaciarcarrito.php" class="btn btn-danger btn-block"><i class="fa fa-trash"></i>   Vaciar carrito</a> 
                </p>
            </div>
        </div>
    </div>
</section>
<nav id="navbar-auto-hidden">
        <div class="row hidden-xs"><!-- Menu computadoras y tablets -->
            <div class="col-xs-4">
                <figure class="logo-navbar"></figure>
                <p class="text-navbar tittles-pages-logo">Cat Electronics</p>
            </div>
            <div class="col-xs-8">
                <div class="contenedor-tabla pull-right">
                    <div class="contenedor-tr">
                        <a href="index.php" class="table-cell-td">Inicio</a>
                        <a href="product.php" class="table-cell-td">Productos</a>
                        <?php
                            if(!$_SESSION['nombreAdmin']==""){
                                echo ' 
                                    <a href="configAdmin.php" class="table-cell-td">Administración</a>
                                    <a href="#" class="table-cell-td carrito-button-nav all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Ver carrito de compras">
                                        <i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
                                    </a>
                                    <a href="#" class="table-cell-td" data-toggle="modal" data-target=".modal-logout">
                                        <i class="fa fa-user"></i>&nbsp;&nbsp;'.$_SESSION['nombreAdmin'].'
                                    </a>
                                 ';
                            }else if(!$_SESSION['nombreUser']==""){
                                echo ' 
                                    <a href="pedido.php" class="table-cell-td">Pedido</a>
                                    <a href="#" class="table-cell-td carrito-button-nav all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Ver carrito de compras">
                                        <i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
                                    </a>
                                    <a href="#" class="table-cell-td" data-toggle="modal" data-target=".modal-logout">
                                        <i class="fa fa-user"></i>&nbsp;&nbsp;'.$_SESSION['nombreUser'].'
                                    </a>
                                 ';
                            }else{
                                echo ' 
                                    <a href="registration.php" class="table-cell-td">Registro</a>
                                    <a href="#" class="table-cell-td carrito-button-nav all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Ver carrito de compras">
                                        <i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
                                    </a>
                                    <a href="#" class="table-cell-td" data-toggle="modal" data-target=".modal-login">
                                        <i class="fa fa-user"></i>&nbsp;&nbsp;Login
                                    </a>
                                 ';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row visible-xs"><!-- Mobile menu navbar -->
            <div class="col-xs-12">
                <button class="btn btn-default pull-left button-mobile-menu" id="btn-mobile-menu">
                    <i class="fa fa-th-list"></i>&nbsp;&nbsp;Menú
                </button>
                <a href="#" id="button-shopping-cart-xs" class="elements-nav-xs all-elements-tooltip carrito-button-nav" data-toggle="tooltip" data-placement="bottom" title="Ver carrito de compras">
                    <i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
                </a>
                <?php
                if(!$_SESSION['nombreAdmin']==""){echo '
                    <a href="#"  id="button-login-xs" class="elements-nav-xs" data-toggle="modal" data-target=".modal-logout">
                        <i class="fa fa-user"></i>&nbsp; '.$_SESSION['nombreAdmin'].' 
                    </a>';
                }else if(!$_SESSION['nombreUser']==""){
                    echo '
                    <a href="#"  id="button-login-xs" class="elements-nav-xs" data-toggle="modal" data-target=".modal-logout">
                        <i class="fa fa-user"></i>&nbsp; '.$_SESSION['nombreUser'].' 
                    </a>';
                }else{
                    echo '
                       <a href="#" data-toggle="modal" data-target=".modal-login" id="button-login-xs" class="elements-nav-xs">
                        <i class="fa fa-user"></i>&nbsp; Iniciar Sesión
                        </a> 
                   ';
                }
                ?>
            </div>
        </div>
    </nav>
    <!-- Modal login -->
    <div class="modal fade modal-login" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
          <div class="modal-content" id="modal-form-login">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title text-center text-primary" id="myModalLabel">Iniciar sesión en Cat Electronics</h4>
                </div>
            <form action="process/login.php" method="post" role="form" style="margin: 20px;" class="FormCatElec" data-form="login">
                  <div class="form-group">
                      <label><span class="glyphicon glyphicon-user"></span>&nbsp;Nombre</label>
                      <input type="text" class="form-control" name="nombre-login" placeholder="Escribe tu nombre" required=""/>
                  </div>
                  <div class="form-group">
                      <label><span class="glyphicon glyphicon-lock"></span>&nbsp;Contraseña</label>
                      <input type="password" class="form-control" name="clave-login" placeholder="Escribe tu contraseña" required=""/>
                  </div>

                  <p>¿Cómo iniciaras sesión?</p>
                  <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" value="option1" checked>
                        Usuario
                    </label>
                 </div>
                 <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" value="option2">
                         Administrador
                    </label>
                 </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Iniciar sesión</button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
                  </div>
                  <div class="ResFormL" style="width: 100%; text-align: center; margin: 0;"></div>
              </form>
          </div>
      </div>
    </div>
    <!-- Fin Modal login -->
    <div id="mobile-menu-list" class="hidden-sm hidden-md hidden-lg">
        <br>
        <h3 class="text-center tittles-pages-logo">Cat Electronics</h3>
        <button class="btn btn-default button-mobile-menu" id="button-close-mobile-menu">
        <i class="fa fa-times"></i>
        </button>
        <br><br>
        <ul class="list-unstyled text-center">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="product.php">Productos</a></li>
            <?php 
                if(!$_SESSION['nombreAdmin']==""){
                    echo '<li><a href="configAdmin.php">Administración</a></li>';
                }elseif(!$_SESSION['nombreUser']==""){
                    echo '<li><a href="pedido.php">Pedido</a></li>';
                }else{
                    echo '<li><a href="registration.php">Registro</a></li>';
                }
            ?>
        </ul>
    </div>
    <!-- Modal carrito -->
    <div class="modal fade modal-carrito" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="padding: 20px;">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <br>
            <p class="text-center"><i class="fa fa-shopping-cart fa-5x"></i></p>
            <p class="text-center">El producto se añadio al carrito</p>
            <p class="text-center"><button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Aceptar</button></p>
          </div>
      </div>
    </div>
    <!-- Fin Modal carrito -->
    
    <!-- Modal logout -->
    <div class="modal fade modal-logout" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="padding: 20px;">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <br>
            <p class="text-center">¿Quieres cerrar la sesión?</p>
            <p class="text-center"><i class="fa fa-exclamation-triangle fa-5x"></i></p>
            <p class="text-center">
                <a href="process/logout.php" class="btn btn-primary btn-sm">Cerrar la sesión</a>
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
            </p>
          </div>
      </div>
    </div>
    <!-- Fin Modal logout -->