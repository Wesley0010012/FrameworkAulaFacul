<?php

function formValidate(array $formData): Bool {

}

function formSanitize(array $inputs): array {
  $result = [];
  $request = request();

  foreach($inputs as $key => $value) {
    switch($key) {
      case 'e':
        $result[$key] = filter_input($request, $key, FILTER_SANITIZE_EMAIL);
        break;
      case 's':
        $result[$key] = filter_input($request, $key, FILTER_SANITIZE_STRING);
        break;
      case 'n':
        $result[$key]= filter_input($request, $key, FILTER_SANITIZE_NUMBER_INT);
        break;
      case 'f':
        $result[$key]= filter_input($request, $key, FILTER_SANITIZE_NUMBER_FLOAT);
        break;
    }
  }

  return $result;
}