<?php
namespace App\Service;
// use App\Entity\PrintAble;
use App\Entity\User;

class Printer {
    // private $printAbles = array();

    // public function add(PrintAble $item){
    //     $this->printAbles[] = $item;
    // }

    // public function printAll(){
    //     foreach($this->printAbles as $item){
    //         $item->printMe();
    //     }
    // }

    public function printMe(){
        $user = new User('Hong', 'hong@gmail.com', 'madman');
        echo $user->getName();
    }
}