<?php
    session_start();
    
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header("Location: ./index.php");
    }

    $diretorio = '';
    include_once('./testPhp/testLogin.php');

    #print_r($_SESSION['id']);
?>

<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Grand Chase Official</title>
        <link rel="stylesheet" href= "css/reset.css">
        <link rel="stylesheet" href= "css/style.css">
        <link rel="stylesheet" href= "css/meu_perfil.css">
        <link rel="stylesheet" href= "css/rightbar.css">
    
    </head>

    <body>
        <?php include_once('./layout_page/header.php');?>
        
        <main>
            <div class="colum_left">
                <div class="colum_left_body">
                    <div class="bars">
                        <div class="bar1">
                            <?php
                                include_once('./testPhp/dadosProfile.php');
                                print_r('<p> User: '. $_SESSION['user'] .'</p>');
                                print_r('<p> Email: '. $_SESSION['email'] .'</p>');
                                #print_r('<p> Level: '. $userLevel .'</p>');
                                print_r('<p> GP: '. $userGP .'</p>');
                                print_r('<p> Cash: '. $userCASH .'</p>');
                            ?>
                            <!-- <p>Ultima conexão: 27/09/21</p>
                            <p>Desafios Heroicos: 20</p>
                            <p>Moedas Épicas: 547</p> -->
                        </div>
                            
                        <div class="bar_adicionar"> 
                            <?php
                                include_once('./testPhp/adicionar_personagem.php');
                            ?>
                            <p>Adicionar Personagem</p>
                            <form action="" method="POST">
                                
                                <input id="levelInput" type="text" name="level" placeholder="Level" required><br>
                                <select name="personagem_add" required>
                                    <option value="Elesis">Elesis</option>
                                    <option value="Arme">Arme</option>
                                    <option value="Lire">Lire</option>
                                    <option value="Lass">Lass</option>
                                    <option value="Ryan">Ryan</option>
                                    <option value="Ronan">Ronan</option>
                                    <option value="Amy">Amy</option>
                                    <option value="Jin">Jin</option>
                                    <option value="Sieghart">Sieghart</option>
                                    <option value="Mari">Mari</option>
                                    <option value="Dio">Dio</option>
                                    <option value="Zero">Zero</option>
                                    <option value="Rey">Rey</option>
                                    <option value="Lupus">Lupus</option>
                                    <option value="Lin">Lin</option>
                                    <option value="Azin">Azin</option>
                                    <option value="Holy">Holy</option>
                                    <option value="Edel">Edel</option>
                                    <option value="Veigas">Veigas</option>,
                                    <option value="Uno">Uno</option>
                                </select>
                                    <input id="buttonSubmit" type="submit" name="submit_adicionar" value="Adicionar">
                            </form>
                            <?php echo $error_adicionar; echo $adicionado_sucesso;?>
                            
                        </div>
                        <div class="bar2">
                            <ul class='personagem_box'>
                                <?php
                                    include_once('./testPhp/lista_personagens.php');                            
                                ?>
                            </ul>

                        </div>
                    </div>
                    
                </div>
                
            </div>

            <div class="colum_right">
                <button class="botaoDown"><a href="download.php">Download</a></button>

                <div class="login_box">
                    <form action="" method="POST">
                        <?php
                            include_once('./testPhp/logado.php');
                            login_box($loginInfo);
                        ?>
                    </form>
                </div>


                <ul class="midias_sociais">
                    <li> <a href="index.php"><img src="images\redesicons\yt.png"></a></li>
                    <li> <a href="index.php"><img src="images\redesicons\face.png"></a></li>
                    <li> <a href="index.php"><img src="images\redesicons\disc.png"></a></li>
                </ul>
            
                <div class="anuncio"><a href="index.php"><img src="images\blocks\capa.bmp"></a></div>
                <div class="anuncio"><a href="index.php"><img src="images\blocks\capa2.png"></a></div>

            </div>
        </main>
    </body>
    <?php include_once('./layout_page/footer.php');?>
        
</html>
