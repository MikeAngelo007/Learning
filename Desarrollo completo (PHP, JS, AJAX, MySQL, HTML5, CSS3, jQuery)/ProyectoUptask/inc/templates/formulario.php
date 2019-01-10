<?php $page= obtenerPaginaActual(); ?>
<form id="formulario" class=" caja-login" method="post">
            <div class="campo">
                <label for="usuario">Usuario: </label>
                <input type="text" name="usuario" id="usuario" placeholder="Usuario">
            </div>
            <div class="campo">
                <label for="password">Password: </label>
                <input type="password" name="password" id="password" placeholder="Password">
            </div>
            <div class="campo enviar">

                <?php if($page === 'crear-cuenta'){?>
                    <input type="hidden" id="tipo" value="crear">
                    <input type="submit" class="boton" value="Crear cuenta">
                <?php } else if($page === 'login'){?>
                    <input type="hidden" id="tipo" value="login">
                    <input type="submit" class="boton" value="Iniciar Sesión">
                <?php } ?>
            </div>
            <?php if($page === 'crear-cuenta'){?>
                <div class="campo">
                    <a href="login.php">Inicia Sesión Aquí</a>
                </div>
            <?php } else if($page === 'login'){?>
                <div class="campo">
                    <a href="crear-cuenta.php">Crea una cuenta nueva</a>
                </div>
            <?php } ?>
            
        </form>