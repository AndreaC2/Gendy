<?php
session_start();
if (isset($_SESSION["success"])) {
    //echo('<label style="color:green">' . $_SESSION["success"] . "</label>\n");
    unset($_SESSION["success"]);
}
?> 

<html>
    <head>
        <meta charset="utf-8">
        <title>Gendy | Menu Cliente</title>
        <link rel="stylesheet" href="css/MenuCliente.css">
    </head>
    <body>
        <section id="principal">
            <div class="barralateral">
                <form action="">
                    <input class="boton" type="image" src="css/Imagenes/Mesa de trabajo 5.png" name='Calendario' onclick="openForm()" />
                </form>
                <form action="">
                    <input class="boton" type="image" src="css/Imagenes/Mesa de trabajo 6.png" name='Ajustesusuario' onclick="openForm()" />
                </form>
                <form action="">
                    <input class="boton" type="image" src="css/Imagenes/Mesa de trabajo 11.png" name='Crear' onclick="openForm()" />
                </form>
                <form action="">
                    <input class="boton" type="image" src="css/Imagenes/Mesa de trabajo 4.png" name='Crear' onclick="openForm()" />
                </form>
            </div>
            <div class="informacionUsuario">
                <img class="Logo" src="css/Imagenes/Mesa de trabajo 19.png" alt="Gendy"/>
                <div class="informacionUsuario2">
                </div>
                <div class="informacionUsuario3">
                </div>
            </div>
            <div class="Menuopciones">
                <div class="Menuopcionesarriba">
                    <div class="separadorbarra"></div>
                    <div class="barracategorias">
                        <div class="separador"></div>
                        <label class="texto">Categorías<br></label>
                        <div class="separador2"></div>
                        <div class="categorias">
                            <form action="IngresarCliente.php">
                                <input class="categoriasboton1" type="submit" value="Fitness" name='Fitness' onclick="" />
                            </form>
                            <form action="IngresarCliente.php">
                                <input class="categoriasboton2" type="submit" value="Restaurantes" name='Restaurantes' onclick="" />
                            </form><!-- comment -->
                            <form action="IngresarCliente.php">
                                <input class="categoriasboton3" type="submit" value="Bienestar" name='Bienestar' onclick="" />
                            </form><!-- comment -->
                            <form action="IngresarCliente.php">
                                <input class="categoriasboton4" type="submit" value="Mecánico" name='Mecánico' onclick="" />
                            </form>
                            <form action="IngresarCliente.php">
                                <input class="categoriasboton5" type="submit" value="Belleza" name='Belleza' onclick="" />
                            </form>
                        </div>
                    </div>
                </div>
                <div class="Menuopcionesabajo">
                    <div class="separador2"></div>
                    <div class="separador2"></div>
                    <div class="buscar">
                        <form action="IngresarCliente.php">
                            <input class="buscarboton" type="buscar" value="" placeholder="Busca tu servicio" name='buscar' onclick="" />
                        </form>  
                    </div>
                    <div class="Servicios">
                        
                    </div>
                    <div class="Favoritos">

                    </div>
                    <div class="Citas Programadas">

                    </div>
                </div>
            </div>
        </section>
    </body>
</html> 