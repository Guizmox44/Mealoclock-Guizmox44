<?php

namespace MealOclock\Models;

class CoreModel {

    protected static $tableName;

    public static function findAll( ) {

        // On récupère la connexion à la BDD
        $conn = \MealOclock\Utils\Database::getDB();

        // On crée la requête SQL de récupération des données
        // On doit récupérer le nom de la table sur laquelle
        // on veut exécuter notre requête. Pour ça, on défini
        // le nom directement dans les classes enfants. Comme
        // on veut faire référence à la propriété "$tableName"
        // de la classe enfant, on doit forcément utiliser le
        // mot clé "static" à la place du mot clé "self"
        $sql = 'SELECT * FROM ' . static::$tableName . ' ORDER BY ' . static::$orderBy;

        // On exécute la requête
        $stmt = $conn->query($sql);

        // On récupère tous les résultats
        return $stmt->fetchAll(\PDO::FETCH_CLASS, static::class);
    }
}
