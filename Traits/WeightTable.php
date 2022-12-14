<?php 
    trait WeightTable{
        protected $weight;

        public function getWeight(){
            return $this->weight;
        }
        public function setWeight( $typology ,$weight, $unit){
            $this->weight = $typology . $weight . $unit;
        }

    }
?>