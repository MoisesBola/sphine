<?php
//nuevoproducto1
include_once "componentes/header.php" ;
include "actualizarbd1.php";
?>


<style>
  #contenido {
    width: 50%;
    height: 550px;
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
      <a href="seccionagregar.php" class="nav-link link-dark">
        <svg class="bi me-2" width="16" height="16">
          <use xlink:href="#speedometer2" />
        </svg>
        Registrar
      </a>
    </li>
    <li>
      <a href="actualizar.php" class="nav-link active ">
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
  <div >
  		<span> <h1>ACTUALIZAR NUEVO PRODUCTO</h1> </span>
  		<br>
    
        <form action=""  method="post">
        <input  type="hidden" value="<?=$rowSelectByID['idproducto'];?>" name="idForm">
          <label> Nombre:</label>
          <input required  class="form-control"type="text" name="nombreForm" value="<?=$rowSelectByID['nombre_producto'];?>">  <br>
          <label> Proveedor:</label>
          <input required  class="form-control"type="text" name="proveedorForm" value="<?=$rowSelectByID['proveedor'];?>">  <br>
          <label> Valor: </label> 
          <input  required class="form-control" type="text" name="valorForm" value="<?=$rowSelectByID['valor'];?>" > <br>
          <label> Valor de compra: </label> 
          <input  required class="form-control" type="text" name="valor1Form" value="<?=$rowSelectByID['valor_compra'];?>" > <br>  
           <label> Cantidad: </label> 
          <input  required class="form-control" type="text" name="cantidadForm" value="<?=$rowSelectByID['cantidad'];?>" > <br> <br>
          <input class="form-control"type="submit" value="Guardar" >
          
 
         
            
      
      </form>
  	</div>

    </div>


  </div>
</div>




<?php
include_once "componentes/footer.php";


?>