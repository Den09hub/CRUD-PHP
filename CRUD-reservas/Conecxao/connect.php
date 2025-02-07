<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "crud_reservas";

    if ($conn = mysqli_connect($server, $user, $pass, $db)) {
        // echo "Conectado!!";
    } else {
        echo "Erro ao conectar!!";
    }

    function Mensagem($texto, $tipo) {
        echo "<div class='alert alert-$tipo' role='alert'>
                $texto
            </div>";
    }

?>