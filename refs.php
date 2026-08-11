<?php

$person = "john";
$client = &$person;

var_dump($person, $client);

$client = "jane";

var_dump($person, $client);

$person = "doe";

var_dump($person, $client);