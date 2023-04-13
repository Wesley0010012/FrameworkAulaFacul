<?php

function getServerDate(): string {
  $clock = getServerClock();

  return date('Y-m-d', $clock);
}

function defineClockStyle() {
  $param = func_get_args();
  $counter = func_num_args();
}
