<?php
        
    // Realizamos las validaciones para los campos del formulario
    if(isset($_POST['nombre'])) {
        
        // Verifica si el campo nombre está vacío
        if(empty(filter_input(INPUT_POST, 'nombre'))) {
            echo "<p class='error'><i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;Campo obligatorio. Agrega tu nombre completo</p>";                 
        } 
        
        // Verifica que los datos ingresados en este campo cumplan con la cantidad mínima de caracteres especificada
        else if(strlen(filter_input(INPUT_POST, 'nombre')) < 10) {
            echo "<p class='error'><i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;Error: Debes agregar nombre y dos apellidos y solamente se permiten letras</p>";
        }
        
        // Si se cumplió con la regla solicitada se muestra un mensaje de exito
        else {
            echo "<p class='correcto'><i class='fas fa-check'></i>&nbsp;&nbsp;Escribiste tu nombre de forma correcta</p>";
        }
        
        // *****************************************************************************************************************
        
        // Verifica si el campo del teléfono está vacío        
        if(empty(filter_input(INPUT_POST, 'telefono'))) {
            echo "<p class='error'><i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;Campo obligatorio. Indique un número de teléfono</p>";
        } 
        
        // Verifica que los datos ingresados no sean diferentes a valores numéricos
        else if (!is_numeric(filter_input(INPUT_POST, 'telefono'))) {    
            echo "<p class='error'><i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;Error: No se permiten letras, espacios ni símbolos como número telefónico</p>";
        }
        
        // Verifica que los datos ingresados en este campo cumplan con la cantidad mínima de caracteres especificada
        else if(strlen(filter_input(INPUT_POST, 'telefono')) < 8) {
            echo "<p class='error'><i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;Error: La cantidad de números ingresados no corresponde a un número telefónico</p>";
        }
        
        // Si se cumplió con la regla solicitada se muestra un mensaje de exito
        else {
            echo "<p class='correcto'><i class='fas fa-check'></i>&nbsp;&nbsp;Escribiste el número telefónico de forma correcta</p>";
        }
        
        // *****************************************************************************************************************
                                     
        // Verifica si el campo 'correo' está vacío
        if(empty(filter_input(INPUT_POST, 'correo'))) {
            echo "<p class='error'><i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;Campo obligatorio. Agrega tu dirección de correo</p>";
        }
        
        // Esta función verifica que el contenido de la variable sea el correcto usando el filtro especificado
        else if (!filter_var(filter_input(INPUT_POST, 'correo'), FILTER_VALIDATE_EMAIL)) {
            echo "<p class='error'><i class='fas fa-exclamation-triangle'></i>&nbsp;&nbsp;Error: Has escrito mal tu dirección de correo</p>";
        }
        
        // Si se cumplió con la regla solicitada se muestra un mensaje de exito
        else {
            echo "<p class='correcto'><i class='fas fa-check'></i>&nbsp;&nbsp;Escribiste tu dirección de correo de forma correcta</p>";
        }
        
        // *****************************************************************************************************************
        
                                               
    }    