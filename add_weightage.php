<!DOCTYPE html>
<html>
<head>
	<title>Weightage</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
		//echo "data entered successsfully";
		?>
		<script type="text/javascript">
		window.alert("Data Entered Successfully");
		</script>
		
	<?php  }
 
 
mysql_close($conn);
}

   ?>
<?php include 'navbar.php';?>
<!--<div id="header">  <button type="button" align="right" id="addpartner">Add a new partner</button></div>
 <div style="float:none"></div>-->  
<form name="weightage" method="post" action="<?php $_PHP_SELF ?>" role="form">

<br><br>

<center>
<div id="container_w" >
<div class ="factor"><h1>Weightage<h1> </div>
<br>
<br>
<br>

<div id="factor_wrap">
Impact on the number of children :-<br><br>


<input type="range" name="rd_impact_ch" min="0" max="10" value="0" oninput="amount1.value=rd_impact_ch.value" class="form-control">
<output name="amount1" for="rd_impact_ch">0 </output>  <br><br><br>
Damage proportion of the building :-<br><br>
<input type="range" name="rd_damage_prop" min="0" max="10" value="0" oninput="amount2.value=rd_damage_prop.value" class="form-control">
<output name="amount2" for="rd_damage_prop">0 </output>
<br><br><br>
Community participation :-<br><br>
<input type="range" name="rd_com_part" min="0" max="10" value="0" oninput="amount3.value=rd_com_part.value" class="form-control">
<output name="amount3" for="rd_com_part">0 </output>
<br><br><br>
Future maintenance :-<br><br>
<input type="range" name="rd_fut_mt" min="0" max="10" value="0" oninput="amount4.value=rd_fut_mt.value" class="form-control">
<output name="amount4" for="rd_fut_mt">0 </output>
<br><br><br>
Disaster resistance :-<br><br>
<input type="range" name="rd_dis_r" min="0" max="10" value="0" oninput="amount5.value=rd_dis_r.value" class="form-control">
<output name="amount5" for="rd_dis_r">0 </output>
<br><br><br>
Principal Co-operation :-<br><br>
<input type="range" name="rd_prin_c" min="0" max="10" value="0" oninput="amount6.value=rd_prin_c.value" class="form-control">
<output name="amount6" for="rd_prin_c">0 </output>
<br><br><br>
Computer reliabilty :-<br><br>
<input type="range" name="rd_comp_r" min="0" max="10" value="0" oninput="amount7.value=rd_comp_r.value" class="form-control">
<output name="amount7" for="rd_comp_r">0 </output>
<br><br><br>
<centre><input id="fin" type="submit" name="submit" value="Rank Schools" class="btn btn-default"></centre>
</form>

</div>
</div>
</center>

  <script language="javascript" type="text/javascript" src="add_weightage.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="jquery.js"></script>
</body>
</html>