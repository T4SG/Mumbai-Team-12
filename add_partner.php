<!DOCTYPE html>
<html>
<head>
	<title>Partner</title>
	
</head>
<body>

<?php
echo "hii";
if(isset($_POST['submit']))
{
	echo "hii";
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
echo "hii";

$db=mysql_select_db('school_selection');
	if(!$db)
	{
		echo "db nt selected";
	}

//if(! get_magic_quotes_gpc() )
//{
   $partner_name = addslashes ($_POST['partner_name']);
   $partner_password = addslashes ($_POST['partner_password']);
   $partner_credits = addslashes ($_POST['partner_credits']);
   $partner_area = addslashes ($_POST['partner_area']);
   $sql = "INSERT INTO users ".
       "(Username,Password,Credits,Area) ".
       "VALUES('$partner_name','$partner_password','$partner_credits','$partner_area' )";
   $retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
else
	{
		echo "data entered successsfully";
		
	}
echo "Entered data successfully\n";	   
 
mysql_close($conn);
}
else
{
   ?>
   
<form  method="post" action="<?php $_PHP_SELF ?>">
	Partner Name : <input type="text" name="partner_name" value=""><br>
	Password : <input type="password" name="partner_password" value=""><br>
	Credits :  <input type="text" name="partner_credits" value=""><br>
	Area : <input type="text" name="partner_area" value=""><br>
		<input type="submit" name="submit" value="Enter">
</form>

<?php
}
?>
</body>
</html>