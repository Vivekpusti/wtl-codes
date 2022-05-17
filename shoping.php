<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>

<?php
if(isset($_POST['create'])){
$a=$_POST["rtr"];
$b=$_POST["vtr"];
$c=$_POST["itr"];



echo "itemID:".$a."<br>";
echo "itemName:".$b."<br>";
echo "itemQuantity:".$c."<br>";
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
