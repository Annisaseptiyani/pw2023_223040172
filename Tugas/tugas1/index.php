<?php
//1.Membuat 2 variable dengan string dengan aturan dengan h2,tulisan miring,dan diakhiri dengan petik 2
$topi='"Topi saya Bundar,';
$bundar='Bundar Topi saya."';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
</head>
<body>
    <h2><i><?php echo  "$topi $bundar";?>
    </h2>

    <?php
      //2.Membuat 1 variable dari dua digit terahir dari NPM 
      $x="72";
      $y="5";
      $z="2";
      $h="75";
      $i="20";

      echo "Aku adalah angka <b>$x</b></br>";
      //dikali 5 
      $n=$x*$y;
      echo "Jika aku dikali $y,maka aku sekarang menjadi <b>$n</b></br>";
      //dibagi 2
      $m=$x/$z;
      echo "Jika aku dibagi $z,maka aku sekarang menjadi <b>$m</b></br>";
      //ditambah 75
      $v=$x+$h;
      echo "Jika aku ditambah $h,maka aku sekarang menjadi <b>$v</b></br>";
      //dikurang 20
      $j=$x-$i;
      echo "Jika dikurangi $i,maka aku sekarang menjadi <b>$j</b>";
?>

      <table border="">
<tr>
        <td>1</td>
</tr>
<tr>
        <td>1</td>
        <td>2</td>
</tr>
<tr>
        <td>1</td>
        <td>2</td>
        <td>3</td>
</tr>
      </table>

</body>
</html>
