<?php
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $mensaje = htmlspecialchars($_POST['mensaje']);
    $accion = $_POST['accion'];

    $respuesta = array(
        'mensaje' => $mensaje,
        'nombre' => $nombre,
        'telefono' => $telefono,
        'email' => $email,
        'accion' => $accion
    );

    if($accion  ===  "enviar"){
        require '../funciones/db.php';
        try{
            $stmt = $conn->prepare("INSERT INTO contacto (nombre, email, telefono, mensaje ) VALUES (?,?,?,?) ");
            $stmt->bind_param("ssss", $nombre, $email, $telefono, $mensaje);
            $stmt->execute();
            if($stmt->affected_rows > 0){
                $respuesta = array(
                    'respuesta' => 'correcto',
                    'mensaje' => $mensaje,
                    'nombre' => $nombre
                );
            $stmt->close();
            $conn->close();
            }
        }catch( Exception $e){
            $respuesta = array(
                'error' => $e->getMessage(),
                'respuesta' => 'error'
            );
        }
    }   


    echo json_encode($respuesta);