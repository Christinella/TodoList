CREATE TABLE TD_USER(
   ID COUNTER,
   Prenom VARCHAR(50) NOT NULL,
   Nom VARCHAR(50) NOT NULL,
   Email VARCHAR(100) NOT NULL,
   mdp VARCHAR(50) NOT NULL,
   PRIMARY KEY(ID)
);

CREATE TABLE TD_Priorité(
   ID COUNTER,
   NomPriority VARCHAR(50) NOT NULL,
   PRIMARY KEY(ID)
);

CREATE TABLE TD_Categorie(
   ID COUNTER,
   NomCategory VARCHAR(50) NOT NULL,
   PRIMARY KEY(ID)
);

CREATE TABLE TD_Task(
   ID COUNTER,
   Titre VARCHAR(100) NOT NULL,
   Echeance DATE NOT NULL,
   Description VARCHAR(200) NOT NULL,
   ID_1 INT NOT NULL,
   ID_2 INT NOT NULL,
   PRIMARY KEY(ID),
   FOREIGN KEY(ID_1) REFERENCES TD_Priorité(ID),
   FOREIGN KEY(ID_2) REFERENCES TD_USER(ID)
);

CREATE TABLE Has(
   ID INT,
   ID_1 INT,
   PRIMARY KEY(ID, ID_1),
   FOREIGN KEY(ID) REFERENCES TD_Task(ID),
   FOREIGN KEY(ID_1) REFERENCES TD_Categorie(ID)
);
