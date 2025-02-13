<?php

$age = 22;
$gender = "Femme";

if ($age >= 18) {
    if ($gender == "Homme") {
        echo "Vous êtes un homme et vous êtes majeur";
    } else {
        echo "Vous êtes un femme et vous êtes majeur";
    }
} else {
    if ($gender == "Homme") {
        echo "Vous êtes un homme et vous êtes mineur";
    } else {
        echo "Vous êtes un femme et vous êtes mineur";
    } 
}

?>