<!DOCTYPE html>
<html>
<head>
	<title>Algorithm</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<center><h2>School Ranking</h2></center>
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
$rank=array();
$school = array();
$children = array();
$cost = array();
//echo $rank;
$info=mysql_fetch_array($result);
$id = 0;
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
			/*echo $res[0]."<br>";
			echo $res[1]."<br>";
			echo $res[2]."<br>";
			echo $res[3]."<br>";
			echo $res[4]."<br>";
			echo $res[5]."<br>";
			echo $res[6]."<br>";
			echo "sum";*/
			
			
			
			//echo $info1[11];

$sum = $res[0]+$res[1]+$res[2]+$res[3]+$res[4]+$res[6];
//echo "sum is" .$sum;
array_push($rank, array($sum,$id));
array_push($school, array($info1[11],$id));
array_push($children, array($info1[0], $id)	);
array_push($cost,array($info1[1],$id));
$id++;
/*for($i = 0; $i < 7; $i++)
		{ echo "hii".$res[i];
			$sum = $res[i] + $sum;
			
		}
		echo "sum is" .$sum;*/
}

		
		
 
	
				
			}
sort($rank);
$c=count($rank);
//echo $c;
$n = 1;
echo "<table border=1 class='table table-striped'>";
echo "<th>Rank</th><th>score</th><th>School Name</th><th>Number ofchildren affected</th><th>Cost</th>";
while($c > 0)
{  echo "<tr><td>".$n."</td>";	
	echo "<td>" . $rank[$c-1][0]."</td>";
	$c1 = count($school);
	while($school[$c1-1][1]!=$rank[$c-1][1])
	{
		$c1--;
		}
	
	echo "<td>".$school[$c1-1][0]."</td>";
	echo "<td>".$children[$c1 - 1][0]."</td>";
	echo "<td>$ ".$cost[$c1 - 1][0]."</td></tr>";
	$c--;
	$n++;
}echo "</table>"

	

				
	
	










   
	


?>
</div>
</body>
</html>