document.getElementById("taskForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Empêcher le comportement par défaut du formulaire
  
    // Récupérer les valeurs des champs du formulaire
    var titre = document.getElementById("taskTitle").value;
    var description = document.getElementById("taskDescription").value;
    var date = document.getElementById("taskDate").value;
    var categorie = document.getElementById("taskCategory").options[document.getElementById("taskCategory").selectedIndex].text;
  
    // Créer un nouvel élément de liste avec les données du formulaire
    var newItem = document.createElement("li");
    newItem.textContent = "Titre: " + titre + ", Description: " + description + ", Date: " + date + ", Catégorie: " + categorie;
  
    // Ajouter le nouvel élément à la liste des tâches à faire
    document.getElementById("taskList").appendChild(newItem);
  
    // Effacer les champs du formulaire après l'enregistrement
    document.getElementById("taskTitle").value = "";
    document.getElementById("taskDescription").value = "";
    document.getElementById("taskDate").value = "";
  });