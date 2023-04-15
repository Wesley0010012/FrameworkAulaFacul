<?php

function formValidate(array $formData): bool {
  // $formSanitized = formSanitize($formData);
  $formSanitized = $formData;
  
  foreach($formSanitized as $key => $value) {
    switch($key) {
      case "e":
        if(!validateEmail($value))
          return false;
        break;
      case 'i':
        if(!validateNumber($value))
          return false;
        break;
      case 'n':
        if(!validateName($value))
          return false;
        break;
    }
  }

  return true;
}

function formSanitize(array $inputs): array {
  $result = [];
  $request = request();

  foreach($inputs as $key => $value) {
    switch($key) {
      case 'e':
        $result[$key] = filter_input($request, $key, FILTER_SANITIZE_EMAIL);
        break;
      case 'n':
        $result[$key] = filter_input($request, $key, FILTER_SANITIZE_STRING);
        break;
      case 'i':
        $result[$key]= filter_input($request, $key, FILTER_SANITIZE_NUMBER_INT);
        break;
      case 'f':
        $result[$key]= filter_input($request, $key, FILTER_SANITIZE_NUMBER_FLOAT);
        break;
    }
  }

  return $result;
}