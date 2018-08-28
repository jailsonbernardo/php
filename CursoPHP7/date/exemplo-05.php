<?php

$dt = new DateTime();

$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y");

$dt->add($periodo);

echo '<br>';

echo $dt->format("d/m/Y");
