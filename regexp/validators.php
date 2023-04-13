<?php

function validateEmail(string $email): bool {
  if(!preg_match('/^[a-z0-9]+@[a-z0-9]+.[a-z]+$/', $email))
    return true;
  
  return false;
}