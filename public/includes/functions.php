<?php

function soma($a, $b) {
    return $a + $b;
}

function subtracaoComRetornoPositivo($a, $b) {
    // Operador Ternário retorna um valor baseado em uma condição
    return ($a > $b) ? $a - $b : $b - $a;
}

// : indica que retorna um inteiro
function multiplica(int $a, int $b) : int {
    return $a * $b;
}

function divide(int $a, int $b) : float {
    if ($b === 0) {
        return 0;
    }
    return $a / $b;
}