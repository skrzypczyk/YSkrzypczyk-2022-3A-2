<?php
namespace App\Controllers;
use App\Core\View;

class Main{
    public function index(){
        $view = new View("Main/index", "front");
    }

    public function contact(){
        $view = new View("Main/contact", "front");
    }

    public function dashboard(){
        echo "Mon tableau de bord";
    }
}