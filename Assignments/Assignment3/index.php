<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Assignment 3</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>PHP Assignment 3</h1>

<div class="box">
  <h2>Task 1</h2>
  <?php
  $age = 20;
  echo "Age: $age <br>";
  if ($age > 18) {
      echo "<p class='ok'>You are approved to register</p>";
  } else {
      echo "<p class='error'>Sorry, you are not approved</p>";
  }
  ?>
</div>

<div class="box">
  <h2>Task 2</h2>
  <?php
  function calc($a, $b)
  {
      echo "Multiply: " . $a * $b . "<br>";
      echo "Subtract: " . ($a - $b) . "<br>";
      if ($b == 0) {
          echo "Can't divide by zero";
      } else {
          echo "Divide: " . $a / $b;
      }
  }
  calc(20, 4);
  ?>
</div>

<div class="box">
  <h2>Task 3</h2>
  <?php
  function sum($arr)
  {
      $total = 0;
      foreach ($arr as $n) {
          $total += $n;
      }
      return $total;
  }
  $numbers = array(5, 10, 15, 20);
  echo "Array: " . implode(", ", $numbers) . "<br>";
  echo "Sum: " . sum($numbers);
  ?>
</div>

<div class="box">
  <h2>Task 4</h2>
  <?php
  $films = array("Fast", "Predestination", "Persuit", "Prestige");
  $keyword = "avatar";
  $found = "No";
  foreach ($films as $f) {
      if ($f == $keyword) {
          $found = "Yes";
          break;
      }
  }
  echo "Search for $keyword: $found";
  ?>
</div>

<div class="box">
  <h2>Task 5</h2>
  <?php
  function RouteBubble($arr)
  {
      $n = count($arr);
      for ($i = 0; $i < $n - 1; $i++) {
          for ($j = 0; $j < $n - $i - 1; $j++) {
              if ($arr[$j] > $arr[$j + 1]) {
                  $temp = $arr[$j];
                  $arr[$j] = $arr[$j + 1];
                  $arr[$j + 1] = $temp;
              }
          }
      }
      return $arr;
  }
  $data = array(5, 2, 9, 1, 7);
  echo "Before: " . implode(", ", $data) . "<br>";
  echo "After: " . implode(", ", RouteBubble($data));
  ?>
</div>

<div class="box">
  <h2>Task 6</h2>
  <?php
  $tests = array(5, 4, 9, 3, 1, 7, 5, 8, 6);
  $max = $tests[0];
  foreach ($tests as $t) {
      if ($t > $max) {
          $max = $t;
      }
  }
  echo "Array: " . implode(", ", $tests) . "<br>";
  echo "Max: $max";
  ?>
</div>

<div class="box">
  <h2>Task 7</h2>
  <?php
  $films = array("avatar", "Prestige", "avatar", "Prestige");
  $keyword = "avatar";
  $count = 0;
  foreach ($films as $f) {
      if ($f == $keyword) {
          $count++;
      }
  }
  echo "$keyword is repeated $count times";
  ?>
</div>

<div class="box">
  <h2>Task 8</h2>
  <?php
  function RouteRandomPass($length)
  {
      $letters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
      $pass = "";
      for ($i = 0; $i < $length; $i++) {
          $pass .= $letters[rand(0, strlen($letters) - 1)];
      }
      return $pass;
  }
  echo "8 characters: " . RouteRandomPass(8) . "<br>";
  echo "12 characters: " . RouteRandomPass(12);
  ?>
</div>

<div class="box">
  <h2>Task 9</h2>
  <?php
  $tests = array(1, "tariq", 1.5, true, 7, 's', false);
  foreach ($tests as $t) {
      if (is_bool($t)) {
          echo $t ? "Yes" : "No";
      } else {
          echo $t;
      }
      echo "<br>";
  }
  ?>
</div>

<div class="box">
  <h2>Task 10</h2>
  <?php
  $tests = array(6, 4, 9, 3, 12, 8, 7);
  echo "Input: " . implode(" ", $tests) . "<br>";

  $arr = $tests;
  $n = count($arr);
  for ($i = 0; $i < $n - 1; $i++) {
      for ($j = 0; $j < $n - $i - 1; $j++) {
          if ($arr[$j] > $arr[$j + 1]) {
              $temp = $arr[$j];
              $arr[$j] = $arr[$j + 1];
              $arr[$j + 1] = $temp;
          }
      }
  }
  echo "Using for: " . implode(" ", $arr) . "<br>";

  $arr = $tests;
  $i = 0;
  while ($i < $n - 1) {
      $j = 0;
      while ($j < $n - $i - 1) {
          if ($arr[$j] > $arr[$j + 1]) {
              $temp = $arr[$j];
              $arr[$j] = $arr[$j + 1];
              $arr[$j + 1] = $temp;
          }
          $j++;
      }
      $i++;
  }
  echo "Using while: " . implode(" ", $arr);
  ?>
</div>

<div class="box">
  <h2>Task 11</h2>
  <?php
  $arr1 = array('a', 'b', 'c', 'd');
  $arr2 = array('c', 'd', 'e', 'f');
  $same = array();
  foreach ($arr1 as $x) {
      foreach ($arr2 as $y) {
          if ($x == $y) {
              $same[] = $x;
          }
      }
  }
  echo "Output: " . implode(" - ", $same);
  ?>
</div>

<div class="box">
  <h2>Task 12</h2>
  <form method="post">
    Product price: <br>
    <input type="text" name="price"><br><br>
    Quantity: <br>
    <input type="text" name="qty"><br><br>
    <button type="submit" name="submit">Calculate</button>
  </form>

  <?php
  if (isset($_POST["submit"])) {
      $price = $_POST["price"];
      $qty = $_POST["qty"];

      if (!is_numeric($price) || !is_numeric($qty)) {
          echo "<p class='error'>Please enter numbers only</p>";
      } elseif ($price <= 0 || $qty <= 0) {
          echo "<p class='error'>Please enter numbers greater than zero</p>";
      } else {
          $total = $price * $qty;
          if ($total > 1000) {
              $discount = 15;
          } else {
              $discount = 10;
          }
          $after = $total - ($total * $discount / 100);

          echo "<p>Total before discount: $total EGP</p>";
          echo "<p>Discount: $discount%</p>";
          echo "<p class='ok'>Total after discount: $after EGP</p>";
      }
  }
  ?>
</div>

</body>
</html>
