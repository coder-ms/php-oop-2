<?php
class CatsProduct{
  // DATI PRINCIPALI
  public string $name;
  public $price;

  public function __construct(string $name, $price)
  {
    $this->name = $name;
    $this->price = $price;
  }

  public function getCatsProudctDetails()
  {
    $cats_name = $this->name;
    $cats_price = $this->price;
    return "$cats_name <br> $cats_price";
  }
}
?>