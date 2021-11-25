<?php



    $np=0;
    $ni=0;
    $contav=1;

    do{
        print  "Digite um número: ";
        $n  = (float) fgets (STDIN);
    
    if ($n % 2 == 0){
        $np ++ ;
    }
    
    if ( $n % 2 != 0){
        $ni ++;
    }

    $contav ++ ;
}

    while ($contav <= 10);

    if ( $ni != 1  and  $np != 1 ){

        print  " Quantidade de dados impares: $ni \n Quantidade de números pares: $np " ;
    }

    elseif ($ni == 1  and  $np != 1 ){

        print  "Quantidade de número impar: $ni \n Quantidade de números pares: $np ";}
    
    elseif ($ni =! 1  and  $np == 1 ) {
    
        print  " Quantidade de números iguais: $ni \n Quantidade de número: $np ";}
    
    elseif ( $ni == 1  and  $np == 1 )  {
    
        print  " Quantidade de número impar: $ni \n Quantidade de número: $np " ;};
