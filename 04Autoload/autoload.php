<?php
function myAutoLoad($class)
{
    // Ajuste de barras para servidores Linux
    $class = str_replace('\\', '/', $class);

    if (file_exists('classes/' . $class . '.php')) {
        include_once('classes/' . $class . '.php');
    }
}

spl_autoload_register('myAutoLoad');
