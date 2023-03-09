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

 function getderniersFilms($nombre){

    global $conn;
    $sqlRequete = "SELECT * FROM `movies_full` ORDER BY created DESC LIMIT :nombre";
    $resultat = $conn ->prepare($sqlRequete);
    $resultat ->bindValue(':nombre', $nombre, PDO::PARAM_INT);
    $resultat -> execute();
    return $resultat-> fetchAll();
 }

 function selectFilm($idFilm){
    global $conn;
    $sqlRequete = "SELECT * FROM `movies_full` WHERE id = :idFilm";
    $resultat = $conn ->prepare($sqlRequete);
    $resultat ->bindValue(':idFilm', $idFilm, PDO::PARAM_INT);
    $resultat -> execute();
    return $resultat-> fetchAll();

 }

 function suppFilm($idFilm){
    global $conn;
    $sqlRequete = "DELETE FROM `movies_full` WHERE id = :idFilm";
    $resultat = $conn ->prepare($sqlRequete);
    $resultat ->bindValue(':idFilm', $idFilm, PDO::PARAM_INT);
    $resultat -> execute();

    header('location: http://localhost/FOAD/20230309_SQL_ModifFilms/ceppic_dwwm_foad_09_03_2023/');
 }

