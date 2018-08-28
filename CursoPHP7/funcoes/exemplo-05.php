<?php

$a = 10;

//& representa passagem de parametro por referencia(o valor da funcao passa
//a valer em toda a pagina);
function trocaValor(&$a) {

    $a += 50;

    return $a;
}

echo trocaValor($a);

echo '<br >';

echo $a;

