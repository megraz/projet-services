<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html  lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">  	
    <meta name="viewport" content="width=device-width, user-scalable=yes" /><!--user-scalable=yes” sert à indiquer que l’utilisateur peut zoomer sur le contenu-->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" />
        <title>Nos services</title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <form method="POST" action="login.php"> <!--ou action="RegisterForm.php"-->
            <section class="inscription_formulaire">
            <label>Pseudo :</label>
            <input type="text" id="pseudo" name="pseudo"/>
            <label>Mot de Passe :</label>
            <input type="password" id="mdp" name="mdp"/>
            <!--<button name="inscrire" type="submit">S'inscrire</button>-->
            <button name="connexion" type="submit">Connexion</button>
            </section>
        </form>
        <a href="RegisterForm.php">S'inscrire</a>
        <!--<script src="main.js"></script>-->
    </body>
</html>
