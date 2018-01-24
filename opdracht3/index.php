<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/myStyle.css">
    <title>Opdracht 3</title>
</head>
<body>
<?php
$firstWord = 'Does ';
$secondWord = 'this ';
$thirdWord = 'sentence ';
$fourthWord = 'work ';
$questionMarker = '?';

echo $firstWord . $secondWord . $thirdWord . $fourthWord . $questionMarker;
$itWorks = True;
$notWorking = false;

if ($itWorks == TRUE)
{
    echo '<p>The sentence works perfectly.</p>';
}
else
{
    echo '<p>The sentence works perfectly. not.</p>';
}

?>

</body>
</html>
