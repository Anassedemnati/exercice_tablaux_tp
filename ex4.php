<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $personnel=[

        ["fonction"=>"Ingénieur","nom"=>"Hamidi","prenom"=>"Said","age"=>54],
        ["fonction"=>"Technicien","nom"=>"Alami","prenom"=>"Ahmed","age"=>40],
        ["fonction"=>"Chef de projet","nom"=>"Hassani","prenom"=>"Said","age"=>27]
    ];
    
    
    
    echo"<table border =1%>";
    echo"<tr>";
echo"<th> Fonction </th>";
echo"<th> Nom </th>";
echo"<th> Prenom </th>";
echo"<th> Age </th>";

    echo"</tr>";
            
    foreach($personnel as $v){
        echo"<tr>";
       
            echo"<th> $v[fonction] </th>";
            echo"<th> $v[nom] </th>";
            echo"<th> $v[prenom] </th>";
            echo"<th> $v[age] </th>";
            

        echo"</tr>";

        
    }
    echo"</table>";
    
    ?>
</body>
</html>