<?php
namespace App\Forms;

use App\Forms\Interfaces\IForm;

class AddUser implements IForm {

    public function getConfig(): array
    {
        return [
            "config"=>[
                "method"=>'POST',
                "action"=>"",
                "enctype"=>"",
                "submit"=>"S'inscrire",
                "cancel"=>"Annuler"
            ],
            "inputs" =>[
                "firstname"=>[
                        "type"=>"text",
                        "placeholder"=>"Votre prénom",
                        "min"=>2,
                        "max"=>60,
                        "error"=>"Votre prénom doit faire entre 2 et 60 caractères"
                    ],
                "lastname"=>[
                    "type"=>"text",
                    "placeholder"=>"Votre nom",
                    "min"=>2,
                    "max"=>120,
                    "error"=>"Votre nom doit faire entre 2 et 120 caractères"
                ],
                "email"=>[
                    "type"=>"email",
                    "placeholder"=>"Votre email",
                    "error"=>"Votre email est incorrect"
                ],
                "pwd"=>[
                    "type"=>"password",
                    "placeholder"=>"Votre mot de passe",
                    "error"=>"Votre mot de passe est incorrect"
                ],
                "pwdConfirm"=>[
                    "type"=>"password",
                    "placeholder"=>"Confirmation",
                    "confirm"=>"pwd",
                    "error"=>"Mot de passe de confirmation incorrect"
                ],
                "country"=>[
                    "type"=>"select",
                    "options"=>["FR", "PL"],
                    "error"=>"Pays incorrect"
                ]
            ]
        ];
    }

}