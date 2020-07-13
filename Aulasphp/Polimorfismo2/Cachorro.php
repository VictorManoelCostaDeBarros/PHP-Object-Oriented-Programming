<?php 
require_once 'Lobo.php';

class Cachorro extends Lobo{
    public function emitirSom(){
        echo "<p>Au! Au! Au!</p>";
    }

    function reagirFrase($fa) {
        if($fa == "toma comida" || $fa == "Ola"){
            echo "<p>Abanar e latir</p>";
        }else{
            echo "<p>Rosnar</p>";
        }
    }

    function reagirHora($hora, $min) {
        if($hora <12){
            echo "<p>Abanar</p>";
        }else if($hora >= 18){
            echo "<p>Ignorar</p>";
        }else{
            echo "<p>Abanar e Latir</p>";
        }
    }

    function reagirDono($dono) {
        if($dono){
            echo "<p>Abanar</p>";
        }else{
            echo "<p>Rosnar e Latir</p>";
        }
    }

    function reagirIdadePeso($idade,$peso) {
        if($idade < 5){
            if($peso < 10){
                echo "<p>Abanar</p>";
            }else{
                echo "<p>Latir</p>";
            }
        }else{
            if($peso < 10){
                echo "<p>Rosnar </p>";
            }else{
                echo "<p>Ignora</p>";
            }
        }
    }
}
?>