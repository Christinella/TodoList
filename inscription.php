<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="script.js"  type="module" defer></script>
    <title>TodoList</title>
</head>
<header>
  <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand">TODOLIST</a>
      <a href="../connexion.php"><button type="button" class="btn btn-outline-light">connexion</button></a>
     </form>
    </div>
    
  </nav>
</header>


<body>
   <div class="Bandeau">
        <p>Inscrit-toi !</p>
    </div> 
    <form method="POST" action="traitement.php" class= "row g-3"  id="myForm">
  <div class="col-md-6">
    <label for="Nom" class="form-label">Nom</label>
    <input type="text" class="form-control" id="Nom" name="Lastname">
  </div>
  <div class="col-md-6">
    <label for="prénom" class="form-label">Prénom</label>
    <input type="text" class="form-control" id="prénom" name="name">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="Email">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" id="inputPassword4"name="Mot de passe">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Confirmation du mot de passe</label>
    <input type="password" class="form-control" id="inputPassword4" name="Confirmation mot de passe">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" id="enregistrer">Enregistrer</button>
  </div>
</form>
<div class="toast" id="modal" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded me-2" alt="...">
    <strong class="me-auto">Bootstrap</strong>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
   Votre compte à bien été créer !
  </div>
</div>
</body>

</html>