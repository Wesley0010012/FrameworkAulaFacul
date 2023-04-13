<?php

function verifyArrayType(array $arr, string $type): bool {
  foreach($arr as $key => $value) {
    switch($type) {
      case 'i':
        if(!is_int($value))
          return false;
        break;
      case 'f':
        if(!is_float($value))
          return false;
        break;
      case 's':
        if(!is_string($value))
          return false;
        break;
      case 'fc':
        if(!is_callable($value))
          return false;
        break;
    }
  }

  return true;
}

function counter(array $arr): int {
  return count($arr);
}

function sorter(array $arr, string $key): array|false {
  switch($key) {
    case 's':
      return sort($arr);
      break;
    case 'r':
      return rsort($arr);
      break;
    case 'k':
      return ksort($arr);
  }

  return false;
}