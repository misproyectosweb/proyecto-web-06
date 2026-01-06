<!DOCTYPE html>

<!-- Esta es la sección donde se muestra los datos de la reservación del cliente -->

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
        <link href="css/mostrarDatos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="imgFondo vh-100">
            <div class="colorFondo vh-100">
                <?php
                    // Se llama al archivo que contiene los datos de conexión a la base de datos
                    require_once 'parametros.php';

                    // Se crea la cadena de conexión a la base de datos utilizando los valores almacenados en las 
                    // constantes declaradas y definidas en el archivo de parámetros
                    $conectar = mysqli_connect(SERVIDOR, USUARIO, CLAVE, DATOS, PUERTO);

                    // Recibimos los datos ingresados en cada campo del formulario
                    // Con la función mysqli_real_scape_string() se verifica si se encuentran caracteres extraños en los cuadros
                    // de texto y no los toma en cuenta para evitar que la página web sufra daños en nuestras bases de datos
                    // Además ayuda a evitar inyeccion sql por medio de símbolos sustituyéndolos por caracteres ASCII.
                    $nombre = mysqli_real_escape_string(($conectar), filter_input(INPUT_POST, 'nombre'));
                    $telefono = mysqli_real_escape_string(($conectar), filter_input(INPUT_POST, 'telefono'));
                    $correo = mysqli_real_escape_string(($conectar), filter_input(INPUT_POST, 'correo'));
                    $fecha = mysqli_real_escape_string(($conectar), filter_input(INPUT_POST, 'fechareservacion'));
                    $hora = mysqli_real_escape_string(($conectar), filter_input(INPUT_POST, 'horareservacion'));
                    $reservacion = mysqli_real_escape_string(($conectar), filter_input(INPUT_POST, 'cantreservado'));

                    // Se verifica el estado de la conexión a la base de datos
                    if (!mysqli_connect_errno()) 
                    {
                        // Se muestra un mensaje para indicar que la conexión a la base de datso se realizó con éxito
                        //echo 'Conexión exitosa' . "<br/>";

                        // Para mostrar algunos parámetros de la conexión realizada al servidor
                        //echo mysqli_get_host_info($conectar) . "<br/>";
                    } 
                    else 
                    {
                        // Se muestra en pantalla la información relacionada con el error obtenido en la conexión
                        //echo 'Error en la conexión: ' . mysqli_connect_errno() . "<br/>";

                        // Esta función permite salir completamente del programa y evita la ejecución de las líneas
                        // de código siguientes a este condicional
                        exit();
                    }

                    // Realizamos la selección de la base de datos    
                    mysqli_select_db($conectar, DATOS) or die("No se encuentra la base de datos");

                    // Especificamos el juego de caracteres para mostrar los acentos en nuestra página web
                    mysqli_set_charset($conectar, "utf8");

                    // Realizamos la consulta a la base de datos de acuerdo con la operación que vayamos a realizar sobre
                    // los datos almacenados. El caracter ?  se usa como un marcador de posición para parámetros en consultas 
                    // preparadas, lo que permite insertar valores dinámicamente sin reescribir la consulta completa, mejorando
                    // la seguridad (prevención de inyección SQL) y el rendimiento al evitar la compilación repetida de la
                    // misma estructura de consulta
                    $sql = "INSERT INTO reservaciones(Nombre, Telefono, Correo, Fecha, Hora, TotalReservaciones) VALUES(?, ?, ?, ?, ?, ?)";

                    // Esta función prepara la consulta SQL para su ejecución y mejora la seguridad al prevenir ataques de inyección SQL.
                    // Optimiza el rendimiento, devolviendo un objeto de sentencia o false si falla. Esto permite separar la lógica
                    // de la consulta de los datos, enlazando los valores a los marcadores de posición (?) 
                    $resultado = mysqli_prepare($conectar, $sql);

                    // Esta función sirve para vincular variables PHP a los marcadores de posición (?) en una sentencia SQL preparada,
                    // especificando sus tipos de datos (entero 'i', doble 'd', cadena 's', binario 'b') para prevenir inyecciones SQL
                    // y mejorar el rendimiento, permitiendo ejecutar la misma consulta múltiples veces con diferentes datos de forma segura. 
                    $estado = mysqli_stmt_bind_param($resultado, "ssssss", $nombre, $telefono, $correo, $fecha, $hora, $reservacion);

                    // Esta función se utiliza para ejecutar una consulta SQL que ha sido previamente preparada, reemplazando los marcadores
                    // de parámetros (?) por los datos reales, lo que la hace eficiente y segura contra inyecciones SQL.
                    $estado = mysqli_stmt_execute($resultado);

                    // Se verifica si la consulta se realizó correctamente
                    if ($estado == false) 
                    {
                        // Mensaje que advierte si la consulta creada tuvo fallos
                        //echo 'Error al ejecutar la consulta';
                    } 
                    else 
                    {
                        // Esta función pide como parámetro la cadena de conexión a la base de datos
                        // Devuelve el número de filas afectadas por la última consulta INSERT, UPDATE, REPLACE o DELETE en una base
                        // de datos MySQL, indicando cuántos registros fueron modificados. 
                        if (mysqli_affected_rows($conectar) == 0) 
                        {
                            // Mensaje de advetencia indicando la fallida inserción de registros en la tabla de la base de datoa
                            //echo 'No hay registros para insertar';
                        } 
                        else
                        {
                            // Mensaje indicando la inserción exitosa de los datos en la base de datos
                            echo '<br>';
                            //echo 'Se ha insertado ' . mysqli_affected_rows($conectar) . ' fila';
                            echo '<br>';
                        }
                    }

                    // Se obtene el Id del último registro insertado
                    $ultimo_id = mysqli_insert_id($conectar);

                    // Se muestra el identificador del último usuario ingrsado
                    //echo "ID del nuevo usuario: " . $ultimo_id . "<br><br>";

                    // Realizamos la consulta a la base de datos de acuerdo con la operación que vayamos a realizar sobre
                    // los datos almacenados
                    // Se visualizan los datos del último registro ingresado a la base de datos. Se le da formato correspondiente a los campos de
                    // fecha y hora
                    $sql_select = "SELECT Nombre, Telefono, Correo, DATE_FORMAT(Fecha, '%d-%m-%Y') AS Fecha, DATE_FORMAT(Hora, '%h:%i %p') AS Hora, "
                                . "TotalReservaciones FROM reservaciones WHERE id = $ultimo_id";

                    // Realiza la ejecución de la consulta a la base de datos
                    $respuesta = mysqli_query($conectar, $sql_select);

                    // Devuelve el número de filas en un conjunto de resultados. En este caso, devuelve el último registrado ingresado
                    // Se crea y se muestra la estructura del mensaje donde se alojarán los datos obtenidos
                    if (mysqli_num_rows($respuesta) > 0) {

                        echo "<div class=container>";

                        echo "<div>";

                        echo "<div class='m-3 border border-secondary rounded-lg p-2'>";

                        echo "<h2 class='text-center'>Datos de su reservación</h2>";               

                        while ($fila = mysqli_fetch_assoc($respuesta)) 
                        {                                                            
                            echo '<strong>Reservación para: </strong>' . $fila["Nombre"] . "<br/>";
                            echo '<strong>Teléfono: </strong>' . $fila["Telefono"] . "<br/>";
                            echo '<strong>Correo: </strong>' . $fila["Correo"] . "<br/>";
                            echo '<strong>Fecha reservación: </strong>' . $fila["Fecha"] . "<br/>";
                            echo '<strong>Hora reservación: </strong>' . $fila["Hora"] . "<br/>";
                            echo '<strong>Mesa para: </strong>' . $fila["TotalReservaciones"] . ' personas' . "<br/>";
                        }                

                        echo "</div>";
                        echo "</div>";
                        echo "<div class='text-center py-3'>";
                        echo "<a href='index.php' class='btn btn-primary btn-lg' role='button' aria-pressed='true'>Volver a inicio</a>";
                        echo "</div>";                                     
                        echo "</div>";

                    } 
                    else 
                    {
                        // Mensaje indicando que no fue posible localizar y mostrar los datos solicitados
                        echo "No se encontraron datos del registro solicitado";
                    }

                    // Esta función se usa para cerrar una sentencia preparada en MySQLi, liberando los recursos asociados y cancelando
                    // cualquier resultado pendiente para que puedas ejecutar nuevas consultas
                    // Es ideal para la gestión de memoria y evitar bloqueos, liberando el puntero del gestor de sentencias (mysqli_stmt)
                    mysqli_stmt_close($resultado);
                ?>
            </div>
        </div> 
        
        <!-- Archivos JavaScript utilizados por Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    </body>
</html>