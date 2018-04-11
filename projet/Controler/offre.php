<?php

include "Model/offre.php";
include "Model/model.php";

$model = new Model();

$offre_dispo = $model->getListoffre();
include "Vue/vue_offre.php";


?>
