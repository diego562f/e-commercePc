<?php
session_start();
include("conexion_emplea.php");
$con = connection();
?>

<style>
        * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

html {
    font-family: 'Segoe UI', sans-serif;
    text-align: center;
}

a{
    text-decoration: none;
}

.users-form form{
    display: flex;
    flex-direction: column;
    gap: 24px;
    width: 30%;
    margin: 20px auto;
    text-align: center;
}

.users-form form input{
    font-family: 'Segoe UI', sans-serif;
}

.users-form form input[type=text],
.users-form form input[type=password],
.users-form form input[type=email],
.users-form form input[type=email]{
    padding: 8px;
    border:2px solid #aaa;
    border-radius:4px;
    outline:none;
    transition:.3s;
    background-color: #1BEBD3;
    color: #000;

    font-family: "Black Ops One", serif;
    font-weight: 400;
    font-style: normal;
}

.users-form form input[type=text]:focus,
.users-form form input[type=password]:focus,
.users-form form input[type=email]:focus,
.users-form form input[type=password]:focus{
    border-color:dodgerBlue;
    box-shadow:0 0 6px 0 dodgerBlue;
    background-color: #E4BCE8;
    color: #000;
}

.users-form form input[type=submit]{
    border: none;
    padding: 12px 50px;
    text-decoration: none;
    transition-duration: 0.4s;
    cursor: pointer;
    border-radius: 5px;
    background-color: #C5B49F; 
    color: black; 
    border: 2px solid #60a100;

    font-family: "Black Ops One", serif;
    font-weight: 400;
    font-style: normal;
}

.users-form form input[type=submit]:hover {
    background-color: #E4BCE8;
    color: #000;
}

.users-table table{
    border: 1px solid #ccc;
    border-collapse: collapse;
    margin: 0;
    padding: 0;
    width: 100%;
    table-layout: fixed;
}

table tr {
    background-color: #f8f8f8;
    border: 1px solid #ddd;
    padding: 4px;
}

table th{
    padding: 16px;
    text-align: center;
    font-size: .85em;
}

.users-table--edit{
    background: #009688;
    padding: 6px;
    color: #fff;
    text-align: center;
    font-weight: bold;
}
.users-table--delete{
    background: #b11e1e;
    padding: 6px;
    color: #fff;
    text-align: center;
    font-weight: bold;
}


body {
    justify-content: center;
    align-items: center;
    height: 50vh,auto; /* Altura de la ventana de visualización */
    margin: 0;
    background-color: #4487C1;
}

.form-group input:focus {
    border-color: #333;
    background-color: #3ED09F;
    color: #000;
    
}

.form-group input {
    padding: 10px;
    font-size: 14px;
    border: 1px solid #ddd;
    border-radius: 4px;
    outline: none;
    transition: border-color 0.3s;
    background-color: #9BB49F;
}

select{
    background-color: #1BEBD3;
    color: #000;
    border-color:dodgerBlue;
    box-shadow:0 0 6px 0 dodgerBlue;
    color: #000;

    font-family: "Black Ops One", serif;
    font-weight: 400;
    font-style: normal;
}

h3{
  font-family: "Black Ops One", serif;
  font-weight: 400;
  font-style: normal;
  /* Este de abajo es para centrar los textos */
  text-align: center;
  color: #FFFFFF;
}

section {
    color: #FFFFFF;
    margin-bottom: 20px;
    text-align: center;
    font-weight: normal;

    font-family: "Black Ops One", serif;
    font-weight: 400;
    font-style: normal;
}


</style>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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

</head>

<body>

    <section class="metodos_emple">
            <h3>Registrarse </h3>
          <div class="users-form">
              <form action="registro_inicio.php" method="POST">
                   <input type="text" name="usuario" placeholder="Cree su usuario" required>
                   <input type="password" name="clave" placeholder="Cree una clave" required>
                   <select name="id_cargo" required>
                        <option value="3" required>Seleccione un Cargo</option>
                        <option value="1" required>Administrador</option>
                        <option value="2" required>Cliente</option>
                    </select> 
                   <input type="email" name="correo" placeholder="Ingrese un correo" required>
                   <input type="submit" value="Agregar">
                   <p><a href="inicio_de_secion.php" class="btn-back">Volver a Iniciar Sesión</a></p>
                   <p><a href="index.html" class="btn-back">Volver a la pagiana principal</a></p>
              </form>
          </div>
    </section>
</body>
</html>
