
<?php
require_once __DIR__ . '/vendor/autoload.php';

// use App\Entity\User;
use App\Service\Printer;

// $user = new User('Hong', 'hong@gmail.com', 'madman');

// echo $user->getName();

$printer = new Printer();
$printer->printMe();