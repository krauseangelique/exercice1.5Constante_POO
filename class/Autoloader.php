<?php 
class Autoloader{

    // On va mettre notre fonction en static car on a pas besoin d'instancier notre class
    public static function loadClass($class_name)
    {
        require 'class/' . $class_name . '.php';
    }

}