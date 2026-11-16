<?php

$archivo_env = __DIR__ . '/../.env';

$configuracion = parse_ini_file($archivo_env);

$nombre_sitio = $configuracion['APP_NAME'] ?? 'Paris Mecánica y Electrónica';

$email_contacto = $configuracion['APP_EMAIL'] ?? 'contacto@paris.com';

$entorno = $configuracion['APP_ENV'] ?? 'local';

?>