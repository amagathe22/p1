<?php

include "Modèle/offre.php";
include "Modèle/model.php";

$model = new Model();

$offre_dispo = $model->getListoffre();
include "Vue/vue_offre.php";


?>
