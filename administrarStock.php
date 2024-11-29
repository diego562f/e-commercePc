<?php 
    include("conexion_emplea.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM productos WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
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
    background-color: #4EAEC2;
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
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="empleadosDise.css" rel="stylesheet">
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
        <title>Modificar envios</title>
        
    </head>
    <body>
        <div class="users-form">
        <h3>Actualizar Stock de Productos</h3>
            <form action="modificarStock.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="producto" placeholder="producto" value="<?= $row['producto']?>">
                <input type="text" name="marca" placeholder="marca" value="<?= $row['marca']?>">
                <input type="text" name="cantidad" placeholder="cantidad" value="<?= $row['cantidad']?>">
                <input type="text" name="precio" placeholder="precio" value="<?= $row['precio']?>">
                <input type="text" name="descripcion" placeholder="descripcion" value="<?= $row['descripcion']?>">
                <input type="text" name="categoria" placeholder="categoria" value="<?= $row['categoria']?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>

