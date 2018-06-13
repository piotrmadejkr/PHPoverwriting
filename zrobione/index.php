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
    <style type="text/css">
    .zajete {
        background: red;
        width: 100px;
        height: 50px;
        display: inline-block;
        margin: 2px;
        border: 2px solid black;
    }
    .auto {
        background: green;
        width: 100px;
        height: 50px;
        display: inline-block;
        margin: 2px;
        border: 2px solid black;
    }

    </style>
</head>
<body>

<!-- parking - mamay 10 miejsc + formularz - z napisem "wybierz miejsce (od 1 do 10)" i wpisz nr rejestracyjny pojazdu = jesli wpiszemy to miejsce sie zajmie i tam bedzie numer i kolor miejsca np czerwony, a jak sie zwolni to mamy od tego "x - tym czyscimymy miejsece" -->


<form method="get">
    <input type="text" placeholder="wpisz numer rejestracji" name="rejestracja">
    <select name="miejsce">
    <?php
    for($i=0; $i<$iloscMiejsc; $i++) {
    echo  '<option value="'.$i.'">'.($i+1).'</option>';
    }

    ?>
    </select>    
    <input type="submit" value="zarezerwuj!" name="zarezerwuj">
</form>

<div class="kwadraty">


  <?php
for($i=0; $i<$iloscMiejsc; $i++) {
  

    if($rejestracja[$i]['numer'] != '') {
        echo '<div class="auto">'.$rejestracja[$i]['numer'].'</div>'; 
    }
    else{
        echo '<div class="zajete">BRAK</div>'; 
    }
}
?>
    <div class=""></div>



<div>



<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.waterwheelCarousel.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>

