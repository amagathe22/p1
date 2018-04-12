<?php $n = count $offre_dispo;
echo count $offre_dispo ;

for ($i=1; $i <$n ; $i++) { 
    
    echo $offre_dispo[$i]->GetEntreprise();
    echo $offre_dispo[$i]->GetDescription();
    
}
?>




