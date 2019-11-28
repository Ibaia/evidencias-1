<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

switch ($_SERVER['REQUEST_METHOD']) {
    case "POST": { 
        /*  
            PASO 15. Llega $_POST["fileInBase64"] ==> 'data:image/png;base64,AAAFBfj42Pj4...';
            Se obtiene el contenido limpio del fichero, sin cabecera de tipo de archivo
        */
        $fileBase64 = explode(',', $_POST["fileInBase64"])[1];

        // PASO 16. Se convierte de base64 a binario/texto para almacenarlo
        $file = base64_decode($fileBase64);

        /* 
            PASO 17. Se especifica el directorio donde se almacenarán los ficheros 
            (se crea si no existe)
        */
        $writable_dir = 'uploads/';
        if(!is_dir($writable_dir)){mkdir($writable_dir);}
        
        // PASO 18. Se escribe el archivo
        file_put_contents($writable_dir.$_POST["fileName"], $file,  LOCK_EX);     

        // PASO 19. la descripción la guardaríamos en la base de datos
        $description = $_POST["fileDescription"];

        // PASO 20. Se envia la respuesta "Archivo recibido" al cliente.
        echo "Archivo recibido";
    }break;
}