<?php
$insert=false;
if(isset($_POST['name'])){
  
 $server="localhost";
 $username="root";
 $password="";

 $con=mysqli_connect($server,$username,$password);
 if (!$con) {
    die ("connection to this database failed due to ".mysqli_connect_error());
 }

//  echo "sucess to connect database";
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$number=$_POST['number'];
$desc=$_POST['desc'];
$sql="INSERT INTO `trip`.`trip_name` ( `NAME`, `AGE`, `GENDER`, `EMAIL`, `PHONE NUMBER`, `other`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$number', '$desc', current_timestamp());";
// echo $sql;

if ($con->query($sql)===true) {
    // echo  "sucessfull inserted";
     $insert=true;  
}c
else{
    echo "error: ".$sql."<br>" .$con->error;
}
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel From</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contrainer">
        <h1>WELCOME TO IMIT CUTTACK STUDY TOUR TRIP</h1>
        <p>Submit this form to Participate For Trip</p>
        <?php
        if ($insert==true) {
            
         echo "<p class='submitmsg'>Thanks For Submitting your form. We are Happy to see you Joining Us</p>";

                 }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="ENTER YOUR NAME">
            <input type="text" name="age" id="age" placeholder="ENTER YOU AGE">
            <input type="text" name="gender" id="gender" placeholder="ENTER YOUR GENDER">
            <input type="email" name="email" id="email" placeholder="ENTER YOUR EMAIL">
            <input type="number" name="number" id="number" placeholder="ENTER YOUR PHONE NUMBER">
            <textarea name="desc" id="desc" placeholder="something about yourself"></textarea>
            <button type="submit">submit</button>
            <!-- <button type="reset">reset</button> -->
        </form>
    </div>
   <sript src="javascript.js"></sript> 
   
        
</body>
</html>