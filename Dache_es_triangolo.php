<?php
//Autore: Dache Robert
//esercizio: stampare un triangolo rettangolo 10x10

//inizialmente volevo farlo con lo spazio interno, il problema è la spaziatura del browser

//VARIABILI
$altezza_int = 10;
$spazio_string = "*";   //per fare lo spazio si mette &nbsp
$asterisco_char = "*";

//CODICE
for($i_int=0;$i_int<$altezza_int;$i_int++){
    
    echo $asterisco_char;   //lo metto subito dato che serve un asterisco iniziale e uno finale

    for($j_int=0;$j_int<$i_int-1;$j_int++){

        if($i_int!=0 && $i_int!=$altezza_int-1){//controllo per vedere se è al primo o ultimo ciclo

            echo $spazio_string;    //in caso non sia il primo o l'ultimo metto lo spazio

        }else{

            echo $asterisco_char;   //altrimenti metto l'asterisco
        }
        
    }
    if($i_int!=0)
        echo $asterisco_char;   //controllo che non sia il primo ciclo per evitare il doppio asterisco
    echo "<br>";
    
}

?>