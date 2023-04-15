<?php

function validateNumber(mixed $value): bool {
  if(!is_numeric($value))
    return false;

  return true;
}