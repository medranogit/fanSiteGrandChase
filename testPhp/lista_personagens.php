<?php
        function pesquisa_nivel($nomePersonagem, $conexaoComBanco, $userId){
            $userId = $_SESSION['id'];
    
            
            $buscandoInfo = "SELECT nivel FROM personagens_list WHERE user_id = '$userId' AND personagem = '$nomePersonagem'";
            $pesquisa = $conexaoComBanco->query($buscandoInfo);
            #Para pegar o valor do ID
            while ($linha = mysqli_fetch_assoc($pesquisa)) {
                $nivel = $linha['nivel'];
            }         
            return $nivel;
            
        }

    include_once('./config.php');
    $userID = $_SESSION['id'];

    $busca = "SELECT personagem FROM personagens_list WHERE user_id = '$userID'";
    $resultado = $conexaoComBanco->query($busca);
    
    #Criando a lista de personagens
    $listPersonagens = array();
    #Armazenando cada resultado em uma lista
    while($linha = $resultado->fetch_assoc()) {
        $nomePersonagem = $linha['personagem'];
        $listPersonagens[] = $nomePersonagem;   
        
    }
    
    foreach ($listPersonagens as $value) {
        #print_r($value);
        $level = pesquisa_nivel($value, $conexaoComBanco, $_SESSION['id']);
        echo "<li><img src='images/personagens/perfil/$value.png'><p class='level'>Level: $level</p></li>";
    }

?>