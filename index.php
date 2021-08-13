<?php
    $chanter = readline('Entrer un mot : ');
    $reverse = strtolower(strrev($chanter));
    if(strtolower($chanter)===$reverse){
        echo 'Ce mot est un palyndrome.';
    }
    else{
        echo 'Ce n"est pas un palyndrome.';
    }
?>