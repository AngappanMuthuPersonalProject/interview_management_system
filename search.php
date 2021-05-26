<?php

$a = new DateTime('08:00');
$b = new DateTime('16:00');

$workingHours = (strtotime($b) - strtotime($a)) / 3600;

?>
