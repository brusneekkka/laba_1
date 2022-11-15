<!DOCTYPE html>
<html>
<head>
	<!-- <meta charset="UTF-8"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
<?php setcookie("username", ""); ?>
<div class="container">
	<?php if ($_COOKIE['message']){ ?>
	<div class="alert alert-danger" role="alert">
		<?php echo($_COOKIE['message']); ?>
	</div> <?php } ?>
  <h2>Лабораторная работа #1</h2>
  <form class="form-horizontal" method="GET" action = "signup_processing.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="user">Login:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="user" placeholder="Enter username">
      </div>
    </div>
    <div class="form-group">
      	<label class="control-label col-sm-2" for="pass">Password:</label>
      	<div class="col-sm-10">          
        	<input type="password" class="form-control" name="pass" placeholder="Enter password">
      	</div>
    </div>
    <div class="form-group">        
      	<div class="col-sm-offset-2 col-sm-10">
        	<button type="submit" class="btn btn-default">Sign in!</button>
      	</div>
    </div>

  	</form>
  	<a class="col-sm-offset-2 col-sm-10" href = "login.php">
		Log In!
	</a>
</div>

<!--
<body>
	<table>
	<form method = "GET" action = "signup_processing.php">
		<tr>
		<td>
		<label>
			Login
		</label>
		</td>
		<td>
		<input type = "text" name = "user"/>
	    </tr>
		</td>
	    <tr>
	    <td>
	    <label>
			Password
		</label>
		</td>
		<td>
		<input type ="password" name = "pass"/>
		</td>
		</tr>
		<tr>
		<td>
		<input type = "submit" value = "Sign Up!"/>
		</td>
		</tr>
	</form>
	<tr>
	<td>
	<a href = "login.php">
		Log In!
	</a>
	</td>
	</tr>
	</table>
</body>
-->	
</html>