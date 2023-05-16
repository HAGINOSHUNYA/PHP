<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>home work14</title>
</head>
<body>
  <p>
  <?php
  $value1  = mt_rand(0,100);
  $value2 =  mt_rand(0,100);
  echo "中間の点数は{$value1}です。<br>";
  echo "期末の点数は{$value2}です。<br>";
  $value3 = $value1 + $value2;
  echo "中間と期末の和は{$value3}です。<br>";

 if($value1 && $value2 >=75){
  echo "合格<br>";
 } elseif($value3 >=140){
  echo "合格";
 } elseif($value3 >= 100 && ($value1 >=90 || $value2 >=90)){
  echo "合格<br>";
 }
else{
  echo "不合格<br>";
 }
 echo "中間{$value1}期末{$value2}和{$value3}<br>";
  
  ?>
  </p>
</html>