<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $titulo_pagina ?? 'Paris Mecánica y Electrónica'; ?></title>

    <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>

<header class="encabezado-principal">

    <img class="logo"
         src="imagenes/Logo_Paris.jpg"
         alt="Logo Paris Mecánica">

    <h1 class="titulo">
        <?php echo $titulo_encabezado ?? 'Paris Mecánica y Electrónica'; ?>
    </h1>

</header>