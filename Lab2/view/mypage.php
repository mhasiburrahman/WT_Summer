<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process.php" method="POST">
        First Name <input type="text" name="f_name">
        <br>
        <br>
        Last Name <input type="text" name="l_name" >
        <br>
        <br>
        Age <input type="text" name="age">
        <br>
        <br>
        Destination 
        <input type="radio" name="jp">Junior programmer
        <input type="radio" name="sp">Senior programmer
        <input type="radio" name="pl">Project lead
        <br><br>
     
        Prefered languange
        <input type="checkbox" name="java">java
        <input type="checkbox" name="php">PHP
        <input type="checkbox" name="cpp">C++
     
        <br><br>
     
        E-mail <input type="text" name="email">
     
        <br><br>
     
        Password <input type="password" name="pass">
     
        <br><br>
     
        Please choose a file 
        <input type="button" name="file_butt" value="Choose a file">
        <br><br>
     
        <input type="submit" name="submit" value="submit">
        <input type="button" name="reset" value="reset">
     
     
     
     
    </form>
  
   
</body>
</html>