<link href="assets/style.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="/assets/script.js"></script>
<header>
  <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand">TODOLIST</a>
      <a href="../connexion.php"><button type="button" class="btn btn-outline-light">Deconnexion</button></a>
      <a href="./Profil.php"><button id="Profil" type="button" class="btn btn-outline-light">Profil</button></a>
    
    </form>
    </div>
    
  </nav>
</header>


<?php

include './Composant/dropList.php';

?>
<h1>Créer une nouvelle tache !</h1>
<form method="POST" action="" class= "row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Titre</label>
    <input type="Text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Description</label>
    <input type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Date</label>
    <input type="Date" class="form-control" id="inputEmail4">
  </div>
  <select id="Catégories" class="form-select" aria-label="Default select example">
  <option selected>Priorités</option>
  <option value="1">Urgente</option>
  <option value="2">Important</option>
  <option value="3">Normal</option>
</select>
<div class="col-md-6">
    <label for="inputEmail4" class="form-label">La Catégrories</label>
    <input type="Text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" id="enregistrer">Enregistrer</button>
  </div>
</form>