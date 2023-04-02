<?php
require 'vendor/autoload.php';
use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');
$bessie->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');
echo $bessie;

// store the output in a variable
$ouput = $bessie->say();
echo $output;

// or just echo the object for direct output
echo $bessie;