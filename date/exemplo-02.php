<?php

// $timestamp = strtotime("2001-09-11");
$timestamp = strtotime("+1 week");

echo date("l, d/m/Y", $timestamp);

?>