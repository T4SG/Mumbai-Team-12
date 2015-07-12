<!DOCTYPE html>
<html>
<head>
	<title>Partner</title>
	
</head>
<body>
<?php include 'navbar.php';?>
<?php

if(isset($_POST['submit']))
{
	//echo "hii";
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'code4good';

$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}


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
		//echo "data entered successsfully";
		?>
		<script type="text/javascript">
		window.alert("Data Enterd Successfully");
		</script>
		
	<?php  
		
	}

 
mysql_close($conn);
}
else
{
   ?>
   
<form  method="post" action="<?php $_PHP_SELF ?>">

<br><br>
<center>
<div id="container_w" >
<div class ="factor"><centre><h1 id="h1" >Partners<h1></centre> </div>
<br>
<br>
<br>
<div id="factor_wrap">
	Partner Name :-<br><br> <input type="text" name="partner_name" value=""><br><br><br>
	Password :- <br><br> <input type="password" name="partner_password" value=""><br><br><br>
	Credits  :- <br><br> <input type="range" name="partner_credits" min="0" max="10" value="0" oninput="amount12.value=partner_credits.value" class="form-control">
<output name="amount12" for="partner_credits">0 </output><br><br><br>
	Area :- <br><br> <input type="text" name="partner_area" value=""><br><br><br>
		<input type="submit" name="submit" value="Enter"><br>
</div>
</center>
</div>
</form>

<?php
}
?>
</body>
</html>