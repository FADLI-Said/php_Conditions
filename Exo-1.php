<?php

$age = 22;

if ($age >= 18){
    echo "Vous êtes majeur";
}elseif ($age > 0 && $age < 18) {
    echo "Vous êtes mineur";
}else {
    echo "Âge impossible";
}
?>