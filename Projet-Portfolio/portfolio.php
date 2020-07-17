<?php
include "connexion.php";
include "header.php";
?>


<body>

<nav class="navbar navbar-expand-md navbar-dark ml-auto">
 <a class="navbar-brand" href="#">Portfolio</a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
   <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="collapsibleNavbar">
   <ul class="navbar-nav ml-auto">
     <li class="nav-item">
       <a class="nav-link" href="#block1">à propos</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="#block2">projets</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="#block4">articles</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="#block6">contact</a>
     </li>
   </ul>
 </div>
</nav>

<article id="block1">
<h1> Thibault Sylvain </h1>
<h2> Developpeur web et web mobile </h2>
<p>texte disant ce que je fais flemme de rediger maintenant je verrais plus tard </p>
</article>

<article id="block2">
<nav class="navbar navbar-expand-sm navbar-dark ">
  <span>
    <h1>
    Mes projets
  </h1>
</span>
</article>

<article id="block3">
<div class="wrapper">
<div class="media">
<div class="layer">
    <p>Projet : integration de maquette <br>
      <a href="https://github.com/S-Thibault/integration-template-restaurant">lien du projet sur github</a><br>
      <a href="https://sylvaint.promo-41.codeur.online/integration-bootstrap/#">lien</a>
    </p>
  </div>
<img src="img/maquette.gif" alt="" />
</div>
 <div class="media">
<div class="layer">
    <p>Projet : files explorer<br>
      <a href="https://github.com/S-Thibault/files-explorer">lien du projet sur github</a></p>

  </div>
<img src="img/filesexplorer.png" alt="" />
</div>
   <div class="media">
<div class="layer">
    <p>Projet : bomberman<br>
      <a href="https://github.com/S-Thibault/bomberman-js">lien du projet sur github</a></p>

  </div>
<img src="img/bomberman.gif" alt="" />
</div>
</div>
</article>

<article id="block4">
<nav class="navbar navbar-expand-sm navbar-dark ">
  <span>
    <h1>
    Mes articles
  </h1>
</span>
</article>

<article id="block5">

  <?php
    $connect = mysqli_connect("127.0.0.1", "root", "", "portfolio");

    /* Vérification de la connexion */
    if (!$connect) {
       echo "Échec de la connexion : ".mysqli_connect_error();
       exit();
    }

     $requete = "SELECT * FROM article ORDER BY Date";
     if ($resultat = mysqli_query($connect,$requete)) {
        date_default_timezone_set('Europe/Paris');
        /* fetch le tableau associatif */
        while ($ligne = mysqli_fetch_assoc($resultat)) {
           $dt_debut = date_create_from_format('Y-m-d H:i:s', $ligne['Date']);
           echo "<h3>".$ligne['Titre']."</h3>";
           echo "<h4>Le ".$dt_debut->format('d/m/Y H:i:s')."</h4>";
           echo "<div style='width:400px'>".$ligne['Commentaire']." </div>";
           if ($ligne['Photo'] != "") {
              echo "<img src='photos/".$ligne['Photo']."' width='200px' height='200px'/>";
           }
           echo "<hr />";
        }
     }
     ?>
     <br />
     <a href="formulaireAjout.php" >insertion d'articles</a>
</article>

<article id="block6">
<nav class="navbar navbar-expand-sm navbar-dark ">
  <span>
    <h1>
    contact
  </h1>
</span>
</article>

  <footer id="block7">
    <footer class="social">

<?php
include "traitement_formulaire.php";
?>
        <div class="container">
          <ul style="list-style-type: none" class="row d-flex justify-content-center">
            <div class="row pt-4">
              <li><a href="https://github.com/S-Thibault" style="color:#fff">Github</a></li>
              <li><a href="https://www.linkedin.com/in/thibault-sylvain/" style="color:#fff">Linkedin</a></li>
            </div>
          </ul>
        </div>

      </footer>
</footer>

</body>
</html>
