<?php

$lista = array ('Elesis', 'lire', 'arme','ronan');

$nomePersonagem = 'zero';

foreach($lista as $valor){
    if ($nomePersonagem  == $valor){
        echo 'existe na lista'. PHP_EOL . $valor;

    }else{
        
    }
}



#for ($x = 0; $x <= 10; $x++) {
#    echo "The number is: $x <br>";
#  }

$a = 1;

function dale(){
    $GLOBALS['a'] = 3;
}

dale();
echo $a;