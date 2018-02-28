<?php

namespace MealOclock\Controllers;

class UserController extends CoreController {

    // Affiche la page de création de compte
    // et permet de créer un compte
    public function create( $params ) {

        // On déclare la variable avant le "if"
        // pour que dans tous les cas elle existe bien
        $errors = [];

        // On regarde si le formulaire a été validé ou pas
        if (!empty($_POST)) {

            // L'utilisateur a validé le formulaire
            // On vérifie les données du formulaire
            $errors = \MealOclock\Models\UserModel::checkData( $_POST );

            // On vérifie si on a des erreurs
            if (count($errors) === 0) {

                // On n'a pas d'erreurs
                // On crée le compte
                $user = new \MealOclock\Models\UserModel();
                $user->setFirstname($_POST['firstname']);
                $user->setLastname($_POST['lastname']);
                $user->setEmail($_POST['email']);
                $user->setPassword($_POST['password']);
                $user->setAddress($_POST['address']);
                $user->setDescription($_POST['description']);
                $user->save();

                // Tout c'est bien passé
                // On peut rediriger notre utilisateur sur
                // la page de connexion
                // header('Location: /oclock/temp/mealoclock/login');
                header('Location: ' . $this->router->generate('login') );
            }
        }

        echo $this->templates->render('user/create', [ 'errors' => $errors ]);
    }

    // Affiche le formulaire de connexion et
    // gère la connexion
    public function login() {

        echo $this->templates->render('user/login');
    }

    // Permet de se déconnecter
    public function logout() {

    }

    // Affiche la page d'oublie de mot de passe
    public function forgot() {

        echo $this->templates->render('user/forgot');
    }

    // Permet de modifier son mot de passe
    public function update() {

        echo $this->templates->render('user/update');
    }
}
