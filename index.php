<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Tienda de Camisetas</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Tienda de camisetas online. Encuentra camisetas de calidad a precios increíbles.">
        <link rel="stylesheet" href="assets/css/styles.css"/>
    </head>
    <body>
        <div class="container">
            <header id="header">
                <div id="logo">
                    <a href="index.php">
                        <img src="assets/img/top.png" alt="Camiseta Logo"/>
                        Tienda de camisetas
                    </a>
                </div>
            </header>
            
            <nav id="menu">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Categoría 1</a></li>
                    <li><a href="#">Categoría 2</a></li>
                    <li><a href="#">Categoría 3</a></li>
                    <li><a href="#">Categoría 4</a></li>
                    <li><a href="#">Categoría 5</a></li>
                </ul>
            </nav>

            <div id="content">
                <aside id="lateral">
                    <div id="login" class="block_aside">
                        <form action="#" method="post">
                            <label for="email">Correo electrónico</label>
                            <input type="email" name="email" id="email"/>
                            <label for="password">Contraseña</label>
                            <input type="password" name="password" id="password"/>
                            <input type="submit" value="Enviar"/>
                        </form>

                        <ul>
                            <li><a href="#">Mis pedidos</a></li>
                            <li><a href="#">Gestionar pedidos</a></li>
                            <li><a href="#">Gestionar categorías</a></li>
                        </ul>
                    </div>
                </aside>

                <div id="central">
                    <div class="product">
                        <img src="assets/img/top.png" alt="Camiseta negra ancha"/>
                        <h2>Camiseta Negra Ancha</h2>
                        <p>30 euros</p>
                        <a href="#">Comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/top.png" alt="Camiseta negra ancha"/>
                        <h2>Camiseta Negra Ancha</h2>
                        <p>30 euros</p>
                        <a href="#">Comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/top.png" alt="Camiseta negra ancha"/>
                        <h2>Camiseta Negra Ancha</h2>
                        <p>30 euros</p>
                        <a href="#">Comprar</a>
                    </div>
                </div>
            </div>

            <footer id="footer">
                <p>Desarrollado por Clique &copy; <?= date('Y') ?></p>
            </footer>
        </div>
    </body>
</html>
