
<?php
require_once __DIR__ . '/vendor/autoload.php';
use App\Entity\User;
$user = new User('Hong', 'hong@gmail.com', 'madman');
// $user->printMe();
echo $user->getName();