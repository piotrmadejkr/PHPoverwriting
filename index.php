<?php include('settings.php');?>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
    <title>$title</title>
   
</head>
<body>

<!-- parking - mamay 10 miejsc + formularz - z napisem "wybierz miejsce (od 1 do 10)" i wpisz nr rejestracyjny pojazdu = jesli wpiszemy to miejsce sie zajmie i tam bedzie numer i kolor miejsca np czerwony, a jak sie zwolni to mamy od tego "x - tym czyscimymy miejsece" -->


<form method="get">
    <input type="text" placeholder="wpisz numer rejestracji" name="rejestracja">
     
<select name="miejsce">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
</select>  
    <input type="submit" value="zarezerwuj!" name="zarezerwuj">
</form>

<div class="kwadraty">
    <?php 
    for($i=0; $i<10; $i++) {
    if($rejestrTab[$i]['numer']=='') {
        echo '<div class="auto pusty">'.$i.'-wolne</div>';
    }
    else {
        echo '<div class="auto pelny">'.$i.'-'.$rejestrTab[$i]['numer'].'</div>';
    }
    }
    ?>

<div>


<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.waterwheelCarousel.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>

