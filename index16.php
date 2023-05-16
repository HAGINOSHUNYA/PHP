<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>home work16</title>
</head>
<body>
  <?php
  for($i = 0; $i <= 10; $i++){
    echo $i;
  }
  echo "<br>";
  for($i = 10; $i>=0; $i--){
    echo $i;
  }
  echo"<br>";

  $start = 1;
  $total = 0;

  for($i = $start; $i <= 10; $i++){
     $total += $i;
  }
  echo "1から10の総和は{$total}<br>";
  ?>
</html>