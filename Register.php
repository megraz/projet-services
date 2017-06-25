<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once './User.php';

if (isset($_POST['inscrire'])) {
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $user = new User($post['pseudo'], $post['mdp']);

    $truc = serialize($user);

    $file = fopen('user.txt', 'w');
    fwrite($file, $truc);
    fclose($file);
}
/* $user1 = file_get_contents('user.txt');
  $trad = unserialize($user1);
  var_dump($trad)
  $trad->afficherProfil(); */

if (!is_dir('posts')) {
    mkdir('posts');
}
$file = fopen('posts/' . $titre
        . '.txt', 'w');
fwrite($file, $contenu);
fclose($file);
//echo '<p>Bravo pour la création de ce message</p>';