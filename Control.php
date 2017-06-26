<?php
include_once './User.php';
 $location = $_POST['ville']. "(".$_POST['postal'].")";
 $new_user = new User($_POST['pseudo'], $_POST['mdp'], $_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['telephone'], $_POST['ville'], date('d.m.y'), $location);
 $new_user->afficheProfil();
 $new_user->stock();

 /*
 $location = $_POST['ville']. "(".$_POST['postal'].")";
 $new_user = new User($_POST['pseudo'], $_POST['mdp'], $_POST['avatar'], $_POST['nom'], $_POST['prenom'], $_POST['coordonnees'], $_POST['mail'], $_POST['telephone'], $_POST['adresse'], $_POST['ville'], $_POST['diplomes'], date('d.m.y'), $location);
 $new_user->afficheProfil();
 $new_user->stock();
  */
