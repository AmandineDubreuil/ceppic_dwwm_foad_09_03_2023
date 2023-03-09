<?php
require_once './inc/fonctions.php';
require_once './inc/pdo.php';
require_once './partials/head.php';

$id = $_GET['id'];
$slug = $_GET['slug'];
$title = $_GET['title'];
$year = $_GET['year'];
$genres = $_GET['genres'];
$plot = $_GET['plot'];
$directors = $_GET['directors'];
$cast = $_GET['cast'];
$writers = $_GET['writers'];
$runtime = $_GET['runtime'];
$mpaa = $_GET['mpaa'];
$rating = $_GET['rating'];
$popularity = $_GET['popularity'];
$poster_flag = $_GET['poster_flag'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') :
    foreach ($_POST as $key => $value) :
        $_POST[$key] = checkXSSPostValue($value);
        $slugPost = $_POST['slug'];
        $titlePost = $_POST['title'];
        $yearPost = $_POST['year'];
        $genresPost = $_POST['genres'];
        $plotPost = $_POST['plot'];
        $directorsPost = $_POST['directors'];
        $castPost = $_POST['cast'];
        $writersPost = $_POST['writers'];
        $runtimePost = $_POST['runtime'];
        $mpaaPost = $_POST['mpaa'];
        $ratingPost = $_POST['rating'];
        $popularityPost = $_POST['popularity'];
        $poster_flagPost = $_POST['poster_flag'];

        if (!empty($value)) :
            editStrFilm($id,$key,$value);
        endif;

    endforeach;



endif;
?>

<form class="modification" action="" method="post">

    <div>
        <label for="slug">Slug</label>
        <span class="error"><?= isset($error['slug']) ? $error['slug'] : "" ?></span>
        <input type="text" name="slug" id="slug" placeholder="<?= $slug ?>">
    </div>
    <div>
        <label for="title">Titre</label>
        <span class="error"><?= isset($error['title']) ? $error['title'] : "" ?></span>
        <input type="text" name="title" id="title" placeholder="<?= $title ?>">
    </div>
    <div>
        <label for="year">Année</label>
        <span class="error"><?= isset($error['year']) ? $error['year'] : "" ?></span>
        <input type="text" name="year" id="year" placeholder="<?= $year ?>">
    </div>
    <div>
        <label for="genres">Genre</label>
        <span class="error"><?= isset($error['genres']) ? $error['genres'] : "" ?></span>
        <input type="text" name="genres" id="genres" placeholder="<?= $genres ?>">
    </div>
    <div>
        <label for="plot">Synopsis</label>
        <span class="error"><?= isset($error['plot']) ? $error['plot'] : "" ?></span>
        <textarea name="plot" id="plot" cols="30" rows="10" placeholder="<?= $plot ?>"></textarea>
    </div>
    <div>
        <label for="directors">Réalisateurs</label>
        <span class="error"><?= isset($error['directors']) ? $error['directors'] : "" ?></span>
        <input type="text" name="directors" id="directors" placeholder="<?= $directors ?>">
    </div>
    <div>
        <label for="cast">Acteurs</label>
        <span class="error"><?= isset($error['cast']) ? $error['cast'] : "" ?></span>
        <input type="text" name="cast" id="cast" placeholder="<?= $cast ?>">
    </div>
    <div>
        <label for="writers">Scénaristes</label>
        <span class="error"><?= isset($error['writers']) ? $error['writers'] : "" ?></span>
        <input type="text" name="writers" id="writers" placeholder="<?= $writers ?>">
    </div>
    <div>
        <label for="runtime">Durée</label>
        <span class="error"><?= isset($error['runtime']) ? $error['runtime'] : "" ?></span>
        <input type="text" name="runtime" id="runtime" placeholder="<?= $runtime ?>">
    </div>
    <div>
        <label for="mpaa">Pegi</label>
        <span class="error"><?= isset($error['mpaa']) ? $error['mpaa'] : "" ?></span>
        <input type="text" name="mpaa" id="mpaa" placeholder="<?= $mpaa ?>">
    </div>
    <div>
        <label for="rating">Note</label>
        <span class="error"><?= isset($error['rating']) ? $error['rating'] : "" ?></span>
        <input type="text" name="rating" id="rating" placeholder="<?= $rating ?>">
    </div>
    <div>
        <label for="popularity">Popularité</label>
        <span class="error"><?= isset($error['popularity']) ? $error['popularity'] : "" ?></span>
        <input type="text" name="popularity" id="popularity" placeholder="<?= $popularity ?>">
    </div>
    <div>
        <label for="poster_flag">Affiche</label>
        <span class="error"><?= isset($error['poster_flag']) ? $error['poster_flag'] : "" ?></span>
        <input type="text" name="poster_flag" id="poster_flag" placeholder="<?= $poster_flag ?>">
    </div>

    <!-- submit -->
    <input type="submit" value="Enregistrement">
</form>




<?php

require_once './partials/foot.php';
