<?php
error_reporting(0);
$iloscMiejsc =10;


$rejestracja[]= ['numer'=>'KR1114KK'];
$rejestracja[]=['numer'=>'KK444kk'];
$rejestracja[]=['numer'=>''];
$rejestracja[]=['numer'=>'KK444kk'];
$rejestracja[]=['numer'=>''];
$rejestracja[]=['numer'=>'KK444kk'];
$rejestracja[]=['numer'=>'KK444kk'];



// for($i=0; $i>$iloscMiejsc; $i++) {
//  echo  '<option value="'.$i.'"> '.$i+1.'</option>';
// }










if(isset($_GET['zarezerwuj'])) {
$rejestracja[0]['numer']= 'zajete';
$rejestracja[$_GET['miejsce']]['numer']=$_GET['rejestracja'];
}

echo '<pre>';
print_r($rejestracja);
echo '</pre>';




// tutaj nie ma selecta, a wiec name, wiec PHP widzi tylko numer iteracyjny [] - po nim definiujemy konkretny element. 






if($rejestracja != '') {
    echo $rejestracja;
}




?>