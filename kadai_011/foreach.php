<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>kadai_011</title>
</head>

<body>
  <p>
  <?php
     $personal_data = ['name' => '玉ねぎ', 'price' => 200, 'area' => '北海道'];
     foreach ($personal_data as $key => $value) {
      echo "{$key}：{$value}<br>";
     }
     ?>
  </p>

  <p>
  <?php
     $personal_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
     foreach ($personal_data as $key => $value) {
      echo "{$key}：{$value}<br>";
     }
     ?>
  </p>
</body>

</html>