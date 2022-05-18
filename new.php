
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>cookie with php</title>
</head>
<body>

<?php
$localhost = "localhost:3306";
$user = "root";
$pass = "root";

$conn = mysqli_connect($localhost,$user,$pass);

if(!$conn){
echo "error";
}else{
echo "connect";
}
mysqli_select_db($conn,'companyreg');

// $createTable = "CREATE TABLE studentCookie(roll int(8),class varchar(30))";
// if(mysqli_query($conn,$createTable)){
// echo "table created";
// }else{
// echo "not created";
// }

$insert = "INSERT INTO studentCookie(roll,class) VALUES(105,'cse')";
if(mysqli_query($conn,$insert)){
echo "data inserted";
setcookie('issue',"1",time()+6);
echo "<br>cookie set";
}else{
echo "error";
}

if(isset($_COOKIE['issue'])){
$select = "SELECT *FROM studentCookie";
$result = mysqli_query($conn,$select);
while($row = mysqli_fetch_assoc($result)){
echo "<br>" .$row['roll'] . "=>" .$row['class'];
}
}else{
echo "cookie not set";
}
?>
</body>
</html>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>User Login</title>
</head>
<body>
<!-- Design a login page for the system of your choice and display a welcome page with
proper UI for the authentic users.  -->

<form method = 'POST'>
Enter the Email :<input type="text" name="email1" id ="email">
Enter the password : <input type="text" name="pass1" id ="pass">
<input type="submit" name="submit">
</form>
<?php
$localhost = "localhost:3306";
$user = "root";
$pass = "root";
$conn = mysqli_connect($localhost,$user,$pass);

if(!$conn){
echo "Error!";
}else{
echo "Connected DB <br>";
}

mysqli_select_db($conn,"companyreg");
// $createTable = "CREATE TABLE Login(username  varchar(20), email varchar(50),password varchar(30))";
// if(mysqli_query($conn,$createTable)){
// echo "table created";
// }else{
// echo "Error";
// }

// $insertrecord = "insert into Login values('Achal','achalmate01@gmail.com','Achal123')";
// if(mysqli_query($conn,$insertrecord)){
// echo "record inserted";
// }else{
// echo "Error";
// }


$email = $_REQUEST['email1'];
$pass = $_REQUEST['pass1'];

$fetchdata = "select * from Login where email ='$email' and password = '$pass'";
$result = mysqli_query($conn,$fetchdata);
$res = mysqli_fetch_array($result);
// while($row = mysqli_fetch_assoc($result)){
// echo $row['email'] . "= " .$row['password'];
// }

//echo $res['email'] . "= " .$res['password'];


if($email == $res['email'] && $pass == $res['password']){
echo "<br> Welcome " .$res['username'];
}else{
echo "mar salya ";
}
?>

</body>
</html>
