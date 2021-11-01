<?php
    $errorSenha = null;
    $errorEmail = null;
    $registroCompleto = null;
    $trigger1 = false;
    $trigger2 = false;
    
    if(isset($_POST['submitRegister'])){
        $usuario = $_POST['user'];
        $email = $_POST['email'];
        $cEmail = $_POST['cemail'];
        $senha = $_POST['senha'];
        $cSenha = $_POST['csenha'];
        $personagem = $_POST['personagem'];
        
        

        if($email != $cEmail){
            $errorEmail = '<p style="color: red;"> Os emails não são iguais </p>';
        }else{
            $trigger1 = true;
        }
        if($senha != $cSenha){
            $errorSenha = '<p style="color: red;"> As senhas não são iguais </p>';
        }else{
            $trigger2 = true;
        }    
        if ($trigger1 == true and $trigger2 == true){

            //É valido, conectar banco de dados
            include_once('./config.php');
            $insertBanco = "INSERT INTO cadastro (user,email,password) values ('$usuario','$email','$senha')";
            // $conexao é a variavel que possibilita conexao com o banco de dados.
            $comando = $conexaoComBanco->query($insertBanco);
            #echo $usuario;
            #echo $email;
            #echo $senha;

            $buscandoInfo = "SELECT id FROM cadastro WHERE email = '$email'";
            $result = $conexaoComBanco->query($buscandoInfo);

            while ($linha = mysqli_fetch_assoc($result)) {
                $userId = $linha['id'];
            }

            $insertBanco = "INSERT INTO personagens_list (user_id,personagem,nivel) values ('$userId','$personagem','1')";
            $comando = $conexaoComBanco->query($insertBanco);

            $insertBanco = "INSERT INTO profile (user_id,gp,cash) values ('$userId','950800','1500')";
            $comando = $conexaoComBanco->query($insertBanco);

            mysqli_close($conexaoComBanco);

            $registroCompleto = '<p style="color: green; font-size: 30px;">CADASTRADO COM SUCESSO</p>';

        }        
    }else{

    }
    



?>