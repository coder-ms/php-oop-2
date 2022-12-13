<?php 
class CatsProduct{
    // DATI PRINCIPALI
    public $name;
    public $year;
    public $genre;
    public $runningTime;
    private $actors;
    private $age;

    // variabili calcolate
    public $discountTicket;
    public static $startingPrice = 5;


    function __construct($_name, $_year, $_genre, $_actors = []){
        $this->name = $_name;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->actors = $_actors;

        // operazioni necessarie durante l'instanziamento
        $this->setDiscount();
  }

  // in base all'età, si generi uno sconto
  // se età > 65, lo sconto è del 40%
  // se età < 18, lo sconto è del 20%
  public function setDiscount() {
    if($this->age > 65) {

      $this->discountTicket = 40;

    } 
    else if($this->age < 65){
        $this->discountTicket = 20;
    }
    else {

      $this->discountTicket = 0;

    }
  }
}

$pinocchioActors = ['Marlon Brando', 'Marylin Monroe'];
$pinocchio = new CatsProduct('Pinocchio', '1940', 'Animazione, Avventura', $pinocchioActors);

var_dump($pinocchio);
var_dump($pinocchioActors);

$dumboActors = ['Steven Seagall', 'Brandon lee'];
$dumbo = new CatsProduct('Pinocchio', '1942', 'Animazione, Avventura', $dumboActors);

var_dump($dumbo);
var_dump($dumboActors);

?>