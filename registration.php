
<!doctype html>

<?php
$con = mysqli_connect("localhost","root","","dataform")
or die ("connection was not created"); //saved connection in variable

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<title> register </title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body class="index">
<div class="navbar-wrapper">
      <div class="container">

<nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
             <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="intro.php">NEW UK<span class="glyphicon glyphicon-grain" aria-hidden="true"></span>	 </a>
            </div>
        
		        
            </div>
          </div>
		         <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="review"><a href="review.php">Review</a></li>
                <li class="latest"><a href="latest.php">The Latest</a></li>
				<li class="videos"><a href="videos.php">Videos</a></li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="">Login</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Sign up</li>
                    <li><a href="registration.php">Registration page</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
		  </div>
        </nav>
		
<div class="reggy">
<form action="registration.php" class="signup" method="POST">
Enter Username:<input type="text" class="username" name="username" required="required"/></br>
Enter Password:<input type="password" class="password" name="password"  required="required"/></br>
Enter Email:<input type="email"	class="email" name="email" required="required"/></br>
<input type="submit" name="registration"	value="register" />
</div>
</form>


<?php
	if(isset($_POST['registration'])){
//isset is a function if something has happened in the page and sub is a button
	 $username = $_POST['username']; //calls out the method from our phone and shows out
	 $password = $_POST['password'];
	 $email = $_POST['email'];
	 
	$insert= "insert into users(name,password,email) values ('$username','$password','$email')"; //add to table name not database name
	
	$run = mysqli_query($con,$insert); // this first ask for the server connection and then the query where trying to run
	
	if($run)	{
		 echo"<h3> Registration successful, thanks </h3>";
	}
	 
	}
	?>

			<?php
				
				$select = "select * from users";
				$run = mysqli_query($con,$select);//selects user table and then the database
				while($row=mysqli_fetch_array($run)) {
				//loop to run through the data	
					$user_id = $row['id'];
					$user_name = $row['name'];
					$user_pass = $row['password'];
					$user_email = $row['email'];
						//asking ting to make array for the value
						//this
				
				
			
			?>
<!-- here we create a visible table showing the details from the from -->
		<tr>
			<td><?php  $user_id; ?></td>
			<td><?php  $user_name;?></td>
			<td><?php  $user_pass;?></td>
			<td><?php  $user_email;?></td>
			<td><a href="registration.php"></a></td>
			<td><a href="registration.php?delete=<?php  $user_id; ?>"></a></td>
				</tr>
				<?php	}
				?>	
			
	</table>
	<?php
	
		if(isset($_GET['delete'])){
			
			$delete_id = $_GET['delete'];	//get value and delete _id 
			$delete = "delete from users where id='$delete_id'";	//this will delete the specific id in the user table
			
			$run_delete = mysqli_query($con,$delete);	//created a query to do mutiple deletes
				if($run_delete){
					 "<script>window.open('registration.php','_self')</script>";
				}// this refreshes the window of your registration page thats what the self does 
		
		}
		?>
		
	
</body>
</html>
 

<!--$_SERVER["REQUESTED_METHOD"] == "POST" - Checks if the form 
has recieved a post method when the submit has been clicked

$_POST['] get name coming from post method gets input from our username and pasword 
$_POST['] gets name coming from Post method gets input from our username and password
mysql_real_escape_string(')- This ensures that your string dont escape from unnessary characters.-->

