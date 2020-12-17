<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    
    $produit=[

        ["reference"=>"ref001","designation"=>"hp","prix_unitaire"=>7500,"quantite"=>13],
        ["reference"=>"ref002","designation"=>"mac","prix_unitaire"=>12000,"quantite"=>9],
        ["reference"=>"ref003","designation"=>"toshiba","prix_unitaire"=>8500,"quantite"=>12],
        ["reference"=>"ref004","designation"=>"samsung","prix_unitaire"=>9000,"quantite"=>8]

    ];
    $taux=[
        "hp"=>0.8,
        "mac"=>0.9,
        "toshiba"=>0.7,
        "samsung"=>0.6
    
    ];
    echo"<table border=1%>";
    echo"<tr>";
    echo "<th>Reference</th>";
    echo "<th>Designation</th>";
    echo "<th>Prix unitaire(DH)</th>";
    echo "<th>Quantite</th>";
    echo "<th>Montant(DH)</th>";
    echo"</tr>";

    foreach($produit as $t){
        echo "<tr>";
        echo"<th> $t[reference] </th>";
        echo"<th> $t[designation] </th>";
        echo"<th> $t[prix_unitaire] </th>";
        echo"<th> $t[quantite] </th>";
        //     foreach($t as $v){
               
               
        //    }
           if($t['quantite']>10 ){
             
            $nam_marc=$t['designation'];
            $marc_taux=$taux[$nam_marc];
            $montant=($t['prix_unitaire']*$marc_taux)*$t['quantite'];
            echo"<th>".$montant."</th>";
        }
        else{
         $montant=$t['prix_unitaire']*$t['quantite'];
         echo"<th>".$montant."</th>";


         }

    }

    echo"</table>";


    
    
    
    ?>


</body>
</html>