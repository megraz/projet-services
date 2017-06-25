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
        <link rel="stylesheet" href="css/style.css" />
        <title>Formulaire inscription</title>
    </head>
    <body>
        <?php
        ?>
        <h1>Inscription</h1>
        <form method="POST" action="Control.php">
            <section class="form_inscrip">
                <p>
                <!--Pour lier le label au champ, il faut lui donner un attribut for qui a la même valeur que l'id du champ-->
                <label for="pseudo">Pseudo </label>
                <input type="text" id="pseudo" name="pseudo" required="required"/>
                <br/>
                <label for="mdp">Mot de Passe </label>
                <input type="password" id="mdp" name="mdp" required="required"/>
                <br/>
                </p>
            </section>
            
            <section class="coordonnees">
                <p>
                    <!--required, pour les champs à saisie obligatoire-->
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" placeholder="nom" required="required"/> <!--Le Placeholder a pour but de décrire brièvement un champs. Sa valeur s’affiche à l’intérieur du champs lorsque celui-ci est vide-->
                <br/>
                <label for="prenom">Prenom</label>
                <input type="text" id="prenom" name="prenom" placeholder="prenom" required="required"/>
                <br/>
                <label for="mail">Mail</label>
                <input type="email" id="mail" name="mail" placeholder="sophie@example.com" size="32" minlength="3" maxlength="64" required="required">
                <br/>
                <label for="postal">Code postal</label>
                <input type="text" id="postal" name="postal" required="required"/>
                <br/>
                <label for="ville">Ville</label>
                <input type="text" id="ville" name="ville" required="required"/>
                <br/>
                <label for="telephone">Numéro de téléphone</label>
                <br/>
                <input type="tel" id="telephone" name="telephone" required="required"/>
                </p>
            </section>
            
            <section class="checkbox">
                <p>
                <input type="checkbox" id="condition" name="condition" />
                <label for="condition">En validant j'accepte les Conditions générales d'utilisation</label>  
                <br/>
                </p>
                <p>
                <input type="submit" name="submit" value="Envoyer" />
                </p>
            </section>
        </form>

    </body>
</html>
