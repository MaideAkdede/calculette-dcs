<?php
$num1= $_GET['nbr1'];
$num2 =  $_GET['nbr2'];
$value = '0';

$result = '';
$sign = '';
$error_msg = '';

if (isset($num1) && isset($num2)){
    if (!is_numeric($num1) || !is_numeric($num2)){
        $error_msg = 'Veuillez écrire uniquement des nombres';
    } else {
        switch ($_GET['operation']) {
            case 'add':
                $result = $num1 + $num2;
                $sign = '+';
                break;
            case 'sub':
                $result = $num1 - $num2;
                $sign = '-';
                break;
            case 'mult':
                $result = $num1 * $num2;
                $sign = '*';
                break;
            case 'div':
                if ($num1 == '0' || $num2 == '0') {
                    $error_msg = 'Vous ne pouvez pas diviser de nombre 0 ';
                } else {
                    $result = $num1 / $num2;
                    $sign = '/';
                }
                break;
            case 'pow':
                $result = $num1 ** $num2;
                $sign = '^';
                break;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
      Calculette
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
  <h1>Calculette</h1>
  <form action="<?= $_SERVER['PHP_SELF'] ;?>" method="get">

      <label for="nbr1">Nombre 1</label>
      <input type="text"
             name="nbr1"
             id="nbr1"
             value="<?= $num1 ?? $value  ;?>">

      <label for="nbr2">Nombre 2</label>
      <input type="text"
             name="nbr2"
             id="nbr2"
             value="<?=$num2 ?? $value ;?>">

      <button type="submit" value="add" name="operation">+</button>
      <button type="submit" value="sub" name="operation">-</button>
      <button type="submit" value="mult" name="operation">*</button>
      <button type="submit" value="div" name="operation">/</button>
      <button type="submit" value="pow" name="operation">^</button>
  </form>

  <?php if($error_msg): ?>
      <p class="error"><?= $error_msg ;?></p>
  <?php endif ;?>

  <?php if($result): ?>
      <p class="result"><span><?= $num1.' '.$sign.' '. $num2 ;?> = <?= $result ;?></span></p>
  <?php endif ;?>

  </body>
</html>
