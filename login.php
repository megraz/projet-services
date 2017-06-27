<?php
include_once './User.php';

if (isset($_POST['pseudo']) && (isset($_POST['mdp']))) {
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $pseudo = $post['pseudo'];
    $mdp = md5($post['mdp']);
    if (is_file('user/' . $pseudo . '.txt')) {
        $contenu = unserialize(file_get_contents('user/' . $pseudo . '.txt'));
        
        //var_dump($contenu);
        //var_dump($mdp);
        $mdp_data = $contenu->getMdp();
       
        if ($mdp_data == $mdp) {
            session_start();
            $_SESSION['nom'] = $pseudo;
            echo 'connecté';
            header("location:index.php"); //redirige l'utilisateur sur la pge index
        } else {
            echo 'pas connecté';
        }
    } else {
        echo 'l\'utilisateur ' . $pseudo . ' n\'existe pas';
    }
} else {
    echo 'pas de données';
}
?>

<a href="index.php">Retour</a>

