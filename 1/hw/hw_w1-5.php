<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$mynumber='30px';
$mycolor='red';
$mytext='I love php';
?>
<p style="font-size:<?php echo $mynumber ?>;color:<?php echo $mycolor; ?>; ">
<?php echo $mytext ?>
</p>   
</body>
</html>
