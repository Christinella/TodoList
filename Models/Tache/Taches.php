<?php

namespace Models\Taches;

class Taches
{
    private $id;
    private $titre;
    private $Echeance;
    private $description;
    

    function __construct(array $datas)
    {
        foreach ($datas as $key => $value) {
            $this->$key = $value;
        };
    }

    /**
     * Get the value of name
     */
    public function gettitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function settitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of id_category
     */
    public function getEcheance()
    {
        return $this->Echeance;
    }

    /**
     * Set the value of id_category
     *
     * @return  self
     */
    public function setEcheance($Echeance)
    {
        $this->Echeance = $Echeance;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getdescription()
    {
        return $this->description;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

  

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


  
}
