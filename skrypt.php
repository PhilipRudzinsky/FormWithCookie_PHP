<?php
if(isset($_POST["submit"]))
{
    $imie=$_POST["imie"];
    $nazwisko=$_POST["nazwisko"];
    $data=$_POST["data"];
    $uro = (strtotime($data) - time()) / 86400;
    setcookie("dane", "Imię: ".$imie."<br> Nazwisko: ".$nazwisko."<br> Data urodzenia: ".$data."<br> Do urodzin zostało Ci: ".round($uro)." dni", time() + (86400 * 30), "/");
    echo "To twój plik cookie:<br> ".$_COOKIE["dane"];
}