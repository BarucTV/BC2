<?php

    $localh = 'Localhost';
    $username = 'jgvoqptf_bc2';
    $pass = 'fortnite';
    $nome = 'jgvoqptf_bc2';

    $conect = new mysqli($localh, $username, $pass, $nome);

    $sql = "SELECT * FROM emails";

    $querry = mysqli_query($conect, $sql);

    
?>