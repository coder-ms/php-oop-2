<?php
class DogsProduct
{
  // DATI PRINCIPALI
  public string $name;
  public $price;


  public function __construct(string $name, $price)
  {
    $this->name = $name;
    $this->price = $price;
  }

  public function getDogsProudctDetails()
  {
    $dogs_name = $this->name;
    $dogs_price = $this->price;
    return "$dogs_name <br> $dogs_price";
  }
}
?>