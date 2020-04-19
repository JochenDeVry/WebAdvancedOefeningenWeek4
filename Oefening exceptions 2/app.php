<?php
require_once 'vendor/autoload.php';

$n=textnode\TextNode::makeNode("a");
$n->addNode("b");
$n->addNode("c");
$n->printAll();
try{
    $n->printTextNodeAt(5);
}
catch(\textnode\TextNodeException $e){
    print($e);
}