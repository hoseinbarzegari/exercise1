<?php
$input = (string)readline("enter ??");

$DNA_first = strtolower(explode(" "  , $input)[0]); 
$DNA_virus  = strtolower(explode(" "  , $input)[1]); 

 
$virusDNA = dna_kotah($DNA_virus);



$reverse = strrev($DNA_virus);
if (strpos($DNA_first, $reverse) !== false)
    echo "Shoma Bimar Nemishavid";
else if (strpos($DNA_first, $DNA_virus) !== false) 
    echo "Shoma Bimar Hastid";
else 
    echo "Shoma Salem Hastid";



    function dna_kotah($dna_virus){
        if (preg_match('~[0-9]+~', $dna_virus)) {
               
            $arr = [];
            if (preg_match_all('/\w\d+/', $dna_virus,$arr)) {
                $str = "";
                foreach($arr as $value){
                    
                    $str = implode("" , $value);
                    $digit = implode("",preg_split('/[a-zA-Z]/', $str));
                    $character = implode("",preg_split('/[^a-zA-Z]/', $str));
                    $str = "";
                    for ($i = 1 ; $i <= $digit ; $i ++){
                            $str .= $character;
                    } 
                
                }
                $dna_virus = preg_replace('/\w\d+/' , $str , $dna_virus);
                return $dna_virus;
            }
        }
        else 
            return $dna_virus;
    }