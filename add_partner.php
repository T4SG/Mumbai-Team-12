<!DOCTYPE html>
<html>
<head>
	<title>New document</title>
	<meta name="generator" content="TSW WebCoder 2013">
</head>
<body>

<?php
if(isset($_POST['submit']))
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db('combo');

//if(! get_magic_quotes_gpc() )
//{
   $txt_partner = addslashes ($_POST['txt_partner']);
   $crime = addslashes ($_POST['crime']);
   $date = addslashes ($_POST['date']);
   $status = addslashes ($_POST['status']);
   $c_id = addslashes ($_POST['c_id']);
   $address = addslashes ($_POST['address']);
   $contact = addslashes ($_POST['contact_no']);
   $background = addslashes ($_POST['background']);
   //$photo = addslashes ($_POST['photo']);
   echo "hey";
   $punishment = addslashes ($_POST['punishment']);
   ?>
   
<form name="addLocalP" method="post" action="<?php $_PHP_SELF ?>">
	Partner Name : <input type="text" name="partner_name" value=""><br>
	Password : <input type="password" name="partner_password" value=""><br>
	Credits :  <input type="text" name="partner_credits" value=""><br>
	Area : <input type="text" name="partner_area" value=""><br>
		<input type="Submit" name="btnSub_addP" value="Enter">
</form>


</body>
</html>