<?php
// Food クラスの定義
class Food {
    private $name;
    private $price;

    // コンストラクタ
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // price の値を出力するメソッド
    public function show_price() {
        echo $this->price . "\n";
    }
}

// Animal クラスの定義
class Animal {
    private $name;
    private $height;
    private $weight;

    // コンストラクタ
    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // height の値を出力するメソッド
    public function show_height() {
        echo $this->height . "\n";
    }
}

// Step 3: インスタンスの作成
$food1 = new Food("potato", 250);
$animal1 = new Animal("dog", 60, 5000);

// print_r関数を使ってインスタンスを出力
print_r($food1);
print_r($animal1);

// Step 4: メソッドへアクセス
$food1->show_price();
$animal1->show_height();
?>
