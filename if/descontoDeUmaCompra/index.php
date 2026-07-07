<?php
$valor_compra = 100;
if ($valor_compra >= 500) {
    $percentual = 20;
} elseif ($valor_compra >= 200) {
    $percentual = 10;
} else {
    $percentual = 0;
}

$valor_desconto = ($valor_compra * $percentual) / 100;
$valor_final = $valor_compra - $valor_desconto;

echo "--- RESUMO DA COMPRA ---<br>";
echo "Valor Original: R$ $valor_compra <br>";
echo "Desconto aplicado: $percentual% (R$ $valor_desconto) <br>";
echo "Total a pagar: R$ $valor_final";
?>