<?php

namespace Repositories\TachesManager;

use Models\DbConnexion\DbConnexion;
use Models\Taches\Taches;

class TachesManager
{

    private $pdo;

    public function __construct(DbConnexion $dbConnexion)
    {
        $this->pdo = $dbConnexion->getPDO();
    }

    public function allTachesAndCategories()
    {
        $Taches = [];

        try {
            $stmt = $this->pdo->query("SELECT * FROM TD_Taches INNER JOIN TD_Category ON Taches.id_category = category.id");

            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $Taches[] = new Taches($row);
            }
        } catch (\PDOException $e) {
            return $Taches;
        }

        return $Taches;
    }

    public function insertTaches(Taches $objet)
    {
        $name = $objet->gettitre();
        $id_category = $objet->getId_category();
        $description = $objet->getDescription();

        try {
            $stmt = $this->pdo->prepare("INSERT INTO TD_Taches VALUES(NULL, ?, ?, ?, ?)");
            $stmt->execute([$name, $id_category,  $description]);

            return $stmt->rowCount() == 1;
        } catch (\PDOException $e) {
            var_dump($e);
        }
    }
}
