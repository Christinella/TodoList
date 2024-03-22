<h1>Créer une nouvelle tache !</h1>
<form method="POST" action="../Models/DBConnexion/DBConnexion.php" class= "row g-3">
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
<div class="col-md-4">
            <label for="inputPriorite" class="form-label">Catégories</label>
            <select id="inputPriorite" class="form-select">
                <option>Travail</option>
                <option>Personnel</option>
                <option>Sport</option>
            </select>
        </div>
  <div class="col-12">
  <button type="submit" class="btn btn-primary" id="enregistrer">Enregistrer</button>
  </div>
</form>