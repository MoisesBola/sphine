<?php
//nuevoproducto1
include_once "componentes/headeradmin.php";
include_once "actualizarusuariobd.php";
?>

  
<style>
  #contenido {
    width: 50%;
    min-height: 100%;
    background-color: #f8f9fa;
    right: 250px;
    top: auto;
    border-radius: 15px;

  }


  #todo {
    background-color: aliceblue;
  }
</style>


<div class="todo">




  <div class="row">
    <div class="col">
      <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;height:600px">
        <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap" />
          </svg>
          <span class="">Sphine</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="mostrarusuarios.php" class="nav-link link-dark" aria-current="page">
              <svg class="bi me-2" width="16" height="16">
                <use xlink:href="#home" />
              </svg>
              mostrar usuario
            </a>
          </li>
          <li>
            <a href="registrar_usuario.php" class="nav-link link-dark">
              <svg class="bi me-2" width="16" height="16">
                <use xlink:href="#speedometer2" />
              </svg>
              Registrar usuario
            </a>
          </li>
          <li>
            <a href="#" class="nav-link active ">
              <svg class="bi me-2" width="16" height="16">
                <use xlink:href="#table" />
              </svg>
              Actualizar
            </a>
          </li>
          <li>
            <a href="admin.php" class="nav-link link-dark">
              <svg class="bi me-2" width="16" height="16">
                <use xlink:href="#grid" />
              </svg>
              Modousuario
            </a>
          </li>
          <li>
            <a href="cerrar.php" class="nav-link link-dark">
              <svg class="bi me-2" width="16" height="16">
                <use xlink:href="#people-circle" />
              </svg>
              salir
            </a>
          </li>
        </ul>
        <hr>

      </div>
    </div>
    <div id="contenido" class="col">
      <div>
        <span>
          <h1>ACTUALIZAR NUEVO USUARIOS</h1>
        </span>
        <br>

        <form action="" method="post">
          <input type="hidden" value="<?= $rowSelectByID['idusuario']; ?>" name="idForm1">
          <label> usuario:</label>
          <input required class="form-control" type="text" name="usuario" value="<?= $rowSelectByID['idusuario']; ?>"> <br>
          <label> contraseña </label>
          <input required class="form-control" type="text" name="contraseña" value="<?= $rowSelectByID['contrasena']; ?>"> <br>
          <label> rol </label>
          <input required class="form-control" type="text" name="rol_u" value="<?= $rowSelectByID['tipo_u']; ?>"> <br> <br>
          <input class="form-control" type="submit" value="Guardar">




        </form>
      </div>

    </div>


  </div>
</div>