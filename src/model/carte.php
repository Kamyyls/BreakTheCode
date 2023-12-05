<?php

class carte
{
    private $id;
    private $question;

    /**
     * @param $id
     * @param $question
     */
    public function __construct($id, $question)
    {
        $this->id = $id;
        $this->question = $question;
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
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param mixed $question
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    }

    function creationDeLaCarte(){

        $lstCartes=get_results("SELECT * from cartes");
        $cartes=[];
        $i=0;

        foreach ($lstCartes as $carte) {
            $cartes[$i]=new carte($carte['id'],$carte['question']);
            $i++;
        }
        return $cartes;
    }

    function generationAleatoireDesCartes($cartes){

        for($i=0;$i<=5;$i++){
            $c=rand(1,25);
            $carte=$cartes[$c];
            echo $carte;
        }

    }
}

