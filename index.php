<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0;
        }
        div{
            display: flex;
            width: 100%;
            height: 100vh;
        }
    </style>
</head>
<body>
  

<?php
        for($i=0; $i<100; $i++){
                
                echo "<div>";
        }
     ?>
<?php
$spread = 25;
for ($row = 0; $row < 100; ++$row) {
        for($c=0;$c<3;++$c) {
        $color[$c] = rand(0+$spread,255-$spread);
    }
    echo "<div style='float:left; background-color:rgb($color[0],$color[1],$color[2]);'></div><br/>";
    for($i=0;$i<100;++$i) {
    $r = rand($color[0]-$spread, $color[0]+$spread);
    $g = rand($color[1]-$spread, $color[1]+$spread);
    $b = rand($color[2]-$spread, $color[2]+$spread);    
    echo "<div style='background-color:rgb($r,$g,$b);></div>";
    }    
}
?>
</body>
</html>