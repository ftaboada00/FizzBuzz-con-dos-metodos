<?php
include_once "fizzbuzz-nuevo.class.php";

$newList = new FizzBuzz();
echo json_encode($newList->list(15));





