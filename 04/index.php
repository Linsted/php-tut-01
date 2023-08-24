<?php 
error_reporting(-1);
$title = 'Lesson 4';
$winnie_the_pooh = 'Hello i\'m Winni';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title;?></title>
    
</head>

<body>

<?php 
$title = 'LESSON4';
var_dump($title, $winnie_the_pooh);
?>



<h1><?= $title;?></h1>
<p><?= $winnie_the_pooh?></p>

</body>

</html>