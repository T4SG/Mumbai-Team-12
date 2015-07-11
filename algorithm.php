<!DOCTYPE html>
<html>
<head>
	<title>Algorithm</title>
	
</head>
<body>
<?php 
error_reporting(0);
$username = "root";
$password = "";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");



$selected= mysql_select_db("school_selection",$dbhandle ) 
  or die("Could not select bookmyshow");

//$s= $_POST["crime"];
$query="SELECT * 
FROM  weightage";

$query1="SELECT * 
FROM  input";
$result = mysql_query($query);
$result1 = mysql_query($query1);

/*$info=mysql_fetch_array($result); for($j = 0; $j < 10; $j++)
{
	echo $info[$j];
}
$info1=mysql_fetch_array($result1);echo $info1;*/
$res = array();
/*if(mysql_num_rows($result) > 0)
{
	if(mysql_num_rows($result1) > 0)
	{
		while($info = mysql_fetch_assoc($result))
		{ 
		
			while($info1 = mysql_fetch_assoc($result1))
			{
				
				/*for($i = 1; $i <= 7; $i++)
				{
					$res[$i - 1] = $info[$i-1] * $info1[$i + 2];
					
	echo $res[$i-1]."<br>";}
	        $res[0]=$info["Beneficiary_percentage"]*$info1["Beneficiary_percentage"];
echo $res[0];
					
				
			}
		}
	}
}*/
/*$info=mysql_fetch_array($result); for($j = 0; $j < 10; $j++)
{
	echo $info[$j];
}
$info1=mysql_fetch_array($result1);echo $info1;*/
$res = array();
$rank=array();$rank->append(0);
echo $rank;
$info=mysql_fetch_array($result); 
	if(mysql_num_rows($result1) > 0)
	{
		
		
			while($info1 = mysql_fetch_array($result1))
			{
				
				
	        $res[0]=$info[0]*$info1[2];
			$res[1]=$info[1]*$info1[3];
			$res[2]=$info[2]*$info1[4];
			$res[3]=$info[3]*$info1[5];
			$res[4]=$info[4]*$info1[6];
			$res[5]=$info[5]*$info1[7];
			$res[6]=$info[6]*$info1[8];
echo $res[0];
echo $res[1];
echo $res[2];
echo $res[3];
echo $res[4];
echo $res[5];
echo $res[6];
$sum = 0;
		for($i = 0; $i < 7; $i++)
		{
			$sum = $res[i] + $sum;
		}
 
	$rank = res;
				
			}
		}
	
				
	
	










   
	


?>

</body>
</html>