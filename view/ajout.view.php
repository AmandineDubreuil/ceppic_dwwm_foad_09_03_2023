<?php
require_once './inc/fonctions.php';
require_once './inc/pdo.php';
require_once './partials/head.php';

?>

<form class="enregistrement" action="" method="post"></form>

<div>
    <label for="slug">Slug</label>
    <span class="error"><?= isset($error['slug']) ? $error['slug'] : "" ?></span>
    <input type="text" name="slug" id="slug">
</div>
<div>
    <label for="title">Titre</label>
    <span class="error"><?= isset($error['title']) ? $error['title'] : "" ?></span>
    <input type="text" name="title" id="title">
</div>
<div>
    <label for="year">Année</label>
    <span class="error"><?= isset($error['year']) ? $error['year'] : "" ?></span>
    <input type="text" name="year" id="year">
</div>
<div>
    <label for="genres">Genre</label>
    <span class="error"><?= isset($error['genres']) ? $error['genres'] : "" ?></span>
    <input type="text" name="genres" id="genres">
</div>
<div>
    <label for="plot">Synopsis</label>
    <span class="error"><?= isset($error['plot']) ? $error['plot'] : "" ?></span>
    <textarea name="plot" id="plot" cols="30" rows="10"></textarea>
</div>
<div>
    <label for="directors">Réalisateurs</label>
    <span class="error"><?= isset($error['directors']) ? $error['directors'] : "" ?></span>
    <input type="text" name="directors" id="directors">
</div>
<div>
    <label for="cast">Acteurs</label>
    <span class="error"><?= isset($error['cast']) ? $error['cast'] : "" ?></span>
    <input type="text" name="cast" id="cast">
</div>
<div>
    <label for="writers">Scénaristes</label>
    <span class="error"><?= isset($error['writers']) ? $error['writers'] : "" ?></span>
    <input type="text" name="writers" id="writers">
</div>
<div>
    <label for="runtime">Durée</label>
    <span class="error"><?= isset($error['runtime']) ? $error['runtime'] : "" ?></span>
    <input type="text" name="runtime" id="runtime">
</div>
<div>
    <label for="mpaa">Pegi</label>
    <span class="error"><?= isset($error['mpaa']) ? $error['mpaa'] : "" ?></span>
    <input type="text" name="mpaa" id="mpaa">
</div>
<div>
    <label for="rating">Note</label>
    <span class="error"><?= isset($error['rating']) ? $error['rating'] : "" ?></span>
    <input type="text" name="rating" id="rating">
</div>
<div>
    <label for="popularity">Popularité</label>
    <span class="error"><?= isset($error['popularity']) ? $error['popularity'] : "" ?></span>
    <input type="text" name="popularity" id="popularity">
</div>
<div>
    <label for="poster_flag">Affiche</label>
    <span class="error"><?= isset($error['poster_flag']) ? $error['poster_flag'] : "" ?></span>
    <input type="text" name="poster_flag" id="poster_flag">
</div>



<input type="submit" value="Enregistrement">
</form>


<?php

require_once './partials/foot.php';
