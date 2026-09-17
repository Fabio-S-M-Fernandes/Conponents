<?php
function usuariosController() {
    echo "6. Controlle recebeu a requisição. <br>";
    $usuarios = usuarioService();
    echo "8. Controller recebeus os dados do Service. <br>";
    echo "Usuários encontrados:<br>";
    foreach ($usuarios as $usuarios) {
        echo "-". $usuario . "<br>";
    }
}