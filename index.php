<?php
    $nombre = $_GET['nombre_persona'];
    $codigo = $_GET['codigo_promocional'];
?>

<?php if (!$_GET['nombre_persona'] && !$_GET['codigo_promocional']) { ?>
<html>
    <body>
        <form method="get">
            <p>Por favor ingresa tus datos:</p>
            <label for="">
                Nombre:
                <input type="text" name="nombre_persona" />
            </label>

            <label for="">
                Codigo:
                <input type="number" name="codigo_promocional" />
            </label>

            <input type="submit" value="Enviar" />
        </form>
    </body>
</html>
<?php } ?>


<?php if($_GET['nombre_persona'] && $_GET['codigo_promocional']){ ?>
    hola <?= $nombre ?>, tu codigo es <?= $codigo ?>.
<?php } ?>