<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function minimum($tab , $retourne_cle = false){
        $min=array_values($tab);//associative table to indexed  tabl
       $cleR;
       $valMin=$min[0];

            if($retourne_cle == false){
                foreach($tab as $cl=> $t){
                if($valMin > $t ){
                
                    $valMin = $t;
                    
                    
    
                    return "$valMin m";
                }
            }

            }
            
            else if($retourne_cle == true){
                foreach($tab as $cl=> $t){
                if($valMin > $t ){
                $valMin = $t;
                $cleR = $cl;
                

                return "$cleR  $valMin m";
                }
            }

            }
    }

    function maximum($tab){
        $max=array_values($tab);
        $valMax=$max[0];
        foreach($tab as $cl=> $t){
            if($valMax < $t ){
            
                $valMax = $t;
                
                

                return "$valMax m";
            }
        }



    }

    function min_et_max($tab){

$mytable['min']=minimum($tab);
$mytable['max']=maximum($tab);
return $mytable;

    }


    $persone =['Anasse'=>1.5,'Yahya'=>1.4,'Badre'=>1.3,'Sami'=>1.9,'Mohammed'=>1.8];
    foreach($persone as $cle=>$p){
echo "$cle : $p m <br>";



    }
     echo 'Taille min : '.minimum($persone,true);
    print_r(min_et_max($persone));
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>