<?php
if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
    
    if(isset($_SESSION["usuario"])){
        include('includes/utilerias.php');
        redireccionar("Ya se encuentra una sesión iniciada","index.php");
        return;
    }
?>
<form action="iniciar.php" method="post">
  <div id="myModal" class="modal fade">
    <div class="modal-dialog modal-login">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Iniciar sesión</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <form action="iniciar.php"  method="post" enctype="multipart/form-data">
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="nombre-usuario"  id="nombre-usuario" placeholder="Usuario" required="required">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Contraseña" required="required">
              </div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block btn-lg">Iniciar sesión</button>
            </div>
            <p class="hint-text"><a href="#">¿Olvidaste tu contraseña?</a></p>
          </form>
        </div>
        <div class="modal-footer">Solo personal del instituto</div>
      </div>
    </div>
  </div>
  </form> 