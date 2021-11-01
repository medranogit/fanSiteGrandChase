<?php
    
    $bancoHost = 'Localhost';
    $bancoUsername = 'root';
    $bancoPass = '';
    $dbName = 'sitegrandcchase';

    $conexaoComBanco = new mysqli($bancoHost,$bancoUsername,$bancoPass,$dbName);

    if ($conexaoComBanco->connect_error) {
        echo '|||Erro|||';
      }
    else{
        
    }


?>