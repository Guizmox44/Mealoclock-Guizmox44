<?php

namespace MealOclock\Controllers;

class CoreController {

    // Va contenir l'objet Plates
    protected $templates;

    public function __construct( $router ) {

        // On instancie notre moteur de templates
        // On lui indique où se trouvent tous nos templates
        // --------------------------
        // /var/www/html
        // /MealOclock/Controllers/MainController.php
        // /League/Plates/Engine.php
        $this->templates = new \League\Plates\Engine(__DIR__ . '/../Views/');

        // On ajoute les données disponibles dans tous les templates
        $this->templates->addData([
            'baseUrl' => (isset($_SERVER['BASE_URI']) ? $_SERVER['BASE_URI'] : ''),
            // 'leNomDeLaDonnee' => 'LaValeur'
            'router' => $router
        ]);
    }
}
