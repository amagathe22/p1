<?php 
echo (count ($offre_dispo));
$n = count($offre_dispo);


for ($i=1; $i <=$n ; $i++) { 
    
    echo $offre_dispo[$i]->GetEntreprise();
    
    echo $offre_dispo[$i]->GetDescription();
    //echo $offre_dispo[$i]->GetDate_de_debut();
    echo $offre_dispo[$i]->GetLieu_de_travail();
    
}
?>




