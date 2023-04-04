<?php
namespace App\Controllers;
use App\Core\View;

class Main{
    public function index(){
        $view = new View();
    }

    public function contact(){
        echo "Voici ma nouvelle page de contact";
    }


    public function dashboard(){
        echo "Mon tableau de bord";
    }
}