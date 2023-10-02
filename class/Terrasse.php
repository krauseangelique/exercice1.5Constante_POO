<?php
class Terrasse
{
    const MA_CONSTANTE_UNITE = 'm2';

    private $longueur;
    private $largeur;

    // setter & getter
    public function setLongueur($longueur)
    {
        // l'attribut de l'objet courant reçoit la valeur de la variable passée en paramètre
        $this->longueur = $longueur;
    }

    public function getLongueur()
    { 
        return $this->longueur;
    }
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;
    }
    public function getLargeur()
    {
        return $this->largeur;
    }
    

    // Création d'une méthode (dia 14/22)
    
    public function getSurface()
    {
        // on va retourner une chaine de caractères avec les valeurs de l'objet courant
        $surfaceTotale = $this->longueur * $this->largeur;
       // self va rechercher la méthode DANS la class elle-même tandis que $this fait appel à l'objet courant
        return $this->longueur. " x " . $this->largeur. " = <br> ". $surfaceTotale . " ".self::MA_CONSTANTE_UNITE;
    }
    
}
