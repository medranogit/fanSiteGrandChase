        <header>
            <nav>
                <ul>
                    
                    <?php 
                    print_r("<img  src='{$diretorio}.\images\logo.png'>");
                    print_r("<li><a href='{$diretorio}./index.php'>HOME</a></li>");
                    print_r("<li><a href='{$diretorio}./download.php'>DOWNLOAD</a></li>");
                    
                    include_once("{$diretorio}./testPhp/logado.php");
                    menu_logado($diretorio);    

                    ?>
                </ul>    
            </nav>
            <div class="logo">
                <?php echo "<img  src='{$diretorio}./images\logo.png'>";?>
            </div>
        </header>