<?php


abstract class Character {

    public $nom = "Cho Sang-woo";
    public $nbrBilles = 35;

    public function __construct($nom, $nbrBilles) {
        $this->nom = $nom;
        $this->nbrBilles = $nbrBilles;
    }

    function getNom () {
        return $this->nom;
    }
    function getNbrBilles () {
        return $this->nbrBilles;
    }

    abstract public function WinOrLoose(); // abstract car ca depend du Hero. Je comprends pas comment utiliser cette fonction

}

class Emmenie {

    public $billesEnnemie; // nombre de billes de lennemie
    public $age; // et son age
    
    public function __construct($name, $marbles, $age) {
        $this->marbles = $marbles;
        $this->age = $age;
    }

    public function tricher() { // On verifie ici si on peut tricher ( age de lennemie plus grand que 70. )
        
        return $this->age > 70;
    }
}

// larray avec les 20 adversaires
$ennemie = [];
for ($i = 1; $i <= 20; $i++) {
    $ennemie[] = new Emmenie("Adversaire $i", rand(1, 20), rand(18, 80));
}


class Hero extends Character { // Ici je extends la class car le Hero est un Character.
    // Mon personnage gagne 3 billes en plus si il gagne. Jarrive pas a savoir si je dois faire une fonction ou non pour faire un : SI il gagner le total de ses billes =+ 3 ou =+ 0 si il perds je sais pas si c'est qu'il faut le mettre.

    public function bonus() {
    //ajouter + 3 a nbrBilles de la class character si win
    }

    public function malus() {
    //ajouter + 0 a nbrBilles de la class character si loose
    }

    public function WinOrLoose (){
        // fonction qui va dire que si on win on fait + 3 et + 0 si on perds. 
    }

    public function pairOuImpair() {
        $choix ="";
        $choixRandom = rand (0,1);

        if ($choixRandom == 1) {
            $choix = "Impair";
        } else {
            $choix = "Pair";
        }

        return $choix;
    }
}

class Game {


    public function rencontre() {
        // faire une rencontre aléatoire avec larray des 20 joueurs ( je n'arrive pas a faire cette array je comprends pas comment le construire) 
    }

    public function combats() {
        // Je combat se deroule entre mon Hero et un Ennemie, ou je vais choisir entre pair et impair mais encore jarrive pas a faire larray avec les 20 persos
    }

}


?>