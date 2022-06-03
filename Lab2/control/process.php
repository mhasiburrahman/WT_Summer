<?php

$first_name=$_POST['f_name'];
$last_name=$_POST['l_name'];
$user_age=$_POST['age'];

if(isset($sen))
{
    $sen=$_POST['sp'];
}
if(isset($lead))
{
    $lead=$_POST['pl'];
}


if(isset($l_java))
{
    $l_java=$_POST['java'];
}
if(isset($l_php))
{
    $l_php=$_POST['php'];
}
if(isset($cpp))
{
    $l_cpp=$_POST['cpp'];
}





$user_email=$_POST['email'];
$user_pass=$_POST['pass'];

if(isset($file))
{
    $file=$_POST['file_butt'];
}



    $user_submit=$_POST['submit'];


  



if(empty($first_name))
{
    echo "<br>";
    echo "Please insert first name";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$first_name))
    {
        echo "<br>";
        echo "Invalid first name";
    }
}

if(empty($last_name))
{
    echo "<br>";
    echo "Please insert first name";
}
else
{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$first_name))
    {
        echo "<br>";
        echo "Invalid last name";
    }
}


if(empty($user_age))
{
    echo "<br>";
    echo "Please insert age";
}


if(!isset($jun) || !isset($sen)||!isset($lead))
{
    
    echo "<br>";
    echo "Please insert radio";
}


if(!isset($l_java) || !isset($l_php)||!isset($l_cpp))
{
    echo "<br>";
    echo "Please insert checkbox";
}

if(empty($user_email))
{
    echo "<br>";
    echo "Please insert user mail";
}

if(empty($user_pass))
{
    echo "<br>";
    echo "Please insert password";
}

if(strlen($user_pass) <6)
{
    echo"<br>";
    echo "envalid password foramat";
}



if(!isset($file))
{
    echo "<br>";
    echo "Please insert file";
}

?>