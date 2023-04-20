<?php

function openFile(string $file, string $mode) {
  return fopen($file, $mode);
}

function closeFile(string $file): bool {
  if(fclose($file))
    return true;

  return false;
}

function getFileData(string $file): string {
  return file_get_contents($file);
}

function sendFileData(string $file, mixed $data): bool {
  return file_put_contents($file, $data);
}

function flushFileData(string $file): bool {
  if(fopen($file, 'w') && fclose($file))
    return true;

  return false;
}