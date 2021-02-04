<?php
$result = '';
if(isset($_GET['nbr1']) && isset($_GET['nbr2'])){
    if($_GET['operation'] === 'add'){
        $result = $_GET['nbr1'] + $_GET['nbr2'];
    }
    if($_GET['operation'] === 'sub'){
        $result = $_GET['nbr1'] - $_GET['nbr2'];
    }
    if($_GET['operation'] === 'mult'){
        $result = $_GET['nbr1'] * $_GET['nbr2'];
    }
    if($_GET['operation'] === 'div'){
        $result = $_GET['nbr1'] / $_GET['nbr2'];
    }
    if($_GET['operation'] === 'pow'){
        $result = $_GET['nbr1'] ** $_GET['nbr2'];
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
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <h1>Calculette</h1>
  <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="nbr1">Nombre 1</label>
      <input type="text" name="nbr1" value="<?= isset($_GET['nbr1']) ? $_GET['nbr1'] : '0' ?>">

      <label for="nbr2">Nombre 2</label>
      <input type="text" name="nbr2" value="<?= $_GET['nbr2'] ?? '0' ?>">
      <button type="submit" value="add" name="operation">+</button>
      <button type="submit" value="sub" name="operation">-</button>
      <button type="submit" value="mult" name="operation">*</button>
      <button type="submit" value="div" name="operation">/</button>
      <button type="submit" value="pow" name="operation">^</button>
  </form>
  <p><?= $result; ?></p>
  </body>
</html>
