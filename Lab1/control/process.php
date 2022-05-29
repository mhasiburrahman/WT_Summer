<?php
$f_digit=$_POST["fnum"];
$s_digit=$_POST["snum"];

$plus=$_POST["add"];

$minus=$_POST["sub"];

$mult=$_POST["mul"];

$divide=$_POST["div"];

if($plus=="+")
{
    echo "Your answer is ";
    echo $f_digit+$s_digit;
}

if($minus=="-")
{
    echo "Your answer is ";
    echo $f_digit-$s_digit;
}

if($mult=="*")
{
    echo "Your answer is ";
    echo $f_digit*$s_digit;
}


if($divide=="/")
{
    echo "Your answer is ";
    echo $f_digit/$s_digit;
}


?>