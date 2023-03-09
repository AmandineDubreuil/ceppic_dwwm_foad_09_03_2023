<?php

// echo 'test';

function dbug($valeur)
{
    echo "<pre style='background-color:black;color:white;padding: 15px;overflow:auto;height:300px;'>";
    var_dump($valeur);
    echo "</pre>";
}


function dd($valeur)
{
    echo "<pre style='background-color:black;color:white;padding: 15px;overflow:auto;height:300px;'>";
    var_dump($valeur);
    echo "</pre>";
    die();
}

/****************
 * fonctions sur BDD Movies_full
 * ************* */

 function getderniersFilms($limite){

    global $conn;
    $sqlRequete = "SELECT * FROM `movies_full` ORDER BY created DESC LIMIT :limite";
    $resultat = $conn ->prepare($sqlRequete);
    $resultat ->bindValue(':limite', $limite, PDO::PARAM_INT);
    $resultat -> execute();
    return $resultat-> fetchAll();
 }