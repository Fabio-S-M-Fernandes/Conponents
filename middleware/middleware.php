<?php

function middeware($rota){
    echo "3. middleware esta validando a requisiçao.<br>";
    
    $permitido = true;

    if($permitido){
        echo "4. middleware validou a requisiçao.<br>";
        dispatcher($rota);
    } 
    else {
        echo "4. middleware bloqueou a requisiçao.<br>";
    }
}