<?php
namespace App\Controllers;
use App\Models\User;

class Security{

    public function login(): void
    {
        echo "Login";
    }

    public function register(): void
    {
        /*
        $user = new User();
        $user->setId(2);
        $user->setEmail("test@gmail.com");
        $user->save();
        */
    }

    public function logout(): void
    {
        echo "Logout";
    }

}