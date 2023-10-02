<?php
//Autore: Dache Robert
//esercizio: fare la tabella delle conversioni da binario a esadecimale

//VARIABILI
$binario_arr = array("0000","0001","0010","0011","0100","0101","0110","0111","1000","1001","1010","1011","1100","1101","1110","1111");
$esadecimale_arr = array("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f");
$divisore_string = " | ";
$i_int = 0;

//CODICE
foreach($binario_arr as $simbolo){  //vado a scorrere nel primo array tramite un foreach dato che entrambi gli array hanno la stessa grandezza

    echo $simbolo;
    echo $divisore_string;
    echo $esadecimale_arr[$i_int] . "<br>"; //utilizzo come indice una variabile che incrementa dentro al foreach
    $i_int++;
}
?>