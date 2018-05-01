<!DOCTYPE html>
<html>
<head>
<title>Liste des candidats</title>
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


/* Style the footer */
.footer {
    background-color: #f1f1f1;
    padding: 10px;
    text-align: center;
}
</style>
</head>

<div class="header">
  <h1>Liste des candidats à vos offres</h1>
  <p>Veuillez sélectionner le candidat qui vous intéresse</p>
</div>

<div class="topnav">
  <a href="index.php?action=logout">Se déconnecter</a>
  <a href="javascript:window.location.href=window.location.href">Rafraichir la liste des candidats</a>
  
</div>

<body>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #0040FF;
    color: white;
}
</style>
</body>
<body>

<table id="customers">
  <tr>
    <th>Poste</th>
    <th>Nom du candidat</th>
    <th>Mail</th>
  </tr>
  <tr>
    <td>Ingénieur développement Web JAVA</td>
    <td>Sachat PETRIT</td>
    <td>sacharechercheunjob@gmail.com</td>
  </tr>
</table>

</body>
</html>






