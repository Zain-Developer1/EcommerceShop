<?php session_start()?>
<html>
    <head>
        <style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  transition-duration:.3s;
}
.button2 {background-color: #008CBA;} /* Blue */
.button2:hover {background-color: orange;} /* hover */
        </style>
    </head>
    <body>
    
    <?php
    $a=$_POST["t1"];
    $b=$_POST["t2"];
    
    $servername="localhost";
    $uname="root";
    $password="";
    $dbname="zshop";
    $cn=new mysqli($servername,$uname,$password,$dbname);
    if($cn->connect_error)
    {
        die ("connection failed".connect_error);
    }
    
    $q="select * from customers where email='$a' and password='$b'";
    
    $result=$cn->query($q);
    
   if ($result->num_rows > 0)
   {
   		$row=$result->fetch_assoc();
   		$b=$row["name"];
   		$_SESSION["name"]=$b;
   		header("location: http://localhost/eshopz/index.php");
   }
   
    else{
        echo"INVALID EMAIL & PASSWORD";
    
    }
    ?>
    <br><br><br>
    
    <a href="1_login.php"><button class="button button2">PLEASE TRY AGAIN</button></a>
    </body>
</html>