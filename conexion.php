<?php
    /*mysqli_connect(
    string $host = ini_get("mysqli.default_host"),
    string $username = ini_get("mysqli.default_user"),
    string $passwd = ini_get("mysqli.default_pw"),
    string $dbname = "",
    int $port = ini_get("mysqli.default_port"),
    string $socket = ini_get("mysqli.default_socket")
): mysqli*/
    $link = mysqli_connect("localhost", "root", "","phpmiguel");

    if (!$link) {
    die('Error de Conexión (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());
    }

?>