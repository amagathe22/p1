<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

button {
    background-color:gray;
    color: white;
    padding: 14px 20px;
    cursor: pointer;

}

button:hover {
    opacity:1;
}

.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

.container {
    padding: 16px;
}

.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
}

.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body>
<br><br><br><br><br><br><br><br>
<h1>Publier une offre</h1>

<?php
session_start();
include_once "Model/entreprise.php";
$entreprise = unserialize($_SESSION["entreprise"]);


?>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Publier une offre</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="index.php?action=add_offre" method="post">
    <div class="container">
      <h1>Publication d'une offre</h1>
      <hr>
            
      <TEXTAREA name="description" rows=10 COLS=100 required>Decriver le poste</TEXTAREA> <P>

      <label for="Entreprise"><b>Entreprise</b></label>
      <input type="text" value=<?php echo $entreprise->getNom() ?> name="entreprise" required>

      <label for="Localisation"><b>Localisation</b></label>
      <input type="text" value=<?php echo ($entreprise->getAdresse()) ?> name="adresse" required>      

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Annuler</button>
        <button type="submit" class="signupbtn">Valider</button>
      </div>
    </div>
  </form>
</div>

<br><br>
<form action="index.php?page=accueil_entreprise" method="post">
    <input type="submit" value="Accueil">
</form>

<script>
var modal = document.getElementById('id01');
var modal = document.getElementById('id02');


</script>

</body>
</html>