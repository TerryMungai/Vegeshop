<?php 
if(isset(POST['submit'])){
    $dbhost='localhost';
    $dbuser='root';
    $pass='';
    $dbname='organic';
    
    $conn=new mysqli($dbhost, $dbuser, $pass, $dbname)
    if($conn=false){
        die("error: conection could not be established" . $conn->connect_error);
    }
    
   $user=$_POST['user'];
   $password=$_POST['pwd'];
   $sql="INSERT INTO(Username,Password,) VALUES('user', 'pwd',)" 
   if($conn->query($sql)) {
       echo "Registered Successfuly"
   }
}
?>