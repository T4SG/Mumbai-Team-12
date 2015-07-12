<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="style.css" />
        <!--link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" /-->
		<link rel="stylesheet" href="Scripts/jQuery/jquery.mobile-1.4.2.min.css" />
        <!--script src="http://code.jquery.com/jquery-1.10.2.min.js"></script-->
		<script type="text/javascript" src="Scripts/jQuery/jquery-1.8.2.min.js"></script>
        <!--script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script-->
		<script type="text/javascript" src="Scripts/jQuery/jquery.mobile-1.4.2.min.js"></script>
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
   $retval = mysql_query($sql,$conn);
if(!$retval) {
   $err=mysql_error();
   print $err;
   //echo "hii";
   exit();
    }

    else{
	
       //print "successfully logged into system.";
header('Location: http://localhost/cfg/add_weightage.php');
       //proceed to perform website’s functionality – e.g. present information to the user
    }
	}
mysql_close($conn);
?>
<?php

//$uid =  ($_POST['id']);
if(isset($_POST['pd_submit']))
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

$name1 =  ($_POST['pd_name']);
   $pwd2 =  ($_POST['pd_password']);
   //$pwd2 =  ($_POST['password2']);
   //echo $uid;
   print "hi";
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
   $sql1="SELECT * FROM pdlogin WHERE  PDUsername='$name1' and PDPassword='$pwd2' ";
   $retval1 = mysql_query($sql1);
   print $retval1;
if(!$retval1) {
   $err=mysql_error();
   print $err;?>
   <script>
   window.alert($err);   //echo "hii";
   //exit();
   </script>
   <?php }
	

    else{?>
	<script>
   window.alert("print");   //echo "hii";
   //exit();
   </script>
	
      <?php print "successfully logged into system.";
header('Location: http://localhost/cfg/algorithm.php');
       //proceed to perform website’s functionality – e.g. present information to the user
    }
mysql_close($conn);
}
?>


		<div data-role="page" id="pageone">
  <div data-role="header" data-theme="b">
  			 <a href="#pagetwo"  data-transition="slide" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-b ui-btn-icon-left ui-icon-arrow-l  ">
                    Program Director</a>
			<a href="#pagethree"  data-transition="slide" class="ui-btn-right ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-b ui-btn-icon-right ui-icon-arrow-r  ">
                    Partner</a>		
    <h1>HAPPY HEARTS FUNDS</h1>
  </div>

  <div data-role="main" class="ui-content">
    <img src="Photo-of-Students-in-front-of-school1-e1415390920918-1170x390.jpg" height="100%" width="100%" >
  </div>

  <div data-role="footer" data-theme="b">
    <h1>EVERY DONATION MAKES A DIFFERENCE. JOIN US TO HELP CHILDREN AROUND THE WORLD RIGHT NOW!</h1>
  </div>
</div>


<div data-role="page" id="pagetwo">
  <div data-role="header" data-theme="b">
  <a href="#pageone"  data-transition="slide" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-b ui-btn-icon-left ui-icon-arrow-l  ">
                    go back</a>
  <h1>Login for Program Director</h1>
  </div>
  
 <div data-role="main" class="ui-content">
  <form method="post" action="<?php $_PHP_SELF ?>" >
      <label for="fname">Email</label>
      <input type="text" name="pd_name" id="email" placeholder="Email...">
	  <label for="Passd">Password</label>
      <input type="password" name="pd_password" id="passw" placeholder="Password...">
    
                    
    
  
  <center>
  
   <input type="submit" data-inline="true" class="ui-btn-center" value="Submit" name="pd_submit">
   </center>
   </form>
   </div>
   
  		 	
    
  </div>
  
 <div data-role="page" id="pagethree">
  <div data-role="header" data-theme="b">
  <a href="#pageone"  data-transition="slide" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-b ui-btn-icon-left ui-icon-arrow-l  ">
                    go back</a>
  <h1>Login For Partners</h1>
  </div>
  
 <div data-role="main" class="ui-content">
  <form method="post" action="<?php $_PHP_SELF ?>" >
      <label for="fname">Email</label>
      <input type="text" name="p_name"  placeholder="Email...">
	  <label for="Passd">Password</label>
      <input type="password" name="p_password"  placeholder="Password...">
	  <center>
   <input type="submit"   data-inline="true"  value="Submit" name="submit">
   
   </center>
    </form>
                    
    
  </div>
  </div> 
  		 	
    
  

		
		
		
		</body>
		
</html>
