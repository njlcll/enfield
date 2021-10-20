<?php require('includes/config.php');
print_r($_SESSION);
echo "hello";
//if logged in redirect to  page
if ($user->is_logged_in() ){ 
	header('Location: index.php'); 
	exit(); 
}
if(isset($_POST['submit'])){
	require_once("includes/registration.php");
}

//define page title
$title = 'Demo';

//include header template
//require_once('layout/header.php');
?>




	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  autocomplete="off">
				<h2>Please Sign Up</h2>
				<p>Already a member? <a href='login.php'>Login</a></p>
				<hr>
				<p><a href='./'>Back to home page</a></p>

				<?php
				//check for any errors
				if(isset($error)){
					foreach($error as $error){
						echo '<p class="bg-danger">'.$error.'</p>';
					}
				}

				// //if action is joined show sucess
				// if(isset($_GET['action']) && $_GET['action'] == 'joined'){
				// 	echo "<h2 class='bg-success'>Registration successful, please check your email to activate your account.</h2>";
				// }
				?>

				<div class="form-group">
					<input type="text" name="name" id="name" class="form-control input-lg" placeholder="First Name" 
					value="<?php if(isset($error)){ echo htmlspecialchars($_POST['name'], ENT_QUOTES); } ?>" tabindex="1">
				</div>
				<div class="form-group">
					<input type="text" name="surname" id="surname" class="form-control input-lg" placeholder="Last Name" 
					value="<?php if(isset($error)){ echo htmlspecialchars($_POST['surname'], ENT_QUOTES); } ?>" tabindex="1">
				</div>
				<div class="form-group">
					<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address"
					 value="<?php if(isset($error)){ echo htmlspecialchars($_POST['email'], ENT_QUOTES); } ?>" tabindex="2">
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="3">
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control input-lg" placeholder="Confirm Password" tabindex="4">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="5"></div>
				</div>
			</form>
		</div>
	</div>

</div>

<?php

//require('layout/footer.php');
?>