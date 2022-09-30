<?php

    $connectdb = new mysqli('localhost', 'root', '', 'login');

        if (!$connectdb) {
            die("Não foi possível conectar: " .mysqli_error(). "<br>");
        }


?>