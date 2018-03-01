<?php

namespace MealOclock\Controllers;

class CoreController {

    // Va contenir l'objet Plates
    protected $templates;
    protected $router;

    public function __construct( $router ) {

        // On enregistre le router dans notre objet
        $this->router = $router;

        // On instancie notre moteur de templates
        // On lui indique où se trouvent tous nos templates
        // --------------------------
        // /var/www/html
        // /MealOclock/Controllers/MainController.php
        // /League/Plates/Engine.php
        $this->templates = new \League\Plates\Engine(__DIR__ . '/../Views/');

        // $basePath = '/oclock/temp/mealoclock';
        $basePath = isset($_SERVER['BASE_URI']) ? $_SERVER['BASE_URI'] : '';

        // On ajoute les données disponibles dans tous les templates
        $this->templates->addData([
            'baseUrl' => $basePath,
            // 'leNomDeLaDonnee' => 'LaValeur'
            'router' => $this->router,
            'user' => \MealOclock\Models\UserModel::getUser()
        ]);
    }
}
