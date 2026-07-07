<?php
$usuario_cadastrado = "admin";
$senha_correta = "1234";
$tentativa_usuario = "thalia";
$tentativa_senha = "12345";
 $acesso_concedido =  ($tentativa_usuario == $usuario_cadastrado && $tentativa_senha == $senha_correta);
 var_dump($acesso_concedido);
?>