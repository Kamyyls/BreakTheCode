<?php
require_once('src/model/tuile.php');
class partie
{
    private $id;
    private $idUtilisateur;
    private $premierJoueur;
    private $dateDebut;
    private $dateFin;
    private $resultat;
    private $tuileJoueur = array();
    private $tuileIa = array();

    /**
     * @param $id
     * @param $idUtilisateur
     * @param $premierJoueur
     * @param $dateDebut
     * @param array $tuileJoueur
     * @param array $tuileIa
     */
    public function __construct($id, $idUtilisateur, $premierJoueur, $dateDebut, array $tuileJoueur, array $tuileIa)
    {
        $this->id = $id;
        $this->idUtilisateur = $idUtilisateur;
        $this->premierJoueur = $premierJoueur;
        $this->dateDebut = $dateDebut;
        $this->tuileJoueur = $tuileJoueur;
        $this->tuileIa = $tuileIa;
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
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * @param mixed $idUtilisateur
     */
    public function setIdUtilisateur($idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;
    }

    /**
     * @return mixed
     */
    public function getPremierJoueur()
    {
        return $this->premierJoueur;
    }

    /**
     * @param mixed $premierJoueur
     */
    public function setPremierJoueur($premierJoueur)
    {
        $this->premierJoueur = $premierJoueur;
    }

    /**
     * @return mixed
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * @param mixed $dateDebut
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * @return mixed
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * @param mixed $dateFin
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    /**
     * @return mixed
     */
    public function getResultat()
    {
        return $this->resultat;
    }

    /**
     * @param mixed $resultat
     */
    public function setResultat($resultat)
    {
        $this->resultat = $resultat;
    }

    /**
     * @return array
     */
    public function getTuileJoueur()
    {
        return $this->tuileJoueur;
    }

    /**
     * @param array $tuileJoueur
     */
    public function setTuileJoueur($tuileJoueur)
    {
        $this->tuileJoueur = $tuileJoueur;
    }

    /**
     * @return array
     */
    public function getTuileIa()
    {
        return $this->tuileIa;
    }

    /**
     * @param array $tuileIa
     */
    public function setTuileIa($tuileIa)
    {
        $this->tuileIa = $tuileIa;
    }
    public function generationDes20Tuiles() {
        $tuiles = array();

        // Génére 9 tuiles blanches numérotées de 0 à 9
        for ($i = 0; $i < 9; $i++) {
            $numTuile = $i;
            $couleurTuile = 1; // Blanc
            $tuile = new Tuile($numTuile, $couleurTuile);
            $tuiles[] = $tuile;
        }

        // Génére 9 tuiles noires numérotées de 0 à 9
        for ($i = 0; $i < 9; $i++) {
            $numTuile = $i;
            $couleurTuile = 3; // Noir
            $tuile = new Tuile($numTuile, $couleurTuile);
            // Oui c'est un peu chelou mais pas besoin de mettre l'index tab[i] je pense
            $tuiles[] = $tuile;
        }

        // Génére 2 tuiles vertes numérotées 5
        for ($i = 0; $i < 2; $i++) {
            $numTuile = 5;
            $couleurTuile = 2; // Vert
            $tuile = new Tuile($numTuile, $couleurTuile);
            $tuiles[] = $tuile;
        }
        return $tuiles;
    }

    public function recupererLesCartes(){
        global $pdo;
        $requete = $pdo->prepare("SELECT * FROM carte ");
        $requete->execute();
        $cartes = $requete->fetch(PDO::FETCH_ASSOC);

    }




    public function deroulementJeu(){


    }


}