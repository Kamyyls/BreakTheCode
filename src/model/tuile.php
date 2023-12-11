<?php
require_once('src/model.php');

Class tuile
{
    private $id;
    private $numero;
    private $id_couleur;
    private $image;

    /**
     * @param $id
     * @param $numero
     * @param $id_couleur
     * @param $image
     */
    public function __construct($id, $numero, $id_couleur, $image)
    {
        $this->id = $id;
        $this->numero = $numero;
        $this->id_couleur = $id_couleur;
        $this->image = $image;
    }

    /**
 * @param $id
 * @param $numero
 * @param $id_couleur
     * @param $image
     */


    public function __constructSansParametre(){

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getIdCouleur()
    {
        return $this->id_couleur;
    }

    /**
     * @param mixed $id_couleur
     */
    public function setIdCouleur($id_couleur)
    {
        $this->id_couleur = $id_couleur;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }


    public function recupererLesTuiles()
    {
        $lstTuiles = get_results("SELECT * FROM tuile");

        $tuiles = array();
        foreach ($lstTuiles as $tuileData) {
            $tuile = new Tuile(
                $tuileData['id'],
                $tuileData['numero'],
                $tuileData['id_couleur'],
                $tuileData['image']
            );
            $tuiles[] = $tuile;
        }

        return $tuiles;
    }

// les 5 tuiles du joeur ou de l'ordi

    public function generationDe5Tuiles($allTuiles){
        $tuiles=[];
        for($i=0;$i<5;$i++){
            $x= rand(0,9);
            $tuiles[]=$allTuiles[$x];
            $allTuiles=$this->deduitTuiles($tuiles,$allTuiles);
        }
        return $tuiles;
    }

    public function deduitTuiles($tuilesAdeduire, $allTuiles) {

        if (!empty($tuilesAdeduire) && is_array($tuilesAdeduire) &&
            !empty($allTuiles) && is_array($allTuiles)) {

            foreach ($tuilesAdeduire as $tuileToRemove) {

                foreach ($allTuiles as $index => $tuile) {
                    if ($tuile->getNumero() == $tuileToRemove->getNumero() &&
                        $tuile->getIdCouleur() == $tuileToRemove->getIdCouleur()) {
                        unset($allTuiles[$index]);
                        break;
                    }
                }
            }
            $allTuiles = array_values($allTuiles);
        }

        return $allTuiles;
    }


}