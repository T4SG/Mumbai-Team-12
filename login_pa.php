
<!DOCTYPE html>
<html>	
<head>
<title>Login Page for Program Director</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="" />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,600,800,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Marvel:400,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
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
$db=mysql_select_db('school_selection',$conn);
if(!$db)
{
echo "error";
}

//$uid =  ($_POST['id']);
$name =  ($_POST['p_name']);
   $pwd1 =  ($_POST['p_password']);
   //$pwd2 =  ($_POST['password2']);
   //echo $uid;
   $sql="SELECT * FROM users WHERE  Username='$name' and Password='$pwd1' ";
   $retval = mysql_query($sql);
if(!$retval) {
   $err=mysql_error();
   print $err;
   //echo "hii";
   exit();
    }

    else{
	session_start();
	$_SESSION['username'] = $name;
       //print "successfully logged into system.";
header('Location: http://localhost/cfg/partner_input.php');
       //proceed to perform website’s functionality – e.g. present information to the user
    }
	
mysql_close($conn);
}?>
	<div class="registration">
		<h2>Login Form</h2>
		<div class="avtar"><img src="images/color.jpg" /></div>			
		<div class="form-info">
<br><br>
				<form action="<?php $_PHP_SELF ?>" method="post">
					<input type="text" class="text" value="Login " name="p_name" required pattern="[a-zA-Z0-9]+" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'LOG IN';}" >
					<input type="password" class="text" name="p_password" value="Password"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" >		<!--at least one number, one lowercase and one uppercase letter
     at least six characters   -->
  				
					<input type="submit"  name="submit" value="SUBMIT">
				</form>
			</div>			
			<ul class="bottom-sc-icons">
				<li><a href="https://www.facebook.com/happyheartsfund" class="facebook"><img src="images/fb.png" />Facebook</a></li>
				<li><a href="https://twitter.com/happyheartsfund" class="twitter"><img src="images/tw.png" />Twitter</a></li>
				<div class="sc-icons">
				<li><a href="https://plus.google.com/+HappyheartsfundOrg" class="google-p"><img src="images/gp.png" />Google+</a></li>
				<li><a href="https://www.linkedin.com/company/happy-hearts-fund" class="in"><img src="images/in.png" />Linkedin</a></li>
				</div>
			</ul>
			<div class="clear"> </div>
	</div>
<div class="copy-rights">
	<p>Designed by <a href="http://happyheartsfund.org" target="_blank">Happy Hearts Fund</a> </p>
</div>
</body>
</html>