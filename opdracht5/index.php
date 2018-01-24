<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>opdracht5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<h1>Stuur een mail</h1>
<form action="send.php" method="post">
    <label>Afzender:<input type="email" name="from"></label><br>
    <br>
    <label>Onderwerp:<input type="text" name="subject"></label><br>
    <label>Bericht:<br><textarea cols="100" rows="10" name="message"></textarea><br></label>
      <label></label>  <input type="submit" name="submit" value="verstuur"/> </label><br>
</form>
<br/>

</body>
</html>