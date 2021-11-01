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
        <title>Download</title>
        <link rel="stylesheet" href= "css/reset.css">
        <link rel="stylesheet" href= "css/style.css">
        <link rel="stylesheet" href= "css/download.css">
        <link rel="stylesheet" href= "css/rightbar.css">
    
    </head>

    <body>
        <?php include_once('./layout_page/header.php');?>
        
        <main>
            <div class="colum_left">
                <div class="colum_left_body">
                    <div class="download">
                        <div class="space"></div>
                        <h1>Para jogar é fácil! Basta baixar, instalar o jogo e criar sua conta.</h1>
                        <div class="box1">
                            <p>TAMANHO DO CLIENT : 4.5GB</p>
                        </div>
                        <div class="boxButtons">
                            <div class="buttons_2"><p>DOWNLOAD DIRETO</p></div>
                            <div class="buttons_2"><p>DOWNLOAD TORRENT</p></div>
                        </div>
                        <div class="box1">
                            <p>OUTRAS OPÇÕES DE DOWNLOAD</p>
                        </div>
                        <div class="boxButtons">
                            <div class="buttons_3"><p>DOWNLOAD MEDIAFIRE</p></div>
                            <div class="buttons_3"><p>DOWNLOAD MEGAUPLOAD</p></div>
                            <div class="buttons_3"><p>DOWNLOAD Google Drive</p></div>
                        </div>
                        <div class="box1">
                            <p>REQUISITOS DO SISTEMA</p>
                        </div>
                        <table>
                            <tr>
                                <th></th>
                                <th style="font-weight: bold;">Mínimo</th>
                                <th style="font-weight: bold;">Recomendado</th>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Sistema Operacional</td>
                                <td>Windows 7</td>
                                <td>Windows 10</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Processador</td>
                                <td>Intel/AMD 2 GHz	</td>
                                <td>Intel Core i3 ou superior</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Placa de Vídeo</td>
                                <td>2 GB</td>
                                <td>4 GB ou superior</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Versão do DirectX</td>
                                <td>NVIDIA GeForce 7 Series ou equivalente</td>
                                <td>NVIDIA GeForce 8 Series ou equivalente</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Espaço em Disco</td>
                                <td colspan="2">9.0c ou superior</td>

                            </tr>
                            <tr>
                                <td style="font-weight: bold;">Versão do DirectX</td>
                                <td colspan="2">6 GB de espaço em disco</td>
                            </tr>
                          </table>
                    </div>
                    <div class="boximagem">
                        <img src="images\slider.png">
                    </div>
                    
                    
                    
                </div>
                
            </div>
            <?php include_once('./layout_page/colum_right.php');?>
        </main>
    </body>
    <?php include_once('./layout_page/footer.php');?>
            
</html>
