<!DOCTYPE html>
<html>
<head>
	<title>Liste des Offres</title>
</head>
<body>
    <section id = "aff"> </section>
    <script>
        for (let i = 0; i < $offres_dispo.length; i++) {
            $('#aff').prepend('<p>'+"entreprise: "+ <?php echo $offre_dispo[i]->getEntreprise() ?>  '</p>')
            $('#aff').prepend('<p>'+"entreprise: "+ <?php echo $offre_dispo[i]->getDate_de_parution() ?>  '</p>')
            $('#aff').prepend('<p>'+"entreprise: "+ <?php echo $offre_dispo[i]->getDescription() ?>  '</p>')
            $('#aff').prepend('<p>'+"entreprise: "+ <?php echo $offre_dispo[i]->getDate_de_debut() ?>  '</p>')
            $('#aff').prepend('<p>'+"entreprise: "+ <?php echo $offre_dispo[i]->getLieu_de_travail() ?>  '</p>') } 



    </script>



</body>
</html>