<?php

include "Model/offre.php";
include "Model/model.php";

$model = new Model();

$offre_dispo = $model->getListOffre();
/*header("Location: index.php?page=offre");*/
include "Vue/vue_offre.php"



?>
