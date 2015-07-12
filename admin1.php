<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Login</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<style type="text/css">

    .bs-example{
    	margin-right: 200px;
		margin-bottom: 500px;
		margin-top: 2%;
		margin-left: 450px;
    }
	.panel
	{
	height: 350px;
	width: 300px;
	}
	canvas
	{
	margin-top: 5%;
	margin-left: 15%;
	
	text-align:center;
	}
	
</style>
</head>
<body>

<canvas id="myCanvas" width="950" height="100" style="border:4px solid WHITE align:middle ; " class="center">
Your browser does not support the HTML5 canvas tag.</canvas>



<div class="bs-example">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">ADMIN LOGIN</h3>
        </div>
        <div class="panel-body"><form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 
 NAME: <input type="TEXT" name="pd_name" id="name"><br><br>
 PASSWORD 1: <input type="password" name="pd_password" id="password1"><br><br>
 <!--PASSWORD 2: <input type="password" name="password2" id="password2"><br><br>-->
 <input name="pd_submit" id="submit" 
 type="submit">
 <p><a href="change.php">Change password</a></p>
 </form></div>
    </div>
	</div>

 </body>
 </html>