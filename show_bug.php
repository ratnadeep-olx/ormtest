<?php
// show_bug.php
require_once "bootstrap.php";

$theBugId = $argv[1];

$bug = $entityManager->getRepository("Bug")->find($theBugId);
echo "Bug: ".$bug->getDescription()."\n";
echo "Engineer: ".$bug->getEngineer()->getName()."\n";
foreach($bug->getProducts() as $pro) {
    echo "Product: " . $pro->getName() . "\n";
}