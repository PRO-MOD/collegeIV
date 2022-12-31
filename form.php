<html>
    <body>


<?php
if ($_SERVER['REQUEST_METHOD'] =='POST'){
$name=$_POST['name'];

$email=$_POST['email'];
$Roll=$_POST['RollNumber'];



$sem=$_POST['sem'];
$phone=$_POST['phone'];
$branch=$_POST['branch'];



}

$host = 'localhost:3306';  
$user = 'root';  
$pass = 'Pramod'; 
$dbname = "pramod"; 
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(! $conn )  
{  
    
  die('Could not connect: ' . mysqli_error());  
}  

else{
 
}

$sql1="SELECT name FROM pro where roll='$Roll'";

$sql2 = "INSERT INTO pro  VALUES ('$name','$Roll','$phone','$email','$sem','$branch')";
if($result=mysqli_query($conn,$sql1)){
    
    $name=mysqli_num_rows($result);
    if($name>0){
      
?>
<p>This user exist pls try different phone number </p>
<a href="RForm.html">GO back</a>
<?php

    }
    else{

        if($result2=mysqli_query($conn,$sql2)){
            echo "Registration is done";
        }
        else{
            echo "Registration failed ,not done";
        }
    }
}



 



// Close connection
mysqli_close($conn);
?>


</body>
    </html>