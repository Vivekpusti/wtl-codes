<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>

<?php
$insert=false;
// agar koi name fill kare toh backend aur database meien jayega isset post name se
if(isset($_POST['create'])){
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
 echo "Success connecting to the db";


$a=$_POST["rtr"];
$b=$_POST["vtr"];
$c=$_POST["itr"];

$sql="INSERT INTO `rete`.`tree` ( `Product name`, `item Str`, `ffdff`, `time`) VALUES ( '$a', '$b', '$c', current_timestamp());";
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

echo "itemID:".$a."<br>";
echo "itemName:".$b."<br>";
echo "itemQuantity:".$c."<br>";
$con->close();
}

?>
<body>
    <form action="index.php" method="POST">
        itemID<input type="text" name="rtr"><br>
       itemName<input type="text" name="vtr"><br>
       itemQuanitiy<input type="text" name="itr"><br>
        <input type="submit" name="create">
</form>

</body>
</html>
