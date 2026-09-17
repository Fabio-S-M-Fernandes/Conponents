<?php 


Function usuariocontroller(){
    echo "6. controller recebeu a requisiçao.<br>";
    $usuarios = usuarioservice();
    echo "8 . comtroller recebeu os dados do service.<br>";
    echo "usuarios encomtrados:<br>";
    foreach($usuarios as $usuario){
        echo "-". $usuario . "<br>";
    }

}