<?php
session_start();

// Verificar si la sesión está iniciada
$nombreUsuario = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : "Invitado";

include("conexion_emplea.php");
$con = connection();

$sql = "SELECT * FROM usuarios";
$query = mysqli_query($con, $sql);

$sql1 = "SELECT * FROM envios";
$query1 = mysqli_query($con, $sql1);

$sql2 = "SELECT * FROM productos";
$query2 = mysqli_query($con, $sql2);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="empleadosDise.css" rel="stylesheet">
    <!-- Bootstrap JS (bundle incluye Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!--Este tipo de letra sera para los textos-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+20+Charted&family=Jersey+25&family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">
    <!--igualmente es pixelar 1-->

    <!--Este tipo de letra sera para los textos-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Jersey+20+Charted&family=Jersey+25&family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">
    <!--igualmente es pixelar numero 3-->


    <!--Este es el link el cual le dara el tipo de letra a ocupar dentro de la pagina, me refiero al de abajo-->
    <!-- Es de tipo pixelar-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+25&display=swap" rel="stylesheet">
    <!--Este es el link el cual le dara el tipo de letra a ocupar dentro de la pagina, me refiero al de arriba-->
</head>

<style>
    /* Reset de estilos para asegurar consistencia en todos los navegadores */
h3{
  font-family: "Jersey 25", serif;
  font-weight: 400;
  font-style: normal; 
}
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

/* Estilo del cuerpo */
body {
    line-height: 1.6;
    background-color: #4EAEC2;
    color: #333;
    padding: 0 20px;
}


/* Encabezado y navegación */
header {
    background-color: #387C86;
    color: #fff;
    padding: 15px 05;
    margin-bottom: 20px;

}

nav ul {
    list-style: none;
    text-align: center;
}

nav ul li {
    display: inline;
    margin-right: 15px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 16px;
    padding: 5px 10px;
    transition: background-color 0.3s;
}

nav ul li a:hover {
    background-color: #555;
    border-radius: 5px;
}

/* Secciones del sitio */
section {
    margin-bottom: 40px;
    padding: 20px;
    background-color: #387C86;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Títulos de las secciones */
section h2, section h3 {
    color: #FFFFFF;
    margin-bottom: 20px,auto;
    text-align: center;
    font-weight: normal;

    font-family: "Jersey 25", serif;
    font-weight: 400;
    font-style: normal;
}

/* Categorías */
#categorias ul {
    list-style: none;
    padding: 0;
    text-align: center;
}

#categorias ul li {
    display: inline-block;
    margin: 0 10px;
    background-color: #687388;
}

#categorias ul li a {
    color: #0A4A50;
    text-decoration: none;
    font-weight: bold;
    padding: 10px 15px;
    transition: color 0.3s, background-color 0.3s;
}

#categorias ul li a:hover {
    color: #fff;
    background-color: #9B70EB;
    border-radius: 5px;
}

/* Carrito de compras */
#carrito {
    margin-bottom: 30px;
}

/* Pie de página */
footer {
    text-align: center;
    padding: 20px;
    background-color: #387C86;
    color: #fff;
    margin-top: 20px;
    position: relative;
    bottom: 0;
    width: 100%;
}


img {
    max-width: 60%;
    height: auto;
    margin: 20px auto;
}

h1{
   /* Esta parte contiene los cambios necesarios para la aplicacion del tipo de letra pixelar */ 
  font-family: "Jersey 25", serif;
  font-weight: 400;
  font-style: normal;
  /* Este de abajo es para centrar los textos */
  text-align: center;
  color: #FFFFFF;
}

a{
  font-family: "Black Ops One", serif;
  font-weight: 400;
  font-style: normal;
  color: #FFFFFF;
}

p{
    width: auto;
    height: auto;
    margin: auto;
    text-align: left;
    color: #1BEBD3;
    text-align: center;

    font-family: "Black Ops One", serif;
    font-weight: 400;
    font-style: normal;
}

h6{
  text-align: center;

  font-family: "Black Ops One", serif;
  font-weight: 400;
  font-style: normal;
  
  background-color: #3BE5AB;
  color: #FFFFFF;
}

.card{
    width: 100%, auto;
    height: 90vh,auto;
    margin: auto;
    background-color: #0A4A50;
    
}

.card-body .card-text input[type="submit"] {
    background-color: #387C86; /* Match your header color */
    color: #FAF270;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;

    font-family: "Jersey 25", serif;
    font-weight: 400;
    font-style: normal;
}

.card-body .card-text input[type="submit"]:hover {
    background-color: #9B70EB;
    color: #fff;

    font-family: "Jersey 25", serif;
    font-weight: 400;
    font-style: normal;
}

.caja {
    background-color: #9B70EB;

    /*font-family: "Jersey 25", serif;
    font-weight: 400;
    font-style: normal;
    */
    font-family: "Black Ops One", serif;
    font-weight: 400;
    font-style: normal;

    border-radius: 5px;
    padding: 05px 05px;
    margin: 10;
    height: 06vh;
    width: 15%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1rem;
    max-width: 100%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

h4{
    color: #FFFFFF;
    margin-bottom: 20px;
    text-align: center;
    font-weight: normal;

    font-family: "Jersey 25", serif;
    font-weight: 400;
    font-style: normal;
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
.users-form form input[type=date],
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
.users-form form input[type=date]:focus,
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

.botones-modificaciones {
    display: flex;
    flex-wrap: wrap; /* Permite que los botones se ajusten a la siguiente línea */
    justify-content: center; /* Centra los botones */
    gap: 10px; /* Espaciado entre los botones */

    font-family: "Black Ops One", serif;
    font-weight: 400;
    font-style: normal;
}

.btn {
    background-color: #9B70EB; /* Color de fondo del botón */
    color: #fff; /* Color del texto */
    padding: 10px 20px; /* Espaciado interno del botón */
    text-decoration: none; /* Elimina el subrayado */
    border-radius: 5px; /* Bordes redondeados */
    transition: background-color 0.3s; /* Transición de color de fondo */
}

.btn:hover {
    background-color: #555; /* Color de fondo al pasar el mouse */
}

</style>
<body>
    <!-- Encabezado -->
    <header>
        <nav>
           <ul>
                <h1>VentasOcean</h1>
                <li>  
                    <div class="caja">
                        <?php echo 'Administrador  '.$nombreUsuario; ?>
                    </div>
               </li>
           </ul>
            <ul>
                <li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>


    <!-- Sección de Inicio -->
    <section id="inicio">
        <h2>Bienvenido a Administrador</h2>
        <p>Aqui podra administrar todo lo que se requiera modificar dentro de la pagina.</p>
    </section>

    <!-- Sección de Categorías -->
    <section id="categorias">
        <h3>Modificaciones</h3>
        <div class="botones-modificaciones">
            <a href="#Mostrar_user" class="btn">Cambiar Cargo</a>
            <a href="#Mostrar_user" class="btn">Eliminar Usuario</a>
            <a href="#Mostrar_user" class="btn">Mostrar Usuarios</a>
            <a href="#crear_user" class="btn">Crear un Usuario</a>
            <a href="#crear_env" class="btn">Crear Envío</a>
            <a href="#crear_env" class="btn">Cancelar Envío</a>
            <a href="#crear_env" class="btn">Modificar Envío</a>
            <a href="#modificar_stock" class="btn">Modificar Stock</a>
            <a href="#crear_stock" class="btn">Agregar Stock</a>
       </div>
    </section>
    <section class="metodos_emple">
            <h3>Crear un Usuario</h3>
            <div id="crear_user">
          <div class="users-form">
              <form action="crearUsuarios.php" method="POST">
                   <input type="text" name="usuario" placeholder="usuario">
                   <input type="password" name="clave" placeholder="clave">
                   <select name="id_cargo">
                        <option value="3">Seleccione el Cargo</option>
                        <option value="1">Administrador</option>
                        <option value="2">Cliente</option>
                    </select> 
                   <input type="email" name="correo" placeholder="correo">
                   <input type="submit" value="Agregar">
              </form>
          </div>
    </section>
    <section class="metodos_emple">
            <h3>Usuarios registrados</h3>
            <div id="Mostrar_user">
            <div class="users-table">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Clave</th>
                    <th>Id Cargo</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['usuario'] ?></th>
                        <th><?= $row['clave'] ?></th>
                        <th><?= $row['id_cargo'] ?></th>
                        <th><?= $row['correo'] ?></th>
                        <th><a href="modificar2.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="eliminar.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    </section>

    <section class="metodos_emple">
            <h3>Registrar un envio</h3>
            <div id="crear_env">
          <div class="users-form">
              <form action="agregar_envio.php" method="POST">
                   <input type="text" name="producto" placeholder="ingrese un producto">
                   <input type="text" name="marca" placeholder="ingrese la marca del producto">
                   <input type="text" name="cantidad" placeholder="ingrese la cantidad">
                   <input type="text" name="direccion" placeholder="ingrese la direccion">
                   <input type="date" name="fecha_envio" placeholder="ingrese la fecha de envio">
                   <input type="submit" value="Agregar">
              </form>
          </div>
    </section>

    <section class="metodos_emple">
    <h3>Registro de envios</h3>
            <div id="crear_envio">
            <div class="users-table">
        <table>
            <thead>
                <tr>
                    <th>ID_Producto</th>
                    <th>Producto</th>
                    <th>Marca</th>
                    <th>Cantidad</th>
                    <th>Direccion</th>
                    <th>Fecha</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query1)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['producto'] ?></th>
                        <th><?= $row['marca'] ?></th>
                        <th><?= $row['cantidad'] ?></th>
                        <th><?= $row['direccion'] ?></th>
                        <th><?= $row['fecha_envio'] ?></th>
                        <th><a href="modificarEnv.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="eliminar_Env.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    </section>

    <section class="metodos_emple">
            <h3>Administrar Stock</h3>
            <div id="crear_stock">
          <div class="users-form">
              <form action="agregar_stock.php" method="POST">
                   <input type="text" name="producto" placeholder="ingrese un producto">
                   <input type="text" name="marca" placeholder="ingrese la marca del producto">
                   <input type="text" name="cantidad" placeholder="ingrese la cantidad">
                   <input type="text" name="precio" placeholder="ingrese el precio">
                   <input type="text" name="descripcion" placeholder="ingrese la descripcion">
                   <input type="text" name="categoria" placeholder="ingrese la categoria">

                   <input type="submit" value="Agregar">
              </form>
          </div>
    </section>

    <section class="metodos_emple">
            <h3>Modificar Stock</h3>
            <div id="modificar_stock">
            <div class="users-table">
        <table>
            <thead>
                <tr>
                    <th>ID Producto</th><br>
                    <th>Producto</th><br>
                    <th>Marca</th><br>
                    <th>Cantidad</th><br>
                    <th>Precio</th><br>
                    <th>Descripcion</th><br>
                    <th>Categoria</th><br>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query2)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['producto'] ?></th>
                        <th><?= $row['marca'] ?></th>
                        <th><?= $row['cantidad'] ?></th>
                        <th><?= $row['precio'] ?></th>
                        <th><?= $row['descripcion'] ?></th>
                        <th><?= $row['categoria'] ?></th>
                        <th><a href="administrarStock.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="eliminarStock.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    </section>
    <footer>
        <p>&copy; 2024 E-commerce de diego y cristopher.</p><br>
        <p>&copy; 2024 VentasOcean.</p>
    </footer>

</body>
</html>
