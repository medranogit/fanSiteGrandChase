<?php
    session_start();
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        $pagina = 'personagens';
    }

    $personagem = 'Edel';
    $diretorio = '.'
    
?>

<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <?php print_r("<title>{$personagem}</title>"); ?>
        
        <link rel="stylesheet" href= "../css/reset.css">
        <link rel="stylesheet" href= "../css/style_personagens.css">
        <link rel="stylesheet" href= "../css/personagens.css">
    
    </head>

    <body>
        <?php include_once('../layout_page/header.php');?>
        
        <main>
            <div class="personagens_box">
                <div class="personagens_box_body">
                    <div class="texto_personagem">
                        <ul class="personagens">
                        <li> <a href="../personagens/elesis.php"><img  src="../images/personagens/elesis.png"></a></li>
                            <li> <a href="../personagens/arme.php"><img  src="../images/personagens/arme.png"></a></li>
                            <li> <a href="../personagens/lire.php"><img  src="../images/personagens/lire.png"></a></li>
                            <li> <a href="../personagens/lass.php"><img  src="../images/personagens/lass.png"></a></li>
                            <li> <a href="../personagens/ryan.php"><img  src="../images/personagens/ryan.png"></a></li>
                            <li> <a href="../personagens/ronan.php"><img  src="../images/personagens/ronan.png"></a></li>
                            <li> <a href="../personagens/amy.php"><img  src="../images/personagens/amy.png"></a></li>
                            <li> <a href="../personagens/jin.php"><img  src="../images/personagens/jin.png"></a></li>
                            <li> <a href="../personagens/sieghart.php"><img  src="../images/personagens/sieghart.png"></a></li>
                            <li> <a href="../personagens/mari.php"><img  src="../images/personagens/mari.png"></a></li>
                            <li> <a href="../personagens/dio.php"><img  src="../images/personagens/dio.png"></a></li>
                            <li> <a href="../personagens/zero.php"><img  src="../images/personagens/zero.png"></a></li>
                            <li> <a href="../personagens/rey.php"><img  src="../images/personagens/rey.png"></a></li>
                            <li> <a href="../personagens/lupus.php"><img  src="../images/personagens/lupus.png"></a></li>
                            <li> <a href="../personagens/lin.php"><img  src="../images/personagens/lin.png"></a></li>
                            <li> <a href="../personagens/azin.php"><img  src="../images/personagens/azin.png"></a></li>
                            <li> <a href="../personagens/holy.php"><img  src="../images/personagens/holy.png"></a></li>
                            <li> <a href="../personagens/edel.php"><img  src="../images/personagens/edel.png"></a></li>
                            <li> <a href="../personagens/veigas.php"><img  src="../images/personagens/veigas.png"></a></li>
                            <li> <a href="../personagens/uno.php"><img  src="../images/personagens/uno.png"></a></li>            
                        </ul>
                        
                        <?php include_once('../testPhp/personagens_conteudo.php'); ?>
                        
                    </div>
                    <div class="imagem_personagem"> 
                    <?php print_r("<img src='../images/personagens/page/{$personagem}.png'>")?> 
                    </div>
                    
                    
                </div>
            </div>            
        </main>
    </body>
    <?php include_once('../layout_page/footer.php');?>
            
</html>
