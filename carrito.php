<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>

    <!-- este es el link de boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- este es el link de boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <!--Este tipo de letra sera para los textos-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Jersey+20+Charted&family=Jersey+25&family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">
    <!--igualmente es pixelar numero 3-->


 
    <style>

        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            height: 100vh;
            margin: 0;
            background-color: #387C86;
            padding: 20px;

        }


        #product-list {
            max-width: 800px;
            width: 100%;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;


            font-family: "Black Ops One", serif;
            font-weight: 400;
            font-style: normal;
        }

        .product {
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;


        }

        .product button {
            padding: 8px 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;


        }

        .product button:hover {
            background-color: #0056b3;


        }


        .cart-section {
            max-width: 800px;
            width: 100%;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);

            font-family: "Black Ops One", serif;
            font-weight: 400;
            font-style: normal;
        }

        .cart-section h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;


        }


        .cart-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;

    
        }

        .cart-table th, .cart-table td {
            padding: 15px;
            border: 1px solid #ddd;
            text-align: center;

            font-family: "Black Ops One", serif;
            font-weight: 400;
            font-style: normal;
        }

        .cart-table th {
            background-color: #f4f4f4;
            color: #333;

        }

        .cart-table .total-row {
            font-weight: bold;
            background-color: #f9f9f9;
        }

        .btn-cart, .btn-checkout {
            padding: 10px;
            background-color: #3ED09F;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            margin: 10px 0;

            
        }

        .btn-cart:hover, .btn-checkout:hover {
            background-color: #555;
        }


        .btn-cart {
            background-color: #007bff;

        }

        .btn-cart:hover {
            background-color: #0056b3;

        }


        p{
            font-family: "Black Ops One", serif;
            font-weight: 400;
            font-style: normal;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #387C86;
            color: #fff;
            margin-top: 20px;
            position: relative;
            bottom: 0;
            width: 100%;

            font-family: "Black Ops One", serif;
            font-weight: 400;
            font-style: normal;
        }

        h2{
            font-family: "Black Ops One", serif;
            font-weight: 400;
            font-style: normal;
        }

    </style>
</head>
<body>


    <section id="product-list">
        <h2>Productos Disponibles</h2>
        <div class="product">
            <p>Producto 1 - $0.000</p>
            <button onclick="addToCart('Producto 1', 10.00)">Agregar al Carrito</button>
        </div>
        <div class="product">
            <p>Producto 2 - $0.000</p>
            <button onclick="addToCart('Producto 2', 15.00)">Agregar al Carrito</button>
        </div>
        <div class="product">
            <p>Producto 3 - $0.000</p>
            <button onclick="addToCart('Producto 3', 20.00)">Agregar al Carrito</button>
        </div>
    </section>

    
    <section id="cart" class="cart-section">
        <h2>Carrito de Compras</h2>
        <table class="cart-table" id="cart-table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="cart-body">
            </tbody>
            <tfoot>
                <tr class="total-row">
                    <td colspan="4">Total</td>
                    <td id="cart-total">$0.00</td>
                </tr>
            </tfoot>
        </table>
        <a href="clientes.php" class="btn-cart">Continuar Comprando</a>
        <a href="#checkout" class="btn-checkout">Proceder al Pago</a>
    </section>



<footer>
    <p>&copy; 2024 E-commerce de diego y cristopher.</p><br>
    <p>&copy; 2024 VentasOcean.</p>
</footer>
</body>
</html>