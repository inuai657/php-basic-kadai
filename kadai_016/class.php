<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>

</head>

<body>
  <p>
    <?php
    class Food {
      private $name;
      private $price;

      public function set_price(int $price) {
        $this->price = $price;
      }
      public function show_price() {
        echo $this->price . '<br>';
      }

      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }
    }

    // インスタンス化する
    $potato = new Food('potato', 250);

    // インスタンス$potatoの各プロパティの値を出力する
    print_r($potato);



    class Animal {
      private $name;
      private $height;
      private $weight;

      public function set_height(int $height) {
        $this->height = $height;
      }
      public function show_height() {
        echo $this->height . '<br>';
      }

      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
    }
    
    // インスタンス化する
    echo '<br>';
    $dog = new Animal('dog', 60, 5000);

    // インスタンス$dogの各プロパティの値を出力する
    print_r($dog);

    // メソッドを実行する
    echo '<br>';
    $potato->show_price();

    // メソッドを実行する
    $dog->show_height();

    ?>
  </p>
</body>

</html>