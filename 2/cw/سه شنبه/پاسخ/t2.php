
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
</style>
</head>

<body>
<?php
$lang='fa';
$n=5;
?>
    <div dir='<?php if($lang=='fa'){
        echo "rtl";}
        else {
            echo "ltr";
        }  ?>' >
    <h1>
        <?php
        if($lang=='fa'){
            echo 'به سایت من خوش آمدید';
        }
        else echo 'Welcome To My Site';
        ?>
    </h1>
    <ul>
  <?php
  for($i=0;$i<$n;$i++){?>
  <li><?php
      if($lang== 'en'){
      echo "option $i";
      }
      else{
          echo "گزینه $i";
      }
      ?>
  </li>
<?php }?>
    </ul>
    </div>
</body>
</html>
