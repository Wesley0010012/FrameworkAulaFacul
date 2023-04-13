<?php

// ^cat -> a expressão começa com cat, sem nenhum caracter antes
// bas$ -> a expressão termina com bas, sem nenhum caracter depois
// fa+z -> faz, faaz, faaaz, com ao menos 1 ocorrência do caracter a
// fa*z -> fz, faz, faaz, faaaz, ...
// \d{3} -> ocorrência de 3 dígitos (0 a 9)

function saveFile(string $email): bool {
  return false;
}