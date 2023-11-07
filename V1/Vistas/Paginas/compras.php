<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>carrito de compras</title>
        
        <link rel="icon" type="Vistas/Dependencias/imagenes/png" href="Vistas/Dependencias/imagenes/WhatsApp_Image_2023-07-10_at_10_09_36_PM-M5ekvj1sa-transformed-removebg-preview.png">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

        
    </head>
    <body>

        <div class="wrapper">
            <aside>
                <header>
                        <h1 class="logo"><img src="Vistas/Dependencias/imagenes/logo campeche.jpg"></h1>
                        <h2 class="nombre">CAMPECHE</h2>
                   
                    <nav>
                        <ul>
                            <li> 
                                <a class="botonvolver" href="./pasarela.html">
                                    <i class="bi bi-arrow-return-left">Seguir comprando</i>
                                </a>
                            </li>
                            <li> 
                                <a class="botoncarrito" href="./compras.html">
                                    <i class="bi bi-bag-plus">Carrito <span class="numerito">0</span></i>  
                                </a>
                            </li>
                        </ul>
                    
                    </nav>
                </header>                   
            </aside>
            <main class="maincarrito">
                <div class="contenedor2">
                    <h1 class="tituloprincipal">CARRITO</h1>
                    <div class="contenedorcarrito">
                        <p class="carritovacio"> Tu carrito esta vacio<i class="bi bi-emoji-frown-fill"></i></p>

                        <div class="carritoproductos disabled">

                            <div class="carritoproducto">
                                <img class="carritoimagen" src="Vistas/Dependencias/imagenes/ajos.jpeg" alt="">
                                <div class="carrito-produc-titulo">
                                    <small>Titulo</small>
                                    <h3>Ajo importado</h3>
                            </div>
                            <div class="carrito-producto-cantidad">
                                <small>cantidad</small>
                                <p> 1 </p>
                            </div>
                            <div class="carrito-producto-precio">
                                <small>Precio</small>
                                <p> Libra $8.250 </p>
                            </div>
                            <div class="carrito-producto-subtotal">
                                <small>Subtotal</small>
                                <p> $8.250 </p>
                            </div>
                            <button class="productoeliminado"><i class="bi bi-trash3-fill"></i></button>
                        </div>
                                            
                        <div class="carritoproducto">
                            <img class="carritoimagen" src="Vistas/Dependencias/imagenes/platano verde.jpg" alt="">
                            <div class="carrito-produc-titulo">
                                <small>Titulo</small>
                                <h3>Platano verde</h3>
                            </div>
                            <div class="carrito-producto-cantidad">
                                <small>cantidad</small>
                                <p> 1 </p>
                            </div>
                            <div class="carrito-producto-precio">
                                <small>Precio</small>
                                <p> Unidadd $2.500 </p>
                            </div>
                            <div class="carrito-producto-subtotal">
                                <small>Subtotal</small>
                                <p> $2.500 </p>
                            </div>
                            <button class="productoeliminado"><i class="bi bi-trash3-fill"></i></button>
                        </div>
                    
                    
                    </div>
                    <div class="carritoacciones disabled">
                        <div class="carrito-acciones-izquierda">
                            <button class="carritovaciar"> Vaciar carrito </button>
                        </div>
                        <div class="carritoaccionesderecha">
                            <div class="carritoaccionestotal">
                                <p>Total:</p>
                                <p id="total"> $ 10.750 </p>
                            </div>
                            <button class="carritocomprar">Comprar ahora</button>
                            
                        </div>
                    </div>

                    <p class="carritocomprado disabled"> Muchas gracias por tu compra<i class="bi bi-emoji-smile"></i></p>
                </div>

            </main>
            <footer>
                <p class="textofooter">© 2023 campeche.com</p>
            </footer>
        </div>
    </body>
</html>