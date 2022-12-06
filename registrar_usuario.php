<?php
//nuevoproducto1
include_once "componentes/headeradmin.php";

?>
<style>
    #contenido {
        width: 50%;
        height: 450px;
        background-color: #f8f9fa;
        right: 250px;
        top: 50px;
        border-radius: 15px;

    }


    .ocultar {
        display: none;
    }

    .mostrar {
        display: block;
    }
</style>

<div id="msg"></div>

<!-- Mensajes de Verificación -->
<div id="error" class="alert alert-danger ocultar" role="alert">
    Las Contraseñas no coinciden, vuelve a intentar !
    
</div>
<div id="ok" class="alert alert-success ocultar" role="alert">
    Las Contraseñas coinciden ! (Procesando formulario ... )
</div>
<!-- Fin Mensajes de Verificación -->
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
                        <a href="mostrarusuarios.php" class="nav-link link-dark" aria-current="page" >
                            
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#home" />
                            </svg>
                            mostra usuarios
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
                        <a href="#" class="nav-link link-dark">
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
            <span>
                <h1>AGREGAR NUEVO USUARIO</h1>
            </span>
            <br>
            <form id="miformulario" onsubmit="verificarPasswords(); return false" method="post" action="registrar_usuariobd.php">
                <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" required>
                </div>
                <div class="form-group">
                    <label for="pass1">Contraseña</label>
                    <input type="password" class="form-control" id="pass1" name="pass1" required>
                </div>
                <div class="form-group">
                    <label for="pass2">Vuelve a escribir la Contraseña</label>
                    <input type="password" class="form-control" id="pass2" required>
                </div>
                <div class="form-group">
                    <select class="form-select" aria-label="Disabled select example" id='rol' name ="rol" required>
                    
                        <option value=1>Admin</option>
                        <option value=2>Asesor</option>
                        <option value=3>Bodega</option>
                    </select>
                </div>

                <button type="submit" id="login" class="form-control">Agregar</button>
            </form>



        </div>


    </div>
</div>
<script>
    function verificarPasswords() {

        // Ontenemos los valores de los campos de contraseñas 
        pass1 = document.getElementById('pass1');
        pass2 = document.getElementById('pass2');

        // Verificamos si las constraseñas no coinciden 
        if (pass1.value != pass2.value) {

            // Si las constraseñas no coinciden mostramos un mensaje 
            document.getElementById("error").classList.add("mostrar");

            return false;
        } else {

            // Si las contraseñas coinciden ocultamos el mensaje de error
            document.getElementById("error").classList.remove("mostrar");

            // Mostramos un mensaje mencionando que las Contraseñas coinciden 
            document.getElementById("ok").classList.remove("ocultar");

            // Desabilitamos el botón de login 
            document.getElementById("login").disabled = true;

            // Refrescamos la página (Simulación de envío del formulario) 
            document.miformulario.submit()

            return true;
        }

    }
</script>