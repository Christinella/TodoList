<form class="row g-3">
<div class="col-12">
    <label for="inputAddress2" class="form-label">Nom Tâches</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Faire la vaiselle">
  </div>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
    <div class="col-md-2">
    <label for="inputZip" class="form-label">Date Limite</label>
    <input type="date" class="form-control" id="inputZip">
  </div>
  <select class="form-select" aria-label="Default select example">
  <option selected>Class your tasks</option>
  <option value="1">Urgent</option>
  <option value="2">Important</option>
  <option value="3">No Stress</option>
</select>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Enregistrer</button>
  </div>
</form>