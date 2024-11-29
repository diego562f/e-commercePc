<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <!--tipo de letra titulos-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+20+Charted&family=Jersey+25&family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">
    <!--tipo de letra titulos-->

    <!--Este tipo de letra sera para los textos-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Jersey+20+Charted&family=Jersey+25&family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">
    <!--igualmente es pixelar numero 3-->

    <style>
        /* Estilo para centrar el contenido en toda la página */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 150vh,auto; /* Altura de la ventana de visualización */
            margin: 10;
            background-color: #4EAEC2;
            font-family: "Jersey 25", serif;
            font-weight: 400;
            font-style: normal;
        }

        /* Estilo para la sección de Iniciar Sesión */
        .login-section {
            max-width: 500px; /* Aumenta el ancho máximo a 500px */
            padding: 50px;
            background-color: #1BEBD3;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .login-section h2 {
            margin-bottom: 20px;
            color: #333;
        }

        /* Estilo del formulario */
        .login-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            text-align: left;
        }

        .form-group label {
            margin-bottom: 5px;
            color: #333;
            font-family: "Jersey 25", serif;
            font-weight: 600;
            font-style: normal;
        }

        .form-group input {
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 4px;
            outline: none;
            transition: border-color 0.3s;
            background-color: #9BB49F;
            
            font-family: "Black Ops One", serif;
            font-weight: 400;
            font-style: normal
        }

        .form-group input:focus {
            border-color: #333;
            background-color: #3ED09F;
            color: #000;
            
        }

        /* Estilo del botón */
        .btn-login, .btn-register {
            padding: 10px;
            background-color: #C2CC3D;
            color: #000;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            text-decoration: none; /* Para enlaces estilo botón */
            display: inline-block; /* Para que el enlace se vea como botón */
            text-align: center;
            margin-top: 10px; /* Espacio entre los botones */

            /*font-family: "Jersey 25", serif;
            font-weight: 400;
            font-style: normal;
            */

            font-family: "Black Ops One", serif;
            font-weight: 400;
            font-style: normal
        }

        .btn-login:hover, .btn-register:hover {
            background-color: #E4BCE8;
        }

        /* Enlace de recuperación de contraseña */
        .login-form p {
            margin-top: 10px;
        }

        .login-form p a {
            color: #3ED09F;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }

        .login-form p a:hover {
            color: #3ED09F;
        }

        h2{
         font-family: "Jersey 25", serif;
         font-weight: 400;
         font-style: normal;
         color: white;
        }

        p{
            /*font-family: "Jersey 25", serif;
            font-weight: 400;
            font-style: normal;
            */
            font-family: "Black Ops One", serif;
            font-weight: 400;
            font-style: normal
        }
    </style>
</head>
<body>
<div class="container">

    <hr>
    <?php
    if (isset($_GET['error'])) {
        ?>
        <p class="error">
           <?php
           echo $_GET['error']
        ?>
      </p>
     <?php
    }
    ?>

    </hr>
    
    <section id="login" class="login-section">
       <form action="inicio.php" method="post">
           <h2>Iniciar Sesión</h2>
            <div class="form-group">
                <label for="usuario">Nombre de Usuario:</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese su nombre" required>
            </div>
            <div class="form-group">
                <label for="clave">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="clave" placeholder="Ingrese su clave" required>
            </div>
            <input type="submit" class="btn-login" value="Ingresar">
        </form>
        <p><a href="registro.php">Regístrate</a></p>
        <p><a href="index.html" class="btn-back">Volver a la pagiana principal</a></p>
        
    </section>
</div>
</body>
</html>

            