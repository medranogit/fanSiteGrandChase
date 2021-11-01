<?php
    session_start();
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
    }

    
    $diretorio = '';
    include_once('./testPhp/testLogin.php');
    
?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Grand Chase Official</title>
        <link rel="stylesheet" href= "css/reset.css">
        <link rel="stylesheet" href= "css/style.css">
        <link rel="stylesheet" href= "css/home.css">
        <link rel="stylesheet" href= "css/rightbar.css">
    
    </head>

    <body>
        <?php include_once('./layout_page/header.php');?>
        <main>
            <div class="colum_left">
                <div class="colum_left_body">
                <a href="index.php"><img class="slider" src="images\slider.png"></a>
                    

                    <ul class="blocks">
                        <li>
                            <a href="index.php"><img src="images\blocks\a1.jpg"></a>
                            <p>Dia 29 de Setembro a tão aguardada Amy chega aos servidores brasileiros!</p>
                        </li>
                        <li>
                            <a href="index.php"><img src="images\blocks\a2.jpg"></a>
                            <p>Tudo sobre Ronan da lendária família de espadachins-arcanos de Canaban. </p>
                        </li>
                        <li>
                            <a href="index.php"><img src="images\blocks\a3.jpg"></a>
                            <p>Ryan o elfo habitante da Cidade Élfica chega ao jogo na próxima quarta-feira.</p>
                        </li>
                    </ul>
                    <div class="about">
                        <img  src="images\sobre.png">
                        <p>Grand Chase é um jogo online de RPG de ação em plataforma gratuito com gráficos inspirados em anime. Divirta-se com aventuras empolgantes em missões e PvP vários personagens únicos. Aventure-se em diversas missões em um mundo de fantasia e desafie o PvP online em tempo real. Obtenha equipamentos e aprenda novas habilidades para aproveitar ao máximo a ação em missões.<br> 

                        <br>Há seis séculos ocorreu a Primeira Guerra Mágica, na qual tribos demoníacas vindas de outra dimensão atacaram o reino de Calnat, na lendária terra de Arquimídia. Calnat era o reino humano mais desenvolvido de todos, mesclando magia e tecnologia como nunca se havia visto antes. Após inúmeras batalhas, a guerra chegou ao fim quando uma gigantesca explosão destruiu complemente Calnat, não deixando qualquer vestígio de sua outrora avançada civilização.</p>
                      
                    </div> 
                    <ul class="personagens">
                        <h1>Personagens</h1>
                        <li> <a href="./personagens/elesis.php"><img  src="./images/personagens/elesis.png"></a></li>
                        <li> <a href="./personagens/arme.php"><img  src="./images/personagens/arme.png"></a></li>
                        <li> <a href="./personagens/lire.php"><img  src="./images/personagens/lire.png"></a></li>
                        <li> <a href="./personagens/lass.php"><img  src="./images/personagens/lass.png"></a></li>
                        <li> <a href="./personagens/ryan.php"><img  src="./images/personagens/ryan.png"></a></li>
                        <li> <a href="./personagens/ronan.php"><img  src="./images/personagens/ronan.png"></a></li>
                        <li> <a href="./personagens/amy.php"><img  src="./images/personagens/amy.png"></a></li>
                        <li> <a href="./personagens/jin.php"><img  src="./images/personagens/jin.png"></a></li>
                        <li> <a href="./personagens/sieghart.php"><img  src="./images/personagens/sieghart.png"></a></li>
                        <li> <a href="./personagens/mari.php"><img  src="./images/personagens/mari.png"></a></li>
                        <li> <a href="./personagens/dio.php"><img  src="./images/personagens/dio.png"></a></li>
                        <li> <a href="./personagens/zero.php"><img  src="./images/personagens/zero.png"></a></li>
                        <li> <a href="./personagens/rey.php"><img  src="./images/personagens/rey.png"></a></li>
                        <li> <a href="./personagens/lupus.php"><img  src="./images/personagens/lupus.png"></a></li>
                        <li> <a href="./personagens/lin.php"><img  src="./images/personagens/lin.png"></a></li>
                        <li> <a href="./personagens/azin.php"><img  src="./images/personagens/azin.png"></a></li>
                        <li> <a href="./personagens/holy.php"><img  src="./images/personagens/holy.png"></a></li>
                        <li> <a href="./personagens/edel.php"><img  src="./images/personagens/edel.png"></a></li>
                        <li> <a href="./personagens/veigas.php"><img  src="./images/personagens/veigas.png"></a></li>
                        <li> <a href="./personagens/uno.php"><img  src="./images/personagens/uno.png"></a></li>   
                    </ul>
                    
                </div>
                
            </div>
            
            <?php include_once('./layout_page/colum_right.php');?>
        </main>
    </body>
    <?php include_once('./layout_page/footer.php');?>
</html>
