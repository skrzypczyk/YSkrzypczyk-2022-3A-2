<?php
//Contrainte : utilisation des Namespace

//Récupérer dans l'url l'uri /login ou /user/toto
//Nettoyer la donnée

//Créer un fichier yaml contenant le route du type :
// /login:
//      controller: Security
//      action: login
//Le fichier est dans www et porte le nom de route.yml

//En fonction de l'uri récupérer le controller et l'action
//Effectuer toutes les vérifications que vous estimez nécessaires
//En cas d'erreur effectuer un simple Die avec un message explicite
//Dans le cas ou tout est bon créer une instance du controller
//et appeler la methode action

//Exemple :
// $controller = new Security();
// $controller->login();