<?php
    function menu_logado($diretorio){
    if((isset($_SESSION['email']) == true) and (isset($_SESSION['senha']) == true))
    {
        print_r("<li><a href='{$diretorio}./meu_perfil.php'> MEU PERFIL</a></li>") ;
        print_r("<li><a href='{$diretorio}./testPhp/sair.php'>SAIR</a></li>");
        
    }else{
        print_r("<li><a href='{$diretorio}./registro.php'> REGISTRO </a></li>") ;
    }
    
    }
    function login_box($errorLogin){
        if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
        {
            echo '<h1>Login</h1>';
            echo '<input type="text" name="email" placeholder="Email">';
            echo '<input type="password"  name="senha" placeholder="Senha">';
            echo "<br> <p>$errorLogin</p>";
            echo '<p id="abcd"> <a href="registro.php">Cadastre-se</a></p>';
            echo '<input id="inputLogin" type="submit" name="submitLogin" value="Entrar">';
            
        }else{
            $user = $_SESSION['user'];
            $email = $_SESSION['email'];
            echo "<h1>Seja bem vindo</h1>";
            echo "<p> $user </p>";
            echo "<p>$email<p>";
            echo '<button><a href="./testPhp/sair.php">SAIR</a></button>';
        }
        }
?>