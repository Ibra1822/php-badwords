<?php 
  
$first = $_GET['firstText'];
$second = $_GET['secondText'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/style.css">

  <title>Result</title>
</head>
<body>

<h1>Risultato</h1>


<h2> <?php echo $first.' '.strlen($first); ?> </h2>
<h2> <?php echo $second.' '.strlen($second); ?> </h2>

<hr>

<h2> <?php echo $first.' '.strlen($first) ?> </h2>
<h2><?php echo str_replace($first,'***',$second).' '. strlen($second) ?></h2>



</body>
</html>