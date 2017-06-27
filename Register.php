<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once './User.php';
include_once './DataBase.php';

if (isset($_POST['inscrire'])) {
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
$user = new DataBase();
$user->createUser(new User($post['pseudo'], md5($post['mdp'])));

header("location:index.php");

session_start();
$_SESSION['nom'] = $post['pseudo'];

}









/* $truc = serialize($user);

  $file = fopen('user.txt', 'w');
  fwrite($file, $truc);
  fclose($file);
  }
  /* $user1 = file_get_contents('user.txt');
  $trad = unserialize($user1);
  var_dump($trad)
  $trad->afficherProfil(); */

/*
  if (!is_dir('user')) {
  mkdir('user');
  }
  $userdata = serialize($this);
  $file = fopen('user/' . $this->pseudo . '.txt', 'w');
  fwrite($file, $userdata);
  fclose($file); */

//echo '<p>Bravo pour la création de ce message</p>';