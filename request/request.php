<?php

function request() {
  if(isset($_POST)) {
    return INPUT_POST;
  }

  return INPUT_GET;
}