<?php
session_start(); // Inicia la sesión si no está iniciada

// Comprueba si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define tus credenciales de usuario (esto podría estar en una base de datos)
    $usuarios = [
        "heber" => "123",
        "jesus" => "456",
        // Añade más usuarios según sea necesario
    ];

    // Obtiene el nombre de usuario y la contraseña enviados desde el formulario
    $USUARIO = $_POST['usuario'];
    $CONTRASENA = $_POST['contrasena'];

    // Comprueba si el usuario y la contraseña coinciden
    if (isset($usuarios[$USUARIO]) && $usuarios[$USUARIO] == $CONTRASENA) {
        // Inicia sesión y redirige al usuario a la página de inicio
        $_SESSION['USUARIO'] = $USUARIO;
        header("Location: ./inicio.php");
        exit;
    } else {
        // Si el usuario y la contraseña no coinciden, muestra un mensaje de error
        $error = "Nombre de usuario o contraseña incorrectos.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.1)), url('image.jpg'); /* Colores sólidos semitransparentes con imagen de fondo */
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }
        form {
        background-color: rgba(255, 255, 255, 0.1); /* Fondo semitransparente */
        padding: 20px;
        border-radius: 10px;
        backdrop-filter: blur(10px); /* Aplica el desenfoque */
                }


        
        
        input[type="text"]
        {
        padding: 7px;
        border: 2px solid #ccc;
        border-radius: 3px;
        font-size: 16px;
        transition: border-color 1s;
        width: 200px;
        }
        input[type="text"]:focus{
            border-color: #4D4D4D; /* Cambia el color del borde cuando está enfocado */
            outline: none; /* Quita el contorno predeterminado */
        }
        
        input[type="password"] {
        padding: 7px;
        border: 2px solid #ccc;
        border-radius: 3px;
        font-size: 16px;
        transition: border-color 1s;
        width: 200px;
        }
        input[type="password"]:focus{
            border-color: #4D4D4D; /* Cambia el color del borde cuando está enfocado */
            outline: none; /* Quita el contorno predeterminado */
        }
        input[type="submit"] {
            background-color: #4a4a4a; /* Color de fondo base (gris oscuro) */
            color: white; /* Color del texto */
            padding: 10px 20px; /* Espacio alrededor del texto */
            font-size: 16px; /* Tamaño del texto */
            border: none; /* Sin borde */
            border-radius: 5px; /* Esquinas redondeadas */
            cursor: pointer; /* Cambiar cursor al pasar por encima */

            /* Gradiente para simular efecto metálico */
            background-image: linear-gradient(180deg, #dbb406, #5c4b03);
            
            /* Sombras para resaltar el efecto metálico */
            box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.3), 
            0px 2px 5px rgba(0, 0, 0, 0.2); 
            
        }
        input[type="submit"]:hover {
            background-color: #555;
            background-image: linear-gradient(180deg, #5c4b03, #dbb406);
            
            

            
        }
    
        
    </style>
</head>
<body >
        
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" style="text-align: center;" >
            <h2>Login</h2>
            <label for="usuario">Usuario:</label>  
            <br>  
            <input type="text" id="usuario" name="usuario" required>  
            <br>  
            <label for="contrasena" >Contraseña:</label>
            <br>
            <input type="password" id="contrasena" name="contrasena" required>
            <br><br>
            <input type="submit" value="Iniciar Sesión">           
            
        </form>    
</body>
</html>


