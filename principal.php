<?php

include_once "componentes/header.php";





?>
<style>
    #contenido { 
     min-width: 70%;
      min-height: 100%;
      background-color: #f8f9fa;
      position: relative;
      right: 50px;
      top: auto;
      border-radius: 15px;
    }
    #todo{
      background-color: aliceblue ; 
    }
  </style>



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
      <a href="#" class="nav-link active" aria-current="page">
        <svg class="bi me-2" width="16" height="16">
          <use xlink:href="#home" />
        </svg>
        mostrar inventario
      </a>
    </li>
    <li>
      <a href="seccionagregar.php"class="nav-link link-dark">
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
      <a href="#"nav-link link-dark">
        <svg class="bi me-2" width="16" height="16">
          <use xlink:href="#grid" />
        </svg>
        Facturacion
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
      
      <span > <h1>PRODUCTOS DISPONIBLES</h1> </span>
      
   
      <?php 
      include "productos.php";
      ?>
    </div>


  </div>



<?php
include_once "componentes/footer.php";


?>