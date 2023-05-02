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
        $user = new User();
        $user->setEmail("Y.SKRZYPCZYK@gmail.com");
        $user->setFirstname("Yves");
        $user->setLastname("SkrzYpczYK");
        $user->setPassword("Test1234");
        $user->setCountry("PL");
        $user->save();
    }

    public function logout(): void
    {
        echo "Logout";
    }

}