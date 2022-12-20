<?php

class Movie{
    //attributi
    public $title;
    public $genre;
    public $year;
    
    public function __construct($title, $genre, $year)
    {
        $this -> title = $title;
        $this -> genre = $genre;
        $this -> year = $year;
        
    }

    public function genere(){
        if($this->genre = 'commedia'){
            return "il genere del film e commedia ";
        }else{
            return "Il genere del film non è commmedia ";
        }
    }

}

?>