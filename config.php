<?php

    $localh = 'Localhost';
    $username = 'root';
    $pass = '';
    $nome = 'bc2';

    $conect = new mysqli($localh, $username, $pass, $nome);

    $sql = "SELECT * FROM emails";

    $querry = mysqli_query($conect, $sql);

    
?>