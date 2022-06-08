<?php
$insert=false;
// agar koi name fill kare toh backend aur database meien jayega isset post name se
if(isset($_POST['name'])){
    // set connection from code to localhost and with database
$server="localhost";
$username="root";
$password="";

// Create  a datavase connection
$con=mysqli_connect($server,$username,$password);

// checking for connection succes or not
if(!$con){
    die("Connection to this database failed due to" .mysqli_connect_error());

}

// collecting post variBLES HTML WALA DIV KO YAHA VARIABLE MEINE STORE TAKI DATABAE ACCORING JAYE
// ECHO SQL SE DISPLAY HOGA KI GAYA KI NHI DATABASE MEINE
$name =$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$sql="INSERT INTO `vivek`.`j` ( `name`, `gender`, `age`, `email`, `phone`) VALUES ( '$name', '$gender', '$age', '$email', '$phone');";
//echo $sql;


// EXECUTE THE QUERY
if($con ->query($sql)== true){
    //echo "Successfully insered";
    // $INSERT FLAG FOR SUCCESFULL CONNECTION
    $insert=true;
}else{
    echo "ERROR: $sql <br> $con->error";
}
// CLOSE DAtabase connection
$con->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Source+Sans+Pro:wght@300&family=Syne+Tactile&display=swap" rel="stylesheet">
    <title>Welcome to my portfolio</title>
</head>
<body>
    <img class="bg"src="bg.jpg" alt="back">
    <div class="container">
        <?php
        if($insert==true){
       echo  "<p class='SubmitMes'>Thanks for submitiing your form</p>";}
        ?>
        <form action="fr.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your Phone Number">
            <button class="btn">Submit</button>
            
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>