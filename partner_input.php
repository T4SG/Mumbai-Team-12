<!DOCTYPE html>
<html>
<head>
	<title>Partner</title>
	
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
		echo "db nt selected";
	}

//if(! get_magic_quotes_gpc() )
//{
   $txt_name = addslashes ($_POST['txt_name']);
   $txt_nos = addslashes ($_POST['txt_nos']);
  
   $txt_cost = addslashes ($_POST['txt_cost']);
    $txt_bp = $txt_nos / $txt_cost;
   $txt_dp = addslashes ($_POST['txt_dp']);
   $txt_cp = addslashes ($_POST['txt_cp']);
   $txt_mt = addslashes ($_POST['txt_mt']);
   $txt_dr = addslashes ($_POST['txt_dr']);
   $txt_pc = addslashes ($_POST['txt_pc']);
   $txt_cr = addslashes ($_POST['txt_cr']);
   $txt_pi = addslashes ($_POST['txt_pi']);
   
   $sql = "INSERT INTO input ".
       "(Child_count,Project_cost,Beneficiary_percentage,Damage,Community_participation,Maintenance,Disaster_resistance,Principal_collaboration,Computer_reliability,PartnerID,School_name) ".
       "VALUES('$txt_nos','$txt_cost','$txt_bp','$txt_dp','$txt_cp','$txt_mt','$txt_dr','$txt_pc','$txt_cr','$txt_pi','$txt_name' )";
   $retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
	else{?>
	<script type="text/javascript">
	alert("Data entered successfully");
	</script>
	
		<?php echo "data entered successsfully";
		
	}

 
mysql_close($conn);
}

   ?>




<form name="lp_home" action="<?php $_PHP_SELF ?>" method="POST">
School Name :<input type="text" name="txt_name" value=""><br>
Number of Students : <input type="text" name="txt_nos" value=""><br>
Cost : <input type="text" name="txt_cost" value=""><br>
Damage proportion :  <input type="text" name="txt_dp" value=""><br>
Community participation :   <input type="text" name="txt_cp" value=""><br>
Maintenance : <input type="text" name="txt_mt" value=""><br>
Disaster Resisance :  <input type="text" name="txt_dr" value=""><br>
Principal Co-operation : <input type="text" name="txt_pc" value=""><br>
Computer Reliability : <input type="text" name="txt_cr" value=""><br>
Partner Id : <input type="text" name="txt_pi" value=""><br>
<input type="submit" name="submit" value="Enter">
</form>

</body>
</html>