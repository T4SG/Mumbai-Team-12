<!DOCTYPE html>
<html>
<head>
	<title>Weightage</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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


$db=mysql_select_db('school_selection');
	if(!$db)
	{
		echo "db not selected";
	}

//if(! get_magic_quotes_gpc() )
//{
   $impact = addslashes ($_POST['rd_impact_ch']);
   $damage = addslashes ($_POST['rd_damage_prop']);
   $community = addslashes ($_POST['rd_com_part']);
   $maintenance = addslashes ($_POST['rd_fut_mt']);
   $disaster_resistance = addslashes ($_POST['rd_dis_r']);
   $principal_cooperation = addslashes ($_POST['rd_prin_c']);
   $computer_reliability = addslashes ($_POST['rd_comp_r']);
   $sql = "INSERT INTO weightage ".
       "(Beneficiary_percentage,Damage,Community_participation,Maintenance,Disaster_resistance,Principal_collaboration,Computer_reliability) ".
       "VALUES('$impact','$damage','$community','$maintenance','$disaster_resistance','$principal_cooperation','$computer_reliability')";
   $retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
else
	{
		echo "data entered successsfully";
		
	}
 
 
mysql_close($conn);
}
else
{
   ?>
   
<form name="weightage" method="post" action="<?php $_PHP_SELF ?>" role="form">

<br><br>

Weightage:- 
<br>
Impact on the number of children :-
<input type="text" name="rd_impact_ch" class="form-control">
<br>
Damage proportion of the building :-
<input type="text" name="rd_damage_prop" >
<br>
Community participation :-
<input type="text" name="rd_com_part" >
<br>
Future maintenance :-
<input type="text" name="rd_fut_mt" >
<br>
Disaster resistance :-
<input type="text" name="rd_dis_r" >
<br>
Principal Co-operation :-
<input type="text" name="rd_prin_c" >
<br>
Computer reliabilty :-
<input type="text" name="rd_comp_r" >
<br>
<input type="submit" name="submit" value="Enter" class="btn btn-default">
</form>

<?php
}
?>
</body>
</html>