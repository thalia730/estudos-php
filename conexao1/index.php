<?PHP 
require_once "conexao.php";
require_once "usuarioModel.php";

$usuarioModel = new usuarioModel($conexao);

$usuario = $usuarioModel->buscarPorId(1);

echo "<pre>";
print_r($usuario);
echo "</pre>";