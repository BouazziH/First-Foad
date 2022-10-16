<?php
// tableau index
$tableau = array();
//deux methode pour declarer
$tableau = [];
//remplir un tableau
$tableau2 = array('lundi', 'mardi', 10, 55, true);

$tableau = [false, 'test', 5.20, [66, 20, 13]];
echo '<pre>';
//ajouter une variable au tableau
array_push($tableau, 'voiture'); //une manierre pour ajouter une valeur sur le tableau
array_push($tableau, 'voiture1', 'valeur2'); //on peut ajouter meme plusieur valeurs 
$tableau[] = 'hamza';
$tableau[] = 'titre se sejour';
$tableau[] = 'stage';
$tableau[] = "billet d'avion";
//echo count($tableau); //pour s'avoir combien d'element sur mon tableau
//echo var_dump($tableau); // afichage du tableau
echo '<hr>';
