<?php

$Magnitude = 8;
$Description = "";

switch ($Magnitude) {
    case 1:
        $Description = "Micro-séisme impossible à ressentir";
        break;

    case 2:
        $Description = "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
        break;

    case 3:
        $Description = "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
        break;

    case 4:
        $Description = "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégâts.";
        break;

    case 5:
        $Description = "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes";
        break;

    case 6:
        $Description = "Fort séisme capable d'engendrer des destructions majeures sur une large distance 180 km) autour de l'épicentre.";
        break;

    case 7:
        $Description = "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
        break;

    case 8:
        $Description = "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
        break;

    case 9:
        $Description = "Séisme capable de tout détruire sur une très vaste zone.";
        break;

    default:
        $Description = "Met 1 chiffre entre 1 et 9... hmar";
        break;
}

echo $Description;

?>