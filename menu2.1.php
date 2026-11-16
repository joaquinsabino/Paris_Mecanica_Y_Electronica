<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>
<header>
    <img src="Menu2.jpg" class="menu-btn" onclick="abrirMenu()" alt="Abrir menú">
</header>

<div id="menuLateral" class="menu-lateral">

    <a href="javascript:void(0)" class="cerrar" onclick="cerrarMenu()">&times;</a>

    <div class="botones">

        <a href="Servicios_que_ofrecemos.php">SERVICIOS QUE OFRECEMOS</a>

        <a href="donde_estamos.php">DONDE ESTAMOS</a>

        <a href="redes_sociales.php">REDES SOCIALES</a>

        <a href="medios_de_pago.php">MEDIOS DE PAGO</a>

        <a href="contactanos.php">CONTACTANOS</a>

        <a href="Formulario.php">FORMULARIO</a>

        <a href="marcas_trabajadas.php">MARCAS TRABAJADAS</a>

        <a href="equipos_propios.php">EQUIPOS PROPIOS</a>

        <img class="imagen" src="Motor.png" alt="Motor">

    </div>
</div>

<script>
function abrirMenu() {
    document.getElementById("menuLateral").style.width = "300px";
}

function cerrarMenu() {
    document.getElementById("menuLateral").style.width = "0";
}
</script>
</body>
</html>