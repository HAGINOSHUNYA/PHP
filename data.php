<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>PHP基礎</title>
</head>

<body>
  <p>
      <?php
      $personal_data = ["name" => "太郎", "age" => 36, "gender"=> "男性"];

      //$personal_dataのキーと値を1つずつ順番に出力する
      foreach ($personal_data as $key => $value){
        echo  "{$key}の値は{$value}です<br>";
      }
      foreach ($personal_data as $value){
        echo $value . "<br>";
      }

    ?>
  </p>
  <p>選択してください</p>
  <form>
    <select>
      <?php
      $birth_places =[
        "北海道",
        "東北",
        "関東",
        "中部",
        "近畿",
        "中国・四国",
        "九州",
      ];

      foreach($birth_places as $birth_places) {
        echo"<option>{$birth_places}</option>";
      }

      class product{    //クラスの定義

          public $name;  //プロパティの定義
        
      }

        $shampoo = new product(); //インスタンス化

        echo $shampoo->name;   //プロパティにアクセスして値を出力する

      ?>
      </select>
      </form>
    </body>
</html>