<?php

$ligax = mysqli_connect('localhost', 'root', '12345678', 'exemplo');

if (!$ligax) {
    die("<br>Falha na ligação: " . mysqli_connect_error());
}

#echo "Boa ligação!";

?>