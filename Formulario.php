
<?php
$titulo_pagina = "Redes sociales - Paris Mecánica";
$titulo_encabezado = "FORMULARIO DE CONTACTO";
include 'includes/header.php';
include 'includes/nav.php';
?>

<main>

    <div class="contenedor_formulario">

        <form>

            <label>Nombre</label>
            <input type="text" name="nombre" required>

            <label>Apellido</label>
            <input type="text" name="apellido" required>

            <label>Correo electrónico</label>
            <input type="email" name="correo" required>

            <label>Teléfono</label>
            <input type="tel" name="telefono">

            <label>Fecha para el turno</label>
            <input type="date" name="fecha">

            <label>Tipo de servicio</label>

            <select name="servicio">
                <option>Diagnóstico</option>
                <option>Cambio de aceite</option>
                <option>Inyección electrónica</option>
                <option>Cambio de correa</option>
                <option>Otro</option>
            </select>

            <label>¿Cómo desea que lo contactemos?</label>

            <input class="radio" type="radio" name="contacto" value="WhatsApp">
            WhatsApp

            <input class="radio" type="radio" name="contacto" value="Correo electrónico">
            Correo electrónico

            <br><br>

            <label>Mensaje</label>

            <textarea rows="6" name="mensaje"></textarea>

            <input class="boton_formulario" type="submit" value="Enviar">

        </form>

    </div>

</main>

<?php include 'includes/footer.php'; ?>