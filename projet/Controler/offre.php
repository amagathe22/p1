<?php

include "Modèle/offre.php";
include "Modèle/model.php";

$model = new $model();

$offre_dispo = $model->getListoffre();
include_once "Vue/vue_offe.php"


?>
