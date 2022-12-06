<?php
//nuevoproducto1
include_once "componentes/header.php";

?>
<style>
  #contenido {
    width: 50%;
    height: 610px;
    background-color: #f8f9fa;
    right: 250px;
    top: 0px;
    border-radius: 15px;

  }
</style>


<div class="todo">




  <div class="row">
    <div class="col">
      <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;height:600px">
        <a href="admin1.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap" />
          </svg>
          <span class="">Sphine</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="principal.php" class="nav-link link-dark" aria-current="page">
              <svg class="bi me-2" width="16" height="16">
                <use xlink:href="#home" />
              </svg>
              mostrar inventario
            </a>
          </li>
          <li>
            <a href="#" class="nav-link active">
              <svg class="bi me-2" width="16" height="16">
                <use xlink:href="#speedometer2" />
              </svg>
              Registrar
            </a>
          </li>
          <li>
            <a href="actualizar.php" class="nav-link link-dark">
              <svg class="bi me-2" width="16" height="16">
                <use xlink:href="#table" />
              </svg>
              Actualizar
            </a>
          </li>
          <li>
            <a href="#" class="nav-link link-dark">
              <svg class="bi me-2" width="16" height="16">
                <use xlink:href="#grid" />
              </svg>
              Products
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
     
        <span>
          <h1>AGREGAR NUEVO PRODUCTO</h1>
        </span>
        <br>

        <form action="producto1.php" method="POST" >
        <div>
            <label> ID producto: </label>
            <input type="text" class="form-control" name="idproducto" placeholder="ingresar id del producto" required><br>
          </div> 
        
        <div>
            <label> Producto: </label>
            <input type="text" required  class="form-control" name="nombre_producto"  placeholder="ingresar nombre del producto" required><br>
          </div>

          <label>proovedor: </label>
          <input type="text" required  class="form-control" name="proveedor" placeholder="ingresar nombre del proveedor"required><br>
          <div>
            <label >cantidad:</label>
            <input type="text" required class="form-control" name="cantidad"  placeholder="ingresar la cantidad del producto"required><br>
          </div>

          <div>
            <label >valor del producto:</label> 
            <input type="text" required class="form-control" name="valor" placeholder="ingresar valor del producto"required><br>
          </div>
          <div>
            <label >valor de compra:</label> 
            <input type="text" required class="form-control" name="valor1" placeholder="ingresar valor de compra"required><br>
          </div>
          
          <button type="submit" class="form-control">Guardar</button>
        </form>
    


    </div>


  </div>
</div>




<?php
include_once "componentes/footer.php";


?>