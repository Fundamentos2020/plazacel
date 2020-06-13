<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Menu Administrador</title>
        <link rel="stylesheet" href="menuadmi.css">

    </head>
    <body>
        <div class="logo">
            <p>PLAZACEL</p>
            <p></p>
        </div>
        <div class="navegador">
            <a href="./sesionadmi.php">Cerrar Sesión</a>
            <p>Sesion iniciada:Administrador</p>
            
        </div>
        <div class="menu">
                <div>
                        <button type="button" id="boton-inventario" onClick="window.location = './registro_inventario.php';">Inventario</button>
                        
                    </div>
                    <div>
                        <button type="button" id="boton-cliente" onClick="window.location = './sesioncliente.php';">Cliente</button>
                    </div>
                    <div>
                        <button type="button" id="boton-traba" onClick="window.location = './registro_trabajador.php';">Trabajador</button>
                    </div>

        </div>
        <div class="piepagina">
            <div>
                <p>Contactanos</p>
                <ul>
                    <li>4441234567</li>
                    <li>PLAZACEL@gmail.com</li>
                    <li>018009007515</li>
                </ul>
            </div>
            <div>
                <p>Preguntas frecuentes</p>
            </div>
            <div>
                <p>Siguenos en</p>
                <ul>
                    <li><img src="./imagenes/facebook.png" alt="#"></li>
                    <li><img src="./imagenes/twitter.png" alt="#"></li>
                    <li><img src="./imagenes/instagram.jpg" alt="#"></li>

                </ul>
            </div>
        </div>
       
    </body>
</html>