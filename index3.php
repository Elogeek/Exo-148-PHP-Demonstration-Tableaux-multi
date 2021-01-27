<?php

/***** Tableaux associatifs **********/
//------------------------------------

echo "Tableau associatif : ";
$vehicule = array("nom" => "Aventador LP 700-4",
    "marque" => "Lamborghini",
    "puissance" => 700,
    "prix" => 200000,
);

/*
 * On aurait pu déclarer le tableau de cette façon aussi :
 * $vehicule = [
 *   'nom' => 'Aventador LP 700-4',
 *   'marque' => 'Lamborghini',
 *   'puissance' => 700,
 *   'prix' => 200000,
 * ];
 */

echo print_r($vehicule)."<br><br>";


echo "Accéder aux valeurs du tableau : <br>";
echo "Mon véhicule est un(e) ".$vehicule["marque"].' '.$vehicule["nom"]."avec une puissance de ".$vehicule["puissance"]." cv qui coûte ".$vehicule["prix"]." Euros"."<br><br>";

