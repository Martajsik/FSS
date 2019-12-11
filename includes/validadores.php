<?php
define('TAMANHO_MIN_NOME', 8);
define('TAMANHO_MAX_NOME', 40);
function nomeok(string $nome): bool{
    return strlen($nome) >= TAMANHO_MIN_NOME && strlen($nome) <= TAMANHO_MAX_NOME;
}
?>