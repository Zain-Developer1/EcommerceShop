<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a4=$_POST["tt1"];
    $b4=$_POST["tt2"];
    $c4=$_POST["tt3"];
    $d4=$_POST["tt4"];
    $e4=$_POST["tt5"];
      
    $servername="localhost";
    $uname="root";
    $password="";
    $dbname="zshop";
    $cn=new mysqli($servername,$uname,$password,$dbname);
    if($cn->connect_error)
    {
        die ("connection failed".connect_error);
    }
$q="insert into contactus(cname,csubject,cemail,cphone,cmessage) values('$a4' , '$b4' , '$c4' , '$d4' , '$e4')";
$result =$cn->query($q);

echo"Thanks for feedback";
?> <br><br> 
<button><a href="index.php">Click to move on Main Page</a></button>
</body>
</html>