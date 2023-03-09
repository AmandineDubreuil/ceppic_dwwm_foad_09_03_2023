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

/***********************
 * formulaire
************************* */


function addFilm($slug, $title, $year, $genres, $plot, $directors, $cast, $writers, $runtime, $mpaa, $rating, $popularity, $poster_flag ){
    global $conn;
    $sqlRequete = "INSERT INTO `movies_full`(`id`, `slug`, `title`, `year`, `genres`, `plot`, `directors`, `cast`, `writers`, `runtime`, `mpaa`, `rating`, `popularity`, `modified`, `created`, `poster_flag`) VALUES (:slug, :title, :year, :genres, :plot, :directors, :cast, :writers, :runtime, :mpaa, :rating, :popularity, now(), poster_flag)";
    $resultat = $conn ->prepare($sqlRequete);
    $resultat ->bindValue(':slug', $slug, PDO::PARAM_STR);
    $resultat ->bindValue(':title', $title, PDO::PARAM_STR);
    $resultat ->bindValue(':year', $year, PDO::PARAM_INT);
    $resultat ->bindValue(':genres', $genres, PDO::PARAM_STR);
    $resultat ->bindValue(':plot', $plot, PDO::PARAM_STR);
    $resultat ->bindValue(':directors', $directors, PDO::PARAM_STR);
    $resultat ->bindValue(':cast', $cast, PDO::PARAM_STR);
    $resultat ->bindValue(':writers', $writers, PDO::PARAM_STR);
    $resultat ->bindValue(':runtime', $runtime, PDO::PARAM_INT);
    $resultat ->bindValue(':mpaa', $mpaa, PDO::PARAM_STR);
    $resultat ->bindValue(':rating', $rating, PDO::PARAM_INT);
    $resultat ->bindValue(':popularity', $popularity, PDO::PARAM_INT);
    $resultat ->bindValue(':poster_flag', $poster_flag, PDO::PARAM_BOOL);
    $resultat->execute();
}