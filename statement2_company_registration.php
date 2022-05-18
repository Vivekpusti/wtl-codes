
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Company Registration form</title>
</head>
<body>
	<!-- Design a company registration form having the following fields = [companyID,companyName, Location, Department].
Write a PHP script to display all the registered companies and provide a search bar for
searching the companies located in a specific city. -->
	<form method="POST">
city : <input type="text" name="ccity">

</form>
<?php 

$city = $_REQUEST['ccity'];
echo $city ."<br>";
$host = 'localhost:3306';  
$user = 'root';  
$pass = 'Achal@123';  
$conn = mysqli_connect($host, $user, $pass);  
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  
echo '<br>Connected successfully<BR>';  

mysqli_select_db($conn,'phpdatbase'); // connecting to database 
echo "In Database Successfully";
// $createtable  = 'create table Employee(CompanyID int,CompanyName char(40),Address varchar(40),Department varchar(30))'; 

// if(mysqli_query( $conn,$createtable)){  
//   echo "<br>Table  created successfully.<BR>";  
// }else{  
// echo "Sorry, Table  creation failed ".mysqli_error($conn);  
// }  

// $insertRecord  = 'insert into Employee values(102,"Pushkar","Pune","CSE-IS")';

// if(mysqli_query($conn,$insertRecord)){
// 	echo "<br>Record insert Successfully";
// }


$fetchrecord = "Select * from Employee";
$result = mysqli_query($conn,$fetchrecord);
// while ($rows = mysqli_fetch_assoc($result)) {
// 	// echo "<br>".$rows['CompanyID'];
// 	foreach($rows as $index => $data){
// 	foreach($data as $key => $val){
// 		echo $val ."<br>";
// }
// }
// }
/*if(mysqli_query($conn,$fetchrecord)){
	echo 
}
*/

while($row=mysqli_fetch_assoc($result))
{
	$json[]=$row;
	
}

echo "<br>----------------<br>";
echo json_encode($json);
 echo "<br>-----------------------<br>";
$fetchData = "select * from Employee where Address ='$city'";
$result = mysqli_query($conn,$fetchData);

While($row=mysqli_fetch_assoc($result)){
	echo "<br>" .$row["Department"] .$row['CompanyName'];
}
mysqli_close($conn); 
?>  
</body>
</html>