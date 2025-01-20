<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
  <p>
  <?php

function sort_2way(array $array, string $order): array {
    // ソート方向に応じて処理を分岐
    if ($order === "asc") {
        // 昇順でソート
        sort($array);
    } elseif ($order === "desc") {
        // 降順でソート
        rsort($array);
    } else {
        // 無効な値が渡された場合の例外処理
        throw new InvalidArgumentException("Invalid order value. Use 'asc' for ascending or 'desc' for descending.");
    }
    return $array;
}

$nums = [15, 4, 18, 23, 10 ];

// 昇順ソート
$sorted_asc = sort_2way($nums, "asc");
echo "昇順:<br>";
foreach ($sorted_asc as $key => $value) {
    echo "$value<br>";
}

// 降順ソート
$sorted_desc = sort_2way($nums, "desc");
echo "降順:<br>";
foreach ($sorted_desc as $key => $value) {
    echo "$value<br>";
}
?>

  </p>
</body>

</html>