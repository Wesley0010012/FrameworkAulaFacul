<?php

function getServerClock(): int {
  return time();
}

function subtractClock(int $clock): int {
  $serverTime = time();
  return ($clock < $serverTime) ? $serverTime - $clock : $clock - $serverTime;
}

function subtractClocks(int $clockA, int $clockB): int {
  return false;
}

function convertStringToTime(string $clock): int {
  return strtotime($clock);
}