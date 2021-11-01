<?php
    function verificao2($userID,$conexaoComBanco,$add_personagem){

        $busca = "SELECT personagem FROM personagens_list WHERE user_id = '$userID'";
        $resultado = $conexaoComBanco->query($busca);
        
        #Criando a lista de personagens
        $listPersonagens = array();
        #Armazenando cada resultado em uma lista
        while($linha = $resultado->fetch_assoc()) {
            $nomePersonagem = $linha['personagem'];
            $listPersonagens[] = $nomePersonagem;   
        }

        foreach($listPersonagens as $valor){
            if($add_personagem == $valor){
                $GLOBALS['error_adicionar'] = '<br><p class="erro_add"> Esse personagem ja existe. </p>';
                return true;
                break;  
            }
        }
    }

    function verificao1($add_level){
        if($add_level > 85 or $add_level < 1){
            $GLOBALS['error_adicionar'] = '<br><p class="erro_add"> Algo deu errado. </p>';
        }else{
            return true;
        }
    }

    $error_adicionar = null;
    $adicionado_sucesso = null;
    
    if(isset($_POST['submit_adicionar'])){
        include_once('./config.php');

        $add_personagem = $_POST['personagem_add'];
        $add_level = $_POST['level'];
        $userId = $_SESSION['id'];

        $triger1 = false;
        $triger2 = false;
        $triggerAchou = false;

        $triger1 = verificao1($add_level);
        $triger2 = verificao2($userId,$conexaoComBanco,$add_personagem);
        
        if($triger1 == true and $triger2 == false){
            $insertBanco = "INSERT INTO personagens_list (user_id,personagem,nivel) values ('$userId','$add_personagem','$add_level')";
            $comando = $conexaoComBanco->query($insertBanco);
            $adicionado_sucesso = '<br><p class="adicionado_sucesso"> Adicionado com Sucesso. </p>';
        }
              
    }
?>  