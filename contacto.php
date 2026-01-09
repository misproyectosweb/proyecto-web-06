<!DOCTYPE html>

<!-- Creación de una Landing Page o página de aterrizaje para un restaurante. Esta es la sección de contacto -->

<html lang="es">
    <head>
        <title>Pizzería Costa Rica</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="imagenes/logoPizza_1.png"/>
        
        <!-- Utilizando Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=MonteCarlo&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
        
        <!-- Utilizando Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"/>
        
        <!-- Utilizando iconos -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
        
        <!-- Archivos css -->
        <link href="css/contacto.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <div class="container-fluid">
            <div class="row justify-content-around">
                
                <!-- Formulario de contacto para reservaciones en el restaurante -->
                <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-4 p-4">
                    <form action="mostrarDatos.php" method="post" class="border border-dark-50 p-3 needs-validation" novalidate>
                        <h1 class="titulo2 text-center">¡Te estamos esperando!</h1>
                        <h3 class="titulo2 text-center">Haz pronto tu reservación</h3>
                        <hr class="border-dark-50">
                        <div class="form-group mb-3">
                            <label for="nombre">Reservación a nombre de:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="" required>
                            <div class="valid-feedback is-valid">¡OK, válido!</div>
                            <div class="invalid-feedback is-invalid">Completa el campo. Ingresa tu nombre y apellidos</div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="telefono">Teléfono:</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" value="" required>
                            <div class="valid-feedback is-valid">¡OK, válido!</div>
                            <div class="invalid-feedback is-invalid">Completa el campo. Ingresa tu número de celular</div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="correo">Correo electrónico:</label>
                            <input type="text" class="form-control" id="correo" name="correo" value="" required>
                            <div class="valid-feedback is-valid">¡OK, válido!</div>
                            <div class="invalid-feedback is-invalid">Completa el campo. Ingresa un dirección de correo válida</div>
                        </div>
                        <div class="form-row pb-3 justify-content-between">
                            <div class="col-5 form-group mb-3">
                                <label for="fechareservacion">Fecha reservación:</label>
                                <input type="date" class="form-control" id="fechareservacion" name="fechareservacion" value="" required>
                                <div class="valid-feedback is-valid">¡OK, válido!</div>
                                <div class="invalid-feedback is-invalid">Completa el campo. Ingresa una fecha para reservación</div>
                            </div>
                            <div class="col-5 form-group mb-3">
                                <label for="horareservacion">Hora reservación:</label>
                                <input type="time" class="form-control" id="horareservacion" name="horareservacion" value="" required>
                                <div class="valid-feedback is-valid">¡OK, válido!</div>
                                <div class="invalid-feedback is-invalid">Completa el campo. Ingresa una hora para reservación</div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="cantreservado">Total de personas para la reservación:</label>
                            <select id="cantreservado" name="cantreservado" class="form-select form-control" aria-label="Large select example" required>
                                <option selected value="">Seleccione una cantidad</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                            <div class="valid-feedback is-valid">¡OK, válido!</div>
                            <div class="invalid-feedback is-invalid">Ingresa el total de personas para la reservación</div>
                        </div>
                        <input type="submit" id="boton" class="btn btn-primary p-2 my-2" name="enviar" value="Solicita tu reservacón de inmediato">
                        
                        <?php
                            require 'validaciones.php';
                        ?>
                    </form>
                </div>
                
                <!-- Sección de contacto, redes sociales y horario de servicio -->
                <div class="col-12 col-sm-12 col-md-10 col-lg-6 col-xl-4">
                    <h4 class="my-4 titulo2">Contáctenos:</h4>
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item text-decoration-none text-dark border-0"><i class="bi bi-geo-alt mr-3"></i>Lorem ipsum dolor sit, consectetur adipiscing Morbi luctus malesuada</a>
                        <a href="https://www.waze.com/es" target="_blank" class="list-group-item text-decoration-none text-dark border-0"><i class="fa-brands fa-waze mr-3"></i>Av. 1, st. 1, Lorem ipsum dolor</a>
                        <a href="#" class="list-group-item text-decoration-none text-dark border-0"><i class="bi bi-headset mr-3"></i>800-123-pizzeriacr</a>
                        <a href="https://web.whatsapp.com/" target="_blank" class="list-group-item text-decoration-none text-dark border-0"><i class="bi bi-whatsapp mr-3"></i>(+000) 1234-7890</a>
                        <a href="https://web.telegram.org/k/" target="_blank" class="list-group-item text-decoration-none text-dark border-0"><i class="bi bi-telegram mr-3"></i>(+000) 1234-5678</a>
                        <a href="#" class="list-group-item text-decoration-none text-dark border-0"><i class="bi bi-envelope mr-3"></i>lorem_ipsum@mail.com</a>
                    </div>
                    
                    <h4 class="my-4 titulo2">Síguenos en nuestras redes sociales:</h4>
                    <div class="d-flex flex-row justify-content-around">
                        <a href="https://www.facebook.com/" target="_blank"><i class="redes bi bi-facebook text-info"></i></a>
                        <a href="https://instagram.com/" target="_blank"><i class="redes bi bi-instagram text-info"></i></a>
                        <a href="https://www.youtube.com/" target="_blank"><i class="redes bi bi-youtube text-info"></i></a>
                        <a href="https://www.tiktok.com/" target="_blank"><i class="redes bi bi-tiktok text-info"></i></a>
                        <a href="https://x.com/?lang=es" target="_blank"><i class="redes fa-brands fa-x-twitter text-info pt-2"></i></a>
                    </div>
                    
                    <h4 class="my-4 titulo2">Nuestro horario de servicio:</h4>
                    <p><i class="bi bi-calendar3 mr-2"></i>Martes a Domingo</p>
                    <p><i class="bi bi-clock mr-2"></i>11:00 a.m. - 10:00 p.m.</p>
                </div>
                
                <!-- Imagen de una pizza -->
                <div class="d-flex align-items-center col-12 col-sm-12 col-md-10 col-lg-6 col-xl-3 mt-3">
                    <img src="imagenes/fondoPizzas_01.jpg" class="img-fluid border border-secondary rounded mx-auto d-block" alt=""/>
                </div>                
            </div>
            
            <!-- Botón para regresar al menú inicio -->
            <div class="row justify-content-end mt-3 mr-4">
                <a href="index.php" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Volver<i class="bi bi-arrow-up ml-2"></i></a>
            </div>            
            <hr>
            
            <!-- Enlaces a las páginas de los productos del resturante -->
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h4 class="mb-0 titulo2 text-center">¡Dale un vistazo a todo lo que te ofrecemos!</h4>
                </div>
            </div>            
            <div class="row justify-content-around align-items-center flex-nowrap pt-4 text-center">
                <a href="http://localhost:8585/PracticasPHP/ProyectoWeb_Restaurante_1/paginaAperitivos.php" target="_blank"><img src="imagenes/dbjPapas.png" class="w-75" alt="imagen de una bolsa de papas fritas"/></a>
                <a href="http://localhost:8585/PracticasPHP/ProyectoWeb_Restaurante_1/paginaPizzas.php" target="_blank"><img src="imagenes/dbjPizza.png" class="w-75" alt="imagen de una pizza completa"/></a>
                <a href="http://localhost:8585/PracticasPHP/ProyectoWeb_Restaurante_1/paginaPastas.php" target="_blank"><img src="imagenes/dbjPastas.png" class="w-75" alt="imagen de un plato de pasta"/></a>
                <a href="http://localhost:8585/PracticasPHP/ProyectoWeb_Restaurante_1/paginaHamburguesas.php" target="_blank"><img src="imagenes/dbjHamburguesa.png" class="w-75" alt="imagen de una hamburguesa"/></a>
                <a href="http://localhost:8585/PracticasPHP/ProyectoWeb_Restaurante_1/paginaBebidas.php" target="_blank"><img src="imagenes/dbjBebida.png" class="w-75" alt="imagen de un refresco"/></a>
                <a href="http://localhost:8585/PracticasPHP/ProyectoWeb_Restaurante_1/paginaPostres.php" target="_blank"><img src="imagenes/dbjPostre.png" class="w-75" alt="imagen de un postre"/></a>                
            </div>                                    
            <hr>
            <div class="row justify-content-center mb-3">
                <i class="far fa-copyright mr-2"></i><small>Lorem ipsum dolor sit amet 2025 - consectetur elit adipiscing</small>
            </div>
        </div>
                                
        <!-- Validaciones de campos del formulario -->
        <!-- Función que permite deshabilitar el envío de datos en formularios si hay campos inválidos-->
        <script>
            
            // Función que permite la deshabilitación del envío de datos en formularios si hay campos inválidos
            (function() {
                
                'use strict';
                window.addEventListener('load', function() {

                    // Obtener todos los campos del formulario a los que queremos aplicar estilos de validación de Bootstrap personalizados
                    var forms = document.getElementsByClassName('needs-validation');

                    // Recorre los campos del formulario y evita que el form se envíe de forma inmediata
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                        form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })(); 
        </script>        
                        
        <!-- Archivos JavaScript utilizados por Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        
    </body>
</html>
