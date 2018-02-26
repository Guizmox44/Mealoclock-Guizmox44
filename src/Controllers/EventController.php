<?php

namespace MealOclock\Controllers;

class EventController extends CoreController {

    // Affiche la liste des évènements
    public function list() {

        echo $this->templates->render('event/list');
    }

    // Affiche la page d'un évènement
    public function read() {

        echo $this->templates->render('event/read');
    }

    // Permet de s'inscrire/désinscrire d'un évènement
    public function signupdate() {

    }

    // Permet de créer un nouvel évènement
    public function create() {

        echo $this->templates->render('event/create');
    }

    // Permet de rechercher des évènements
    public function search() {

    }

    // Permet de modifier un évènement
    public function update() {

        echo $this->templates->render('event/update');
    }
}
