<?php
include_once "componentes/header.php";
echo("<meta http-equiv='refresh' content='1'>");
   session_destroy();


?>
<style>
    #contenido { 
      width: 500px;
      height: 250px;
     position: relative;
        background-image: url("images/sera.gif");

       margin-left:400px;
       margin-top: 0px;
        top: auto;
        border-radius: 15px;
        
    }

</style>
<div class="col">
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">SESION CERRADA CON EXITO!</h4>
  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div>
</div>
<div id="contenido" class="col" >
      
      
    </div>
