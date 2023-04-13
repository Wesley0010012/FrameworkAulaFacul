<?php

function validateName(string $name): bool {
  if(preg_match('/[0-9]+/', $name)) {
    return true;
  }

  return false;
}