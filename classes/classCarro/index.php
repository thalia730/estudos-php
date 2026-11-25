<?php
class Carro {
    private $modelo;
    public $cor;       
    public $ano;   

    public function ligar() {
        echo "Carro " . $this->cor . " ligado!";
    }
}
$carro1 = new Carro();
$carro1->cor = "Vermelho";
$carro1->cor = "Azul";
$carro1->ano = 1970;

 $carro1->ligar();
?>