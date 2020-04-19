<?php
require_once 'vendor/autoload.php';

$n=textnode\TextNode::makeNode("a");
$n->addNode("b");
$n->addNode("c");
$n->printAll();
$n->printTextNodeAt(2);