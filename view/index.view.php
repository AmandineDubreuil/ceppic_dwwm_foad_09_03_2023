<?php
require_once './inc/fonctions.php';
require_once './inc/pdo.php';
require_once './partials/head.php';





?>

<table>
    <thead>
        <th>ID</th>
        <th>Slug</th>
        <th>Titre</th>
        <th>Année</th>
        <th>Genre</th>
        <th>Synopsis</th>
        <th>Réalisateurs</th>
        <th>Acteurs</th>
        <th>Scénaristes</th>
        <th>Durée</th>
        <th>Pegi</th>
        <th>Note</th>
        <th>Popularité</th>
        <th>Date modification</th>
        <th>Date création</th>
        <th>Affiche</th>
    </thead>
    <tbody>

        <?php
        foreach (getderniersFilms(10) as $film => $value) :
        ?><tr>
                <td class="id"><?= $value["id"] ?></td>
                <td class="slug"><?= $value["slug"] ?></td>
                <td class="title"><?= $value["title"] ?></td>
                <td class="year"><?= $value["year"] ?></td>
                <td class="genres"><?= $value["genres"] ?></td>
                <td class="plot"><?= $value["plot"] ?></td>
                <td class="directors"><?= $value["directors"] ?></td>
                <td class="cast"><?= $value["cast"] ?></td>
                <td class="writers"><?= $value["writers"] ?></td>
                <td class="runtime"><?= $value["runtime"] ?></td>
                <td class="mpaa"><?= $value["mpaa"] ?></td>
                <td class="rating"><?= $value["rating"] ?></td>
                <td class="popularity"><?= $value["popularity"] ?></td>
                <td class="modified"><?= $value["modified"] ?></td>
                <td class="created"><?= $value["created"] ?></td>
                <td class="poster_flag"><?= $value["poster_flag"] ?></td>

            </tr>
        <?php endforeach; ?>


    </tbody>
</table>
<?php

require_once './partials/foot.php';
