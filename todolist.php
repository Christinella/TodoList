<link href="assets/style.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand">TODOLIST</a>
    
      <a href="./Profil.php"><button id="Profil" type="button" class="btn btn-outline-light">Profil</button></a>
      <a href="./inscription.php"><button id="Profil" type="button" class="btn btn-outline-light">deconnexion</button></a>
    </div>
  </nav>
<?php
include "./views/dropList.php";
include "./views/formulaire.php"
?>
