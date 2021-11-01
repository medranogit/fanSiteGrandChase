<?php
    session_start();
    
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
    }
    
    $diretorio = '';
    include_once('./testPhp/testLogin.php');
    include_once('./testPhp/testRegister.php');

?>

<!DOCTYPE html>

<html lang="pt-br">
    
    <head>
        <meta charset="utf8">
        <title>Registro</title>
        <link rel="stylesheet" href= "css/reset.css">
        <link rel="stylesheet" href= "css/style.css">
        <link rel="stylesheet" href= "css/rightbar.css">
        <link rel="stylesheet" href= "css/register.css">

    </head>


    <body>
        <?php include_once('./layout_page/header.php');?>
        
        <main>
            <div class="colum_left">
                <div class="colum_left_body">
                    <div class="register">
                        <h1>Cadastro</h1>
                        <form action="" method="POST">
                            <label for="">Nome de usuário</label> <br>

                            <input type="text" name="user" placeholder="Coloque um usuário" required><br>
                            <label for="">Email</label> <br>

                            <input type="text" name="email" placeholder="Coloque seu email" required><br>
                            <?php echo $errorEmail; ?>
                            <label for="">Confirmação Email</label> <br>
                            <input type="text" name="cemail" placeholder="Confirme o seu email" required><br>
                            <label for="">Senha</label> <br>
                            
                            <input type="password" name="senha" placeholder="Coloque sua senha" required><br>
                            <?php echo $errorSenha; ?>
                            <label for="">Confirmação Senha</label> <br>
                            <input type="password" name="csenha" placeholder="Confirme sua senha" required><br>
                            <label for="">Escolha seu personagem: </label> <br>
                            

                            <select name="personagem" required>
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

                            
                            <?php echo $registroCompleto; ?>    
                            <br><button class="inputSubmit" type="submit" name="submitRegister" value="Entrar">Criar conta</button>          
                        </form>              
                    </div>
                </div>
            </div>
            <?php include_once('./layout_page/colum_right.php');?>
        </main>
    </body>
    <?php include_once('./layout_page/footer.php');?>
</html>
