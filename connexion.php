<link href="assets/style.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<?php
include './Composant/nav.php';








?>
<div class="Bandeau">
        <p>Connecte-toi !</p>
    </div> 

<body>
<form method="POST" action="Todolist.php"row g-3">
 
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary" id="enregistrer">Se connecter</button>
  </div>
</form>
</body>