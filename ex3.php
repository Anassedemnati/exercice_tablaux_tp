<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$note=['anas'=>18,'ahmed'=>15.5,'aymen'=>15,'yasire'=>12,'mooad'=>10.5,'hatim'=>17,'ayoube'=>9.5,'nizare'=>5.75];

//1. affiche tous les éléments d'un tableau,
function printtab($tab){
foreach($tab as $cle=> $t){
echo "[$cle]=>$t <br>";

}

}
//2. calcule la moyenne des nombres contenus dans un tableau donné
function moy($tab){
$total=count($tab);
$sum=0;
foreach($tab as $t){
$sum+=$t;
}
$moy=$sum/$total;
return $moy;

}
//3. indique combien d'éléments sont supérieurs ou égaux à 10
function sup_egal($tab){
$cpt = 0;
foreach($tab as $t){
if($t >= 10){
    $cpt++;
    
}

}
return $cpt;

}

//4. teste si une note est présente ou non dans le tableau,

function serch_note($tab,$not){

foreach($tab as $cle=>$t){
if($not==$t){
    return "la note $t  exist! ";
}
else{
    return "la note $not n' exist pas!";
}

}




}
function serch_nom($tab,$nom){
    foreach($tab as $cle=>$t){
        if($nom==$cle){
            return "le nom $cle exist !";
        }
        else{
            return "le nom $nom n 'exist pas!";

        }

    }


}
//5. détermine la meilleure note obtenue.
function best_note($tab){
$tabmax=array_values($tab);
$max=$tabmax[0];
foreach($tab as $cle=>$t){
if($max < $t){
$max=$t;


}



}

return $max;
}










printtab($note).'<br>';
echo'la moyenne '.moy($note).'<br>';
echo 'léments sont supérieurs ou égaux à 10 : '. sup_egal($note).'<br>';
echo serch_note($note,18.5).'<br>';
echo serch_nom($note,'anas').'<br>';
echo 'la meilleure note : '.best_note($note);
?>
    
</body>
</html>