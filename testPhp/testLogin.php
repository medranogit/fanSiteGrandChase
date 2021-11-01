<?php
    $loginInfo = null;
    if(isset($_POST['submitLogin'])){

        

        include_once('./config.php');

        


        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $insertChecarNoBanco = "SELECT * FROM   cadastro WHERE email = '$email' and password = '$senha'";
        // $conexao é a variavel que possibilita conexao com o banco de dados.
        $result = $conexaoComBanco->query($insertChecarNoBanco);

        if(mysqli_num_rows($result) < 1){
            $loginInfo = '<p style="color: red;"> Login incorreto. </p>';
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            
            
        }else{

            $loginInfo = '<p style="color: green; font-size: 30px;">LOGADO COM SUCESSO</p>';
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;

            #Para indentificar o ID a partir do email.
            $emailUser = $_SESSION['email'];
            $buscandoInfo = "SELECT id, user FROM cadastro WHERE email = '$emailUser'";
            $result1 = $conexaoComBanco->query($buscandoInfo);
            #Para pegar o valor do ID
            while ($linha = mysqli_fetch_assoc($result1)) {
                $userId = $linha['id'];
                $userName = $linha['user'];
            }
            #Definido o ID no Session
            $_SESSION['id'] = $userId;
            $_SESSION['user'] = $userName;
        
            //print_r($_SESSION['email']);
            //print_r($_SESSION['senha']);

           
        }

    }

?>