<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <!-- PHPの埋め込み -->
    <?php

// 指定されたキーと値を持つ連想配列を作成
$vegetable = array(
    "name" => "onion",  // キー: name、値: onion
    "price" => 200,     // キー: price、値: 200
    "weight" => 160     // キー: weight、値: 160
);

// 配列を出力して確認
print_r($vegetable);
?>

</body>

</html>
