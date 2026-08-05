<?php
$nota1 = 7;
$nota2 = 2;
$media = ($nota1 + $nota2) / 2;
if ($media >= 7) {
    echo "Aprovado";
}elseif ($media >= 5 && $media < 7) {
    echo "Recuperação";
}else {
    echo "Reprovado";
}
?>