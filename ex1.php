<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<table border =1%>";
    echo "<tr>";
    echo '<th>'. $_SERVER ['SERVER_ADDR']. '</th>';
    echo"</tr>";
    echo"<tr>";
    echo '<th>'.$_SERVER ['SERVER_NAME'].'</th>';
    echo"</tr>";
    echo"<tr>";
    echo '<th>'.$_SERVER ['SERVER_PROTOCOL'].'</th>';
    echo"</tr>";
    echo"<tr>";
    echo '<th>'.$_SERVER ['REQUEST_METHOD'].'</th>';
    echo"</tr>";
    echo"<tr>";
    echo '<th>'.$_SERVER ['SERVER_PORT'].'</th>';
    echo"</tr>";
    echo '<th>'.$_SERVER ['SCRIPT_NAME'].'</th>';

    echo "</tr>";
    echo "</table>";
    
    
    
    
    
    ?>
</body>
</html>