<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $personnes=[
        "mdupond"=>["prenom"=>"Martin","nom"=>"Dupond","age"=>25,"ville"=>"Paris"],
        "jm"=>["prenom"=>"Jean","nom"=>"Martin","age"=>20,"ville"=>"Villetaneuse"],
        "toto"=>["prenom"=>"Tom","nom"=>"Tonge","age"=>18,"ville"=>"Epinay"],
        "arn"=>["prenom"=>"Arnaud","nom"=>"Dupond","age"=>33,"ville"=>"Paris"],
        "email"=>["prenom"=>"Emilie","nom"=>"Ailta","age"=>46,"ville"=>"Villetaneuse"],
        "dask"=>["prenom"=>"Damien","nom"=>"Askier","age"=>7,"ville"=>"Villetaneuse"],
    ];
    echo "<table border 1%>";
    echo "<tr>";
    echo "<th> Prenom </th>";
    echo "<th> Nom </th>";
    echo "<th> Age </th>";
    echo "<th> ville </th>";
    echo "</tr>";
    
    foreach($personnes as $cle=>$t){
        echo "<tr>";
        echo "<th> $t[prenom]</th>";
        echo "<th> $t[nom]</th>";
        echo "<th> $t[age]</th>";
        echo "<th> $t[ville]</th>";

        echo "</tr>";
    }
    






    echo "</tr>";
    














    echo "</table>";
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>