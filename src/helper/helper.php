<?php

 function traduzir(String $value)
{
    $translation = [
        'á'=>'a',
        'à'=>'a',
        'ã'=>'a',
        'â'=>'a',
        'é'=>'e',
        'ê'=>'e',
        'í'=>'i',
        'ó'=>'o',
        'ô'=>'o',
        'õ'=>'o',
        'ú'=>'u',
        'ü'=>'u',
        'ç'=>'c',
        'Á'=>'A',
        'À'=>'A',
        'Ã'=>'A',
        'Â'=>'A',
        'É'=>'E',
        'Ê'=>'E',
        'Í'=>'I',
        'Ó'=>'O',
        'Ô'=>'O',
        'Õ'=>'O',
        'Ú'=>'U',
        'Ü'=>'U',
        'Ç'=>'C',
    ];

    return strtr($value, $translation);
}