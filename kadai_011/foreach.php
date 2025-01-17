<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>

<?php
// 指定されたキーと値を持つ連想配列を作成
$vegetable = ["名前" => "玉ねぎ","値段" => 200,"産地" => "北海道"];

// foreach文を使って配列を出力
foreach ($vegetable as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
?>


</body>

</html>