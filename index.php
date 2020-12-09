<html>
    <head>
        <meta charset="UTF-8">
        <title>Gendy</title>
        <link rel="stylesheet" href="css/inicio.css">
    </head>
    <body>

        <img class="Logo" src="css/Imagenes/Mesa de trabajo 19.png" alt="Gendy"/>
        <div class="separador"></div>
        <div class="separador3"></div>
        <label class="texto">Bienvenido,<br></label>
        <label class="texto"> ¿Cómo deseas Ingresar?</label>
        <div class="separador"></div>
        <form action="IngresarCliente.php">
            <input class="boton_cliente" type="submit" value="Cliente" name='Cliente' onclick="" />
        </form>
        <form action="IngresarNegocio.php">
            <input class="boton_negocio" type="submit" value="Empresa" name='Negocio' onclick="" />
        </form>
        <div class="separador3"></div>
        <form action="">
            <input class="boton_crear" type="button" value="Crea tu cuenta" name='Crear' onclick="openForm()" />
        </form>
        <div class="separador2"></div>
        <label class="texto">!Síguenos!</label>
        <div class="separador3"></div>
        <div class="iconos">
            <div>
                <form action="https://www.twitter.com/" target="_blank">
                    <input class="twitter" type="image" src="css/Imagenes/twitter.png" alt="Twitter" onclick="" />
                </form>
            </div>
            <div>
                <form action="https://www.facebook.com/" target="_blank">
                    <input class="facebook" type="image" src="css/Imagenes/Mesa de trabajo 2.png" alt="Facebook" onclick="" />
                </form>
            </div>
            <div>
                <form action="https://www.instagram.com/" target="_blank">
                    <input class="instagram" type="image" src="css/Imagenes/Mesa de trabajo 3.png"alt="Instagram"  onclick="" />
                </form>
            </div>
        </div>
        <div class="contenedor" id="registroPopup">
            <div class="registroInicio" >
                <form action="">
                    <input class="Cerrar" type="button" value="X" name='Crear' onclick="closeForm()" />
                </form>
                <img class="logo2" src="css/Imagenes/Gendy.png" alt="Gendy"/>
                <div class="separador"></div>
                <label class="texto">Crea tu Cuenta<br></label>
                <div class="separador3"></div>
                <div class="iconosRegistro">
                    <form action="RegistrarUsuarioNegocio.php">
                        <input class="RegistroNegocio" type="image" src="css/Imagenes/Mesa de trabajo 18.png"  onclick="" />
                    </form>
                    <form action="RegistrarUsuarioCliente.php">
                        <input class="RegistroCliente" type="image" src="css/Imagenes/Mesa de trabajo 6.png"  onclick="" />
                    </form>
                </div>
            </div>
        </div>
        <script>
            function openForm() {
                document.getElementById("registroPopup").style.cssText = "display: flex;";
            }
            function closeForm() {
                document.getElementById("registroPopup").style.cssText = "display: none;";
            }
        </script>
    </body>
</html>