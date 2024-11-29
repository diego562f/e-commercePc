<?php
session_start();

// Verificar si la sesión está iniciada
$nombreUsuario = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : "Invitado";


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>herramientas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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
    margin-bottom: 20px;
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
.row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.col-md-4 {
    flex: 0 -1 30%; /* Ajusta el ancho según tus necesidades */
    margin-bottom: 40px;
}

div p a{
color: white;
}

</style>
<body>
<header>
        <nav>
            <h1>VentasOcean</h1>
            <ul>
                <li>  
                    <div class="caja">
                        <?php echo 'Usuario:  '.$nombreUsuario; ?>
                    </div>
               </li>
                <li><a href="carrito.php">Carrito</a></li>
                <li><a href="clientes.php">Volver</a></li>
            </ul>
        </nav>
    </header>

<section class="productos">
            <h2>Herramientas</h2>
            <div id="herramientas">
            <div class="row">

                <div class="col-md-4">
                    <div class="card">
                        <img src="Taladro_Percutor.jpeg" class="card-img-top" alt="taladro percutor">
                        <div class="card-body">
                            <h6 class="card-title">Taladro Percutor Bosch GSB 550 RE 550W7</h6>
                            <p class="card-text">Taladro Percutor, cuenta con un motor de 550W de utilidad para diferentes materiales.</p><br>
                            <p class="card-text"><strong>Precio: $54.000</strong></p>
                            <p class="card-text"><input type="submit" value="Agregar al Carrito"></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="Sierracircular.JPEG" class="card-img-top" alt="sierra circular">
                        <div class="card-body">
                            <h6 class="card-title">Sierra circular Makita 1800W</h6>
                            <p class="card-text">Esta sierra tiene un motor 8,2 AMP, genera cortes 0° a -56° u positivos de 22,5°, 45° y 56°.</p><br>
                            <p class="card-text"><strong>Precio: $126.000</strong></p>
                            <p class="card-text"><input type="submit" value="Agregar al Carrito"></p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card">
                        <img src="Lijadora_Roto_orbital_Stanley.JPEG" class="card-img-top" alt="lijadora stanley">
                        <div class="card-body">
                            <h6 class="card-title">Lijadora Roto-orbital Stanley Ss30-b2c 300w</h6>
                            <p class="card-text"> Lijadora con regulador de velocidad, motor de 300W y recolector de polvo.</p><br><br><br><br>
                            <p class="card-text"><strong>Precio:  $60.000</strong></p>
                            <p class="card-text"><input type="submit" value="Agregar al Carrito"></p>
                        </div>
                    </div>
                </div><br><br>

                <br><br><div class="col-md-4">
                    <div class="card">
                    <img src="Esmeril_Angular.JPEG" class="card-img-top" alt="lijadora stanley">
                        <div class="card-body">
                            <h6 class="card-title">Esmeril Angular 4-1/2</h6>
                            <p class="card-text">Esmeril Angular 4 1/2 de la marca Makita este cuenta con un motor de 720W, disco de diametro de 115mm, peso de 1,9kg y un cable de aproximadamente 2,5mts.</p>
                            <p class="card-text"><strong>Precio: $65.000</strong></p>
                            <p class="card-text"><input type="submit" value="Agregar al Carrito"></p>
                        </div>
                    </div>
                </div>

                <br><br><div class="col-md-4">
                    <div class="card">
                    <img src="herramienta_cortatubos.png" class="card-img-top" alt="cortador de tubos pvc">
                        <div class="card-body">
                            <h6 class="card-title">Cortador de tubos PVC</h6>
                            <p class="card-text">Cortador de tubos de PVC de la marca Redline, con la capacidad de cortar hasta 28mm, tiene un ancho de 14cm.</p>
                            <p class="card-text"><strong>Precio:  $65.000</strong></p>
                            <p class="card-text"><input type="submit" value="Agregar al Carrito"></p>
                        </div>
                    </div>
                </div>

                <br><br><div class="col-md-4">
                    <div class="card">
                    <img src="herramienta_llave1.png" class="card-img-top" alt="Llave para tubo">
                        <div class="card-body">
                            <h6 class="card-title">Llave para tubo de acero inoxidable</h6>
                            <p class="card-text">Llave para tubos de acero inoxidable de la marca Ubermann y su capacidad de apertura es de 25 mm.</p>
                            <p class="card-text"><strong>Precio: $17.000</strong></p>
                            <p class="card-text"><input type="submit" value="Agregar al Carrito"></p>
                        </div>
                    </div>
                </div>


                <br><br><div class="col-md-4">
                    <div class="card">
                    <img src="herramienta_caladora.png" class="card-img-top" alt="Sierra caladora">
                        <div class="card-body">
                            <h6 class="card-title">Sierra caladora electrica Lernen</h6>
                            <p class="card-text"><p class="card-text">Sierra caladora de la marca Lernen con una potencia de 400W, su voltaje es de 220V, pesa alrededor de 1,3kg y su velocidad es de 3000 RPM.</p><br>
                            <p class="card-text"><strong>$16.000</strong></p>
                            <p class="card-text"><input type="submit" value="Agregar al Carrito"></p>
                        </div>
                    </div>
                </div>



                <br><br><div class="col-md-4">
                    <div class="card">
                    <img src="herramienta_martillogoma.png" class="card-img-top" alt="cortador de tubos pvc">
                        <div class="card-body">
                            <h6 class="card-title">Martillo Suave Doble Cara</h6>
                            <p class="card-text">Martillo doble cara, una de sus caras esta recubierta por plastico y goma, es de la marca Toolmak, su peso es de aprocimadamente 200g, tiene un tamaño de aproximadamente 29cm, su mango es de fibra de vidrio.</p>
                            <p class="card-text"><strong>Precio: $7.150</strong></p>
                            <p class="card-text"><input type="submit" value="Agregar al Carrito"></p>
                        </div>
                    </div>
                </div>



                <br><br><div class="col-md-4">
                    <div class="card">
                    <img src="herramienta_soplete.png" class="card-img-top" alt="cortador de tubos pvc">
                        <div class="card-body">
                            <h6 class="card-title">Soplete portatil Pg800</h6>
                            <p class="card-text">Soplete de la marca Providus el gas utilizado por este soplete es el butano, el encendido es manual, la temperatura maxima alcanzada es de 1200°C, pesa 565g y la llama es ajustable.</p>
                            <p class="card-text"><strong>Precio: 20.000</strong></p>
                            <p class="card-text"><input type="submit" value="Agregar al Carrito"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <p><a href="clientes.php" class="btn-back">Volver</a></p>
            </div>

        </section>

    <footer>
    <p>&copy; 2024 E-commerce de diego y cristopher.</p><br>
    <p>&copy; 2024 VentasOcean.</p>
    </footer>
</body>
</html>