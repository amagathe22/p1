<html>
<head>
<title>Postuler à cette offre</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
    background-color: #f1f1f1;
    padding: 20px;
    text-align: center;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #333;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Create three unequal columns that floats next to each other */
.column {
    float: left;
    padding: 10px;
}

/* Left and right column */
.column.side {
    width: 25%;
}

/* Middle column */
.column.middle {
    width: 50%;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column.side, .column.middle {
        width: 100%;
    }
}

/* Style the footer */
.footer {
    background-color: #f1f1f1;
    padding: 10px;
    text-align: center;
}
</style>
</head>
<body>

<div class="header">
  <h1>Offre de contrat d'alternance</h1>
  <p>Vous avez choisi l'offre suivante:</p>
</div>

<div class="topnav">
  <a href="index.php?action=logout">Se déconnecter</a>
  <a href="index.php?page=offre">Revenir à la sélection d'offres</a>
  
</div>

<div class="row">
  <div align=center class="column side">
    <h2> Type de métier </h2>
	    <FORM>
		    <SELECT name="nom" size="1">
		    <OPTION>
		    <OPTION>Alternance
		    <OPTION>Stage
		    <OPTION>CDI
		    <OPTION>CDD
		    </SELECT>
		    <br><br><br><input type=reset>
	    </FORM>
  </div>
  <div align=center class="column middle">
    <h2>Documents à fournir</h2>
    <i> Attachez votre CV</i><br><br>
	<input type="file" id="CV">
	<button onclick="myFunction()">Uploader</button><br><br><br>
	<i>Attachez votre Lettre de Motivation</i><br><br>
	<input type="file" id="Lettre">
	<button onclick="myFunction()">Uploader</button>
    
  </div>
  <div class="column side">
    <h2 align=center>Avez-vous été coopté par un de nos collaborateurs ?</h2>
    <form>
		<br><br><input type="radio" name="Choix" value="Oui" checked> Oui
		<br><br><input type="radio" name="Choix" value="Non"> Non<br>
        <p align=center><input type=reset></p>
	</form>
  </div>
</div>

<div class="footer">
    <p align=center><input type=submit></p>
</div>
  
</body>
</html>