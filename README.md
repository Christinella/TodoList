CONTEXTE DU PROJET 


L’objectif est de créer une application SPA (single page application), c’est à dire créer un site contenant une unique page qui ne sera pas rechargée lorsqu’une action y sera menée.
L'utilisateur pourra, une fois connecté, retrouver sa session.
Dans notre cas, cela s’articulera autour d’une liste de tâches, aussi appelée “todo list”. Lorsque l’utilisateur interagit avec la page web, pour créer une nouvelle tâche ou en valider une, la page ne sera pas rechargée grâce à AJAX (Asynchronous JavaScript And XML).
Le traitement des données se fera par l’intermédiaire de requêtes envoyés au backend en PHP.
Les données seront stockées dans une base de données créée spécialement pour le brief. Vous communiquerez avec cette dernière par l’intermédiaire de PHP et PDO.
