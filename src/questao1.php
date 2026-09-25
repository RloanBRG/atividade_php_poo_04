<?php

echo "=== Qual animal é? ===\n";

$resposta = (string) readline("É Mamíforo? (sim ou nao): "); //1
//Primeiro if
if ($resposta === "sim"){
    $resposta = (string) readline("É Quadrupede? (sim ou nao): "); //1:1
    
    if($resposta === "sim"){
        $resposta = (string) readline("É Carnivoro? (sim ou nao): "); //1:1:1
        if($resposta === "sim"){
            echo "O animal é um Leão.\n"; //Fim Leao
        }
        elseif($resposta === "nao"){
            $resposta = (string) readline("É Herbívoro? (sim ou nao): "); //1:1:2
            if($resposta === "sim"){
                echo "O animal é um Cavalo.\n";//Fim Cavalo
            }else{ //caso erro Herbivoro
                echo "Tente novamente.\n";
            }
        }else{ //caso erro Carnivoro
            echo "Tente novamente.\n";
        }
    
    }elseif($resposta === "nao"){
        $resposta = (string) readline("É Bipede? (sim ou nao): "); //1:2
        if($resposta === "sim"){ 
            $resposta = (string) readline("É Onivoro? (sim ou nao): "); //1:2:1
            if($resposta === "sim"){
                echo "O animal é um Humano.\n"; //fim Humano
            }
            elseif($resposta === "nao"){
                $resposta = (string) readline("É Frutivoro? (sim ou nao): "); //1:2:2
                if($resposta === "sim"){
                    echo "O animal é um Macaco.\n"; //fim Macaco
                }else{ //caso erro Frutivoro
                    echo "Tente novamente.\n";
                }
            }else{ //caso erro Onivoro
                echo "Tente novamente.\n";
            }
        }elseif($resposta === "nao"){
            $resposta = (string) readline("É Voador? (sim ou nao): "); //1:3
            if($resposta === "sim"){
                echo "O animal é Morcego.\n"; //fim Morcego

            }elseif($resposta === "nao"){
                $resposta = (string) readline("É Aquatico? (sim ou nao): "); //1:4
                if($resposta === "sim"){
                    echo "O animal é Baleia.\n"; //fim Baleia
                }else{ //caso erro Aquatico
                    echo "Tente novamente.\n";
                }
            }else{ //caso erro Voador
                echo "Tente novamente.\n";
            }

        }else{ //caso erro Bipede
            echo "Tente novamente.\n";
        }
    }
    //caso erro Quadrupede
    else{
        echo "Tente novamente.\n";
    }
}
// Primeiro elseif
elseif($resposta === "nao"){ //2:1
    $resposta = (string) readline("É ave? (sim ou nao): "); //2
    if($resposta === "sim"){
        $resposta = (string) readline("É não voador? (sim ou nao): "); //2:1
        if($resposta === "sim"){
            $resposta = (string) readline("É Tropical? (sim ou nao): "); //2:1:1
            if($resposta === "sim"){
                echo "O animal é Avestruz.\n"; //fim Avestruz

            }elseif($resposta === "nao"){
                $resposta = (string) readline("É Polar? (sim ou nao): "); //2:1:2
                if($resposta === "sim"){
                    echo "O animal É Pinguim.\n"; //fim Pinguim
                }else{ //caso erro Polar
                    echo "Tente novamente.\n";
                }
            }else{ //caso erro Tropical
                echo "Tente novamente.\n";
            }
        }elseif($resposta === "nao"){

            $resposta = (string) readline("É Nadador? (sim ou nao): "); //2:2
            if($resposta === "sim"){
                echo "O animal é Pato.\n"; //fim Pato
            }elseif($resposta === "nao"){
                $resposta = (string) readline("É De Rapina? (sim ou nao): "); //2:3
                if($resposta === "sim"){
                    echo "O animal é Águia.\n"; //fim Águia
                }else{ //caso erro De Rapina
                    echo "Tente novamente.\n";
                }
            }else{
                echo "Tente novamente.\n"; //caso erro Nadador
            }

        }else{ //caso erro Não Voador
            echo "Tente novamente.\n";
        }
    }
    elseif($resposta === "nao"){
        $resposta = (string) readline("É Reptil? (sim ou nao): "); //3
        if($resposta === "sim"){
            $resposta = (string) readline("É Com Casco? (sim ou nao): "); //3:1
            if($resposta === "sim"){
                echo "O animal é Tartaruga.\n"; //fim Tartaruga

            }elseif($resposta === "nao"){
                $resposta = (string) readline("É Carnivoro? (sim ou nao): "); //3:2
                if($resposta === "sim"){
                    echo "O animal é Crocodilo.\n"; //fim Crocodilo
                }elseif($resposta === "nao"){
                    $resposta = (string) readline("É Sem Patas? (sim ou nao): "); //3:3
                    if($resposta === "sim"){
                        echo "O animal é Cobra.\n"; //fim Cobra
                    }else{ //caso erro Sem Patas
                        echo "Tente novamente.\n";
                    }
                }else{ //caso erro Carnivoro (Reptil)
                    echo "Tente novamente.\n";
                }
            }else{ //caso erro Com Casco
                echo "Tente novamente.\n";
            }
        }else{ //caso erro Reptil
            echo "Tente novamente.\n";
        }
    }else{ //caso erro Ave
        echo "tente novamente.\n";
    }
}else{ //caso erro Mamifero
    echo "Tente novamente.\n";
}
?>
