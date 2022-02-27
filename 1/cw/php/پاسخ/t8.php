<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <?php  
for($i=0;$i<=5;$i++){  
for($k=5;$k>=$i;$k--){  
echo "  ";  
}  
for($j=1;$j<=$i;$j++){  
echo "*  ";  
}  
echo "<br>";  
}  
for($i=4;$i>=1;$i--){  
for($k=5;$k>=$i;$k--){  
echo "  ";  
}  
for($j=1;$j<=$i;$j++){  
echo "*  ";  
}  
echo "<br>";  
}  
?> 
    </center>
</body>
</html>