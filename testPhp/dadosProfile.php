<?php
    include_once('./config.php');
    
    #print_r($_SESSION['id']);
    $userID = $_SESSION['id'];

    # para procurar o gp e o cash do profile 
    $insert = "SELECT gp,cash,id_profile FROM profile WHERE user_id = '$userID'";
    $profileTable = $conexaoComBanco->query($insert);

    while ($linha = mysqli_fetch_assoc($profileTable)) {
        $userGP = $linha['gp'];
        $userCASH = $linha['cash'];
    }
        
    
    
    ##print_r('<br> gp:'.$userGP);
    #print_r('<br> cash:'.$userCASH);
    #print_r('<br> idpersonagem:'. $idPersonagem);
    #print_r('<br> Personagem:'. $userPersonagemNome);   
    #print_r('<br> Classe1:'. $userClasse[0]);   
    #print_r('<br> Classe2:'. $userClasse[1]);   

    
#colocar em uma lista

?>