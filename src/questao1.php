<?php

echo "Questão unica: Qual animal é?\n";

// faz uma logica depois copia e edita (tava certo)

//Variaveis:

// //Main
// $ehMamifero = (bool) false;
// $ehAves = (bool) false;
// $ehRepteis = (bool) false;

// //Sub (Mamifero)
// $ehQuadrupede = (bool) false;
// $ehBipede = (bool) false;
// $ehVoador = (bool) false;
// $ehAquatico = (bool) false;

// //Sub Sub (Mamifero)
// $ehHerbivero = (bool) false;
// $ehOnivoro = (bool) false;
// $ehFrutivoro = (bool) false;


// //Sub (Aves)
// $ehNaoVoador = (bool) false;
// $ehNadador = (bool) false;
// $ehRapina = (bool) false;

// //Sub Sub (Aves)
// $ehTropical = (bool) false;
// $ehPolar = (bool) false;


// //Sub (Réteis)
// $ehDuro = (bool) false;
// $ehCarnivoro = (bool) false;
// $eh = (bool) false;

$animal = (string) "Nenhum selecionado"; // Animais: "Leão", "Cavalo", "Homem", "Morcego", "Baleia", "Avestruz", "Pinguim", "Pato", "Águia", "Tartaruga", "Crocodilo", "Cobra";

//Codigo de perguntas:
$input1 = (string) readline("É mamifero? (sim/nao): "); //Mamifero?

if ($input1 === "sim"){ 
    //$ehMamifero = true; 
    $input = (string) readline("É Quadrúpede? (sim/nao): ");//Quadrupede?
    if ($input === "sim"){ 
        //$ehQuadrupede = true;

        $input = (string) readline("É Carnívoro? (sim/nao): ");// Canivoro?
        if($input === "sim"){ 
            //$ehCarnivoro = true;   
            $animal = "Leão";

        }else{
            $input = (string) readline("É herbivoro? (sim/não): ");//Herbivero

            if($input === "sim"){ 
                //$ehHerbivero = true;
                $animal = "Cavalo";
            }elseif($input === "nao"){
                echo "Animal não existe";
            }
        }

    }else if($input === "nao"){ 
        $input = (string) readline("É Bípede? (sim/não): ");//Bípede?
        if($input === "sim"){
            //$ehBipede = true;

            $input = (string) readline("É Onivoro? (sim/não): ");//Onivoro?
            if($input === "sim"){
                $animal = "Humano";
            }elseif($input === "nao"){
                $input = (string) readline("É Frutívoro? (sim/não): ");//Frutivoro?
                if($input === "sim"){
                    $animal = "Macaco";
                }elseif($input === "nao"){
                    echo "animal não existe";
                }
            }        
        }elseif ($input === "nao"){
            $input = (string) readline("É Voador? (sim/não): "); //Voador
            if($input === "sim"){
                $animal = "Morcego";
            }
            
        }
    }
}elseif ($input1 === "nao"){ //Não Mamifero
    echo "sem outra logica disponivel\n";
}

echo "Animal escolhido é: $animal\n";

?>
