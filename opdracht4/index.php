<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>customer info</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<h1>Een plan voor jouw ontwikkeling</h1>
<p>Om een eerste stap te zetten naar een persoonlijk opleidingplan zul je eerst een paar vragen over jezelf moeten beantwoorden. Dit formulier helpt jou daarbij.</p>
<form action="index.php" method="post">
    <label>Name :
        <input type = "text" name="name" placeholder="Bv. Jan Jansen" required="required" autofocus />
    </label>

    <select name="Klas" >
        <option value="MG1A">MG1A</option>
        <option value="MG1C">MG1C</option>
        <option value="MG1D" selected>MG1D</option>
    </select>

    <fieldset>
        <legend>welbevinden</legend>
        <p>Hoe positief ben je op dit moment over je opleiding?</p>
        <label><input type="radio" name="positiviteit" value="0" required="required"> 0</label>
        <label><input type="radio" name="positiviteit" value="1"> 1</label>
        <label><input type="radio" name="positiviteit" value="2"> 2</label>
        <label><input type="radio" name="positiviteit" value="3"> 3</label>
        <label><input type="radio" name="positiviteit" value="4"> 4</label>
        <label><input type="radio" name="positiviteit" value="5"> 5</label>
        <label><input type="radio" name="positiviteit" value="6"> 6</label>
        <label><input type="radio" name="positiviteit" value="7"> 7</label>
        <label><input type="radio" name="positiviteit" value="8"> 8</label>
        <label><input type="radio" name="positiviteit" value="9"> 9</label>
        <label><input type="radio" name="positiviteit" value="10"> 10</label>

        <p>Hoe gemotiveerd ben je momenteel om de opleiding af te maken?</p>
        <label><input type="radio" name="motivatie" value="0" required="required"> 0</label>
        <label><input type="radio" name="motivatie" value="1"> 1</label>
        <label><input type="radio" name="motivatie" value="2"> 2</label>
        <label><input type="radio" name="motivatie" value="3"> 3</label>
        <label><input type="radio" name="motivatie" value="4"> 4</label>
        <label><input type="radio" name="motivatie" value="5"> 5</label>
        <label><input type="radio" name="motivatie" value="6"> 6</label>
        <label><input type="radio" name="motivatie" value="7"> 7</label>
        <label><input type="radio" name="motivatie" value="8"> 8</label>
        <label><input type="radio" name="motivatie" value="9"> 9</label>
        <label><input type="radio" name="motivatie" value="10"> 10</label>

        <p>Hoeveel vertrouwen heb je momenteel in je eigen kunnen?</p>
        <label><input type="radio" name="vertrouwen" value="0" required="required"> 0</label>
        <label><input type="radio" name="vertrouwen" value="1"> 1</label>
        <label><input type="radio" name="vertrouwen" value="2"> 2</label>
        <label><input type="radio" name="vertrouwen" value="3"> 3</label>
        <label><input type="radio" name="vertrouwen" value="4"> 4</label>
        <label><input type="radio" name="vertrouwen" value="5"> 5</label>
        <label><input type="radio" name="vertrouwen" value="6"> 6</label>
        <label><input type="radio" name="vertrouwen" value="7"> 7</label>
        <label><input type="radio" name="vertrouwen" value="8"> 8</label>
        <label><input type="radio" name="vertrouwen" value="9"> 9</label>
        <label><input type="radio" name="vertrouwen" value="10"> 10</label>

    </fieldset>
    <fieldset>
        <legend>sterke kanten</legend>
        <p>wat zijn jouw sterke kanten?</p>
        <label><input type="checkbox" name="sterke kanten" value="Coderen in HTML/CSS"> Coderen in HTML/CSS</label>
        <label><input type="checkbox" name="sterke kanten" value="Programmeren in Java" > Programmeren in Java</label>
        <label><input type="checkbox" name="sterke kanten" value="Scripting: programmeren in JavaScript" > Scripting: programmeren in JavaScript</label>
        <label><input type="checkbox" name="sterke kanten" value="planning" > planning</label>
        <label><input type="checkbox" name="sterke kanten" value="Samenwerken" > Samenwerken</label>

    </fieldset>

    <fieldset>
        <legend>Nog te ontwikkelen</legend>
        <p>Aan welke skills moet je nog extra aandacht besteden?</p>
        <label><input type="checkbox" name="aandachtspunten" value="Coderen in HTML/CSS"> Coderen in HTML/CSS</label>
        <label><input type="checkbox" name="aandachtspunten" value="Programmeren in Java" > Programmeren in Java</label>
        <label><input type="checkbox" name="aandachtspunten" value="Scripting: programmeren in JavaScript" > Scripting: programmeren in JavaScript</label>
        <label><input type="checkbox" name="aandachtspunten" value="planning" > planning</label>
        <label><input type="checkbox" name="aandachtspunten" value="Samenwerken" > Samenwerken</label>
    </fieldset>
    <p>Wat zijn jouw plannen voor de toekomst?</p>
    <textarea name="textarea" rows="7" cols="63"></textarea>   <input type="submit" value="Submit Form" />

</form>
<?php

echo 'name:'.' '.@$_POST['name'].'<br>';
echo 'Klas:'.' '.@$_POST['Klas'].'<br>';
echo 'textfield input:'.' '.@$_POST['textarea'].'<br>';

?>

</body>
</html>