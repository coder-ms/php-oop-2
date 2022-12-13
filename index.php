<?php
// REQUIRED
require_once __DIR__ . '/Models/CatsProduct.php';
require_once __DIR__ . '/Models/DogsProduct.php';


/* CREAZIONE NUOVA CLASSE */


$dogs = new DogsProduct('Bocconcini per cani', '19.90 $');
$dogs1 = new DogsProduct('Ossi per cani', '9.90 $');
$dogs2 = new DogsProduct('Guinzaglio per cani', '22.90 $');

$cats = new CatsProduct('Crocchette per gatti', '18.90 $');
$cats1 = new CatsProduct('Trespolo per gatti', '107.90 $');
$cats2 = new CatsProduct('Lettiera per gatti', '68.90 $');

// PROVA VAR DUMP (FUNZIONANTE)
//var_dump($cats);
//var_dump($dogs);

// INCLUDE
include __DIR__ . '/partials/header.php';
include __DIR__ . '/partials/main.php';
include __DIR__ . '/partials/footer.php'; 
?>