<!DOCTYPE html>

<!-- Creación de una Landing Page o página de aterrizaje para un restaurante. Esta es la sección de presentación -->

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
        <link href="css/inicio.css" rel="stylesheet" type="text/css"/>
    </head>
    
    <body>
    
        <!-- Sección principal -->
        <div class="imgFondo">
            <div id="inicio" class="container-fluid">
                
                <header class="row p-3">
                    <div class="col-xl-8">
                        <img src="imagenes/logo_2.png" class="w-100" alt="imagen logo pizzería"/>
                    </div>
                </header>
                
                <main>
                    <div class="row py-4">
                        <div class="col-xl-3 align-content-center text-center">
                            <img src="imagenes/imgChef_2.png" class="img-fluid" alt="Imagen de un chef pizzero"/>                        
                        </div>

                        <div class="col-xl-5 d-flex flex-column align-items-center">
                            <h1 class="mb-0 titulo1" style="color: #ffcc00;">Bienvenidos</h1>
                            <p class="my-4 texto1 display-4 text-white text-center">Sea testigo de una auténtica y extraordinaria experiencia de sabores</p>
                            <h2 class="mb-0 titulo2 display-4 text-white text-center">¡¡Acompáñenos!!</h2>
                            <div class="text-white text-center py-5">
                                <a href="contacto.php" class="btn btn-primary btn-lg" role="button">Haga aquí su reservación</a>
                            </div>
                        </div>

                        <div class="col-xl-4 align-content-center text-center">
                            <img src="imagenes/imgPizza.png" class="img-fluid" alt="Imagen de una pieza de pizza y sus ingredientes"/>
                        </div>
                    </div>                    
                </main>
            </div>
        </div>
                        
        <?php
            // put your code here
        ?>
        
        <!-- Archivos JavaScript utilizados por Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>