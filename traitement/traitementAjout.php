<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $con=new PDO("mysql:host=localhost;dbnam=mabase",'root','');
    if($con)
        echo "insertion avec succes";
    else
        echo"erreur";
    ?>
    
</body>
</html>