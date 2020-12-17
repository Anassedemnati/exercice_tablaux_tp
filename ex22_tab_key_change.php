<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $clients=[
        "client 1"=>["nom 1"=>"Lesfer","ville 1"=>"Casablanca","age 1"=>35],
        "client 2"=>["nom 2"=>"Karimi","ville 2"=>"Rabat","age 2"=>47],
        "client 3"=>["nom 3"=>"Nawi","ville 3"=>"Tours","age 3"=>58]
    ];
    function affichertab($t){
echo "<table border =1%>";
echo "<tr>";
echo "<th> Client </th>";
echo "<th> Nom </th>";
echo "<th> Ville </th>";
echo "<th> Age </th>";
echo "</tr>";
foreach($t as $cle=> $v){
    echo "<tr>";
    echo"<th> $cle  </th>";
    foreach($v as $l){
    echo "<th>$l</th> ";
    }
    echo "</tr>";
}
echo "</table>";
    }
    affichertab($clients);     
    $clients['client 7']=["nom 7"=>"Zerktouni","ville 7"=>"Casablanca","age 7"=>24];                  
    affichertab($clients); 


    function replace_key($tab ){

        $newval = ["nom","ville","age"];

        foreach($tab as $cle => $t){
            
        $key = array_keys($t);
        $val = array_values($t);
        $tab["$cle"] = array_combine($newval,$val);
        
         }
         print_r($tab);
         return $tab;
         
    }  
    replace_key($clients);
    affichertab($clients);
    
    
    
    
    ?>
</body>
</html>