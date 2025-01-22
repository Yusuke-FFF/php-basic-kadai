<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
<p>
<?php
    function sort_2way(array $array, bool $order): void {
    // ソート方向を条件式で切り替え
    if ($order === true) {
        // 昇順ソート
        sort($array);
        echo "昇順:<br>";
    } else {
        // 降順ソート
        rsort($array);
        echo "降順:<br>";
    }

    // foreach文でソート結果を順番に表示
    foreach ($array as $value) {
        echo "$value<br>";
    }
}

// ソートする配列を宣言
$nums = [15,4,18,23,10];

// 昇順ソート
sort_2way($nums, true);

// 降順ソート
sort_2way($nums, false);
?>

</p>
</body>

</html>