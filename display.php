<?php 
$server="localhost";
$username="root";
$password="";
$database="vivek";

$con=mysqli_connect($server,$username,$password,$database);
if(!$con){
    die("Connection to this database failed due to" .mysqli_connect_error());

}else {
    echo"Sucees";
}
$sql="SELECT * FROM `j`";
$result=mysqli_query($con,$sql);

$num=mysqli_num_rows($result);
echo $num;


//Display rows
// if($num>0){
//     $row=mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
//     $row=mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
//     $row=mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
//     $row=mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
//     $row=mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
//     $row=mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";

// }
//while($row=mysqli_fetch_assoc($result)) {
    //echo var_dump($row);
 ////   echo $row['sno']."HEllo".$row['name']."".$row['gender']."".$row['age'];
   // echo"<br>";
//}
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="5"><h2>Student Record</h2></th> 
		</tr> 
			  <th> name</th> 
			  <th>gender </th> 
              <th> age</th>
			  <th>email</th> 
			  <th> phone</th> 
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
            
		?> 
		<tr> <td><?php echo $rows['name']; ?></td> 
		<td><?php echo $rows['gender']; ?></td> 
		<td><?php echo $rows['age']; ?></td> 
		<td><?php echo $rows['email']; ?></td>
        <td><?php echo $rows['phone']; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>