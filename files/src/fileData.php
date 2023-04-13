<?php

function getFileData(string $file): string {
  return file_get_contents($file);
}

function sendFileData(string $file, mixed $data): bool {
  return file_put_contents($file, $data);
}