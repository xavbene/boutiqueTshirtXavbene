<?php

// lancement de la session
session_start();

// initialisation et affectation de l'objet PDO
$pdo = new PDO('mysql:host=localhost;dbname=boutique',
                'root',
                '',
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'

                )
);
//* constante qui défini la racine du projet
define('BASE','/boutique-php/');

//* fonction de debug
function debug($var) {
    echo'<pre>';
        var_dump($var);
    echo'</pre>';
}

//*
function traitement($data)
{
    foreach($data as $marqueur => $valeur){
        $data[$marqueur] = htmlspecialchars($valeur);
        // ici on transforme les chevroins ouvrant en entité html qui neutralise les balises script ou style eventuellement injectés
        // on Parle de neutraliser les failles xss et css
    } 
    return $data;
}