<?php
include "header.php";
include "formulaire.php"
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
       <a class="nav-link" href="#">contact</a>
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
    <p>Projet : integration de maquette </p>
  </div>
<img src="img/maquette.gif" alt="" />
</div>
 <div class="media">
<div class="layer">
    <p>Projet : files explorer</p>
  </div>
<img src="img/filesexplorer.png" alt="" />
</div>
   <div class="media">
<div class="layer">
    <p>Projet : bomberman</p>
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
<h1> </h1>
<p> </p>
</article>

<article id="block6">
<nav class="navbar navbar-expand-sm navbar-dark ">
  <span>
    <h1>
    contact
  </h1>
</span>
</article>

  <footer class="block7">
    <footer id="social">

      <form id="contact" method="post" action="traitement_formulaire.php">
	<fieldset><legend>Vos coordonnées</legend>
		<p><label for="nom">Nom :</label><input type="text" id="nom" name="nom" /></p>
		<p><label for="email">Email :</label><input type="text" id="email" name="email" /></p>
	</fieldset>

	<fieldset><legend>Votre message </legend>
		<p><label for="objet">Objet :</label><input type="text" id="objet" name="objet" /></p>
		<p><label for="message">Message :</label><textarea id="message" name="message" cols="30" rows="8"></textarea></p>
	</fieldset>

	<div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer le formulaire !" /></div>
</form>
        <div class="container">
          <ul style="list-style-type: none" class="row d-flex justify-content-center">
            <div class="row pt-4">
              <li><a href="#" style="color:#fff">Github</a></li>
              <li><a href="#" style="color:#fff">Linkedin</a></li>
            </div>
          </ul>
        </div>

      </footer>
</footer>

</body>
</html>
