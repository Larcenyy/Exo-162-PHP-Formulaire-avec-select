<?php

if (isset($_GET['nom']) & isset($_GET['prenom'])){
    $name = $_GET['nom'];
    $firstname = $_GET['prenom'];

    echo $name . $firstname;
}
else if (isset($_POST['nom']) & isset($_POST['prenom'])){
    $name = $_POST['nom'];
    $firstname = $_POST['prenom'];

    echo $name . $firstname;
}
else{
    echo "problème";
}


