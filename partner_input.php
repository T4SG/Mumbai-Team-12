<!DOCTYPE html>
<html>
<head>
	<title>Partner</title>
	  <link rel="stylesheet" href="add_weightage_style.css">

</head>
<body>

<?php

if(isset($_POST['submit']))
{
	
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
session_start();
$partner= $_SESSION["username"]; 
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
   //$txt_pi = addslashes ($_POST['txt_pi']);
   
   $sql = "INSERT INTO input ".
       "(Child_count,Project_cost,Beneficiary_percentage,Damage,Community_participation,Maintenance,Disaster_resistance,Principal_collaboration,Computer_reliability,Partner_name,School_name) ".
       "VALUES('$txt_nos','$txt_cost','$txt_bp','$txt_dp','$txt_cp','$txt_mt','$txt_dr','$txt_pc','$txt_cr','$partner','$txt_name' )";
   $retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
	else{?>
	<script type="text/javascript">
	alert("Data entered successfully");
	</script>
	
		<?php 
		
	}

 
mysql_close($conn);
}

   ?>




<form name="lp_home" action="<?php $_PHP_SELF ?>" method="POST">

<br><br>

<center>
<div id="container_w" >
<div class ="factor"><centre><h1 id="h1" >Factors<h1></centre> </div>
<br>
<br>
<br>

<div id="factor_wrap">
School Name :-<br><br><input type="text" name="txt_name" value=""><br><br><br>
Number of Students  :- <br><br> <input type="text" name="txt_nos" value=""><br><br><br>
Cost :- <br><br><input type="text" name="txt_cost" value=""><br><br><br>
Damage proportion :-<br><br><input type="range" name="txt_dp" min="0" max="10" value="0" oninput="damage.value=txt_dp.value" class="form-control"> 
<output name="damage" for="txt_dp">0 </output> <br><br><br>

Community participation  :-<br><br><input type="range" name="txt_cp" min="0" max="10" value="0" oninput="community.value=txt_cp.value" class="form-control"> 
<output name="community" for="txt_cp">0 </output><br><br><br>

Maintenance :- <br><br><input type="range" name="txt_mt" value="0" min="0" max="10" value="0" oninput="maintenance.value=txt_mt.value" class="form-control"> 
<output name="maintenance" for="txt_mt">0 </output><br><br><br>
Disaster Resisance :  <br><br><input type="range" name="txt_dr" value="0" min="0" max="10" value="0" oninput="disaster.value=txt_dr.value" class="form-control"> 
<output name="disaster" for="txt_dr">0 </output><br><br><br>

Principal Co-operation :- <br><br><input type="range" name="txt_pc" value="0" min="0" max="10" value="0" oninput="principal.value=txt_pc.value" class="form-control"> 
<output name="principal" for="txt_pc">0 </output><br><br><br>

Computer Reliability :- <br><br><input type="range" name="txt_cr" value="0" min="0" max="10" value="0" oninput="computer.value=txt_cr.value" class="form-control"> 
<output name="computer" for="txt_cr">0 </output><br><br><br>



<input id="fin" type="submit" name="submit" value="Enter"><br>
</div>
</center>
</div>
</body>
</html>