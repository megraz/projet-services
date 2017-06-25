<?php

/**
 * Description of User
 *
 * @author marlene
 */
class User {

    private $pseudo;
    private $mdp;
    private $avatar;
    private $nom;
    private $prenom;
    private $coordonnees;
    private $mail;
    private $telephone;
    private $adresse;
    private $ville;
    private $diplomes;
    private $dateInscription;
    private $age;
    private $photoprofil;
    private $systemepoints;
    private $statut;

    /* La valeur spéciale NULL représente une variable sans valeur
      Une variable est considérée comme null si :
      elle s'est vue assigner la constante NULL.
      elle n'a pas encore reçu de valeur.
      elle a été effacée avec la fonction unset().
     */

    function __construct($pseudo, $mdp, $avatar, $nom, $prenom, $coordonnees, $mail, $telephone, $adresse = null, $ville, $diplomes = null, $dateInscription, $age = null, $photoprofil = null, $systemepoints, $statut = "user") {
        $this->pseudo = $pseudo;
        $this->mdp = $mdp;
        $this->avatar = $avatar;
        $this->nom = $nom;
        $this->prenom = $prenom;
        //$this->coordonnees = $coordonnees;
        $this->mail = $mail;
        $this->telephone = $telephone;
        $this->adresse = $adresse;
        $this->ville = $ville;
        $this->diplomes = $diplomes;
        $this->dateInscription = $dateInscription;
        $this->age = $age;
        $this->photoprofil = $photoprofil;
        $this->systemepoints = $systemepoints;
        $this->statut = $statut;
    }

    /* La méthode magique __set() permet de faire de la surchage de propriétés d'une classe. 
     * Lorsque l'on essaie de fixer la valeur d'une propriété inexistante de la classe, 
     * PHP appelle automatiquement cette méthode de manière implicite.
      En redéfinissant explicitement cette méthode dans le corps de la classe,
     * cela permet de réaliser des contrôles d'accès et de s'assurer que seules quelques propriétés peuvent être maj 
      public function __set($property, $value){}
     * Cette méthode prend deux paramètres : le premier est le nom de l'attribut auquel on a tenté d'assigner une valeur, 
     * le second paramètre est la valeur que l'on a tenté d'assigner à l'attribut. 
     * Cette méthode ne retourne rien. */

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function setDiplomes($diplomes) {
        $this->diplomes = $diplomes;
    }

    public function setPhotoprofil($photoprofil) {
        $this->photoprofil = $photoprofil;
    }

    public function setStatut($statut) {
        $this->statut = $statut;
    }

    public function stock() {
        $data = serialize($this);
        $newFile = fopen("user/" . $this->pseudo . ".txt", "w");
        fwrite($newFile, $data);
        fclose($newFile);
    }

    public function afficheProfil() {
        echo "<section class='profil'>";
        echo "<h2>" . $this->pseudo . "</h2>";
        echo "<p>" . $this->prenom . "</p>";
        echo "<p>" . $this->nom . "</p>";
        echo "<p>" . $this->mail . "</p>";
        echo "<p>" . $this->telephone . "</p>";
        echo "<p>" . $this->ville . "</p>";
        echo "<p>" . $this->dateInscription . "</p>";
        echo "</section>";
    }

}
