<?php 
session_start();
include('../db.php');

if (isset($_POST['submit'])) {
	if ($_POST['submit'] == 'Login') {
		$Email           = $_POST['Email'];
		$Password        = $_POST['Password'];

		$Query = "SELECT * FROM users WHERE Email = '$Email' AND Password = '$Password'";
		$Count = mysqli_num_rows(mysqli_query($Connection,$Query));

		if ($Count = 0) {
			header('location:login.php');
		}
		else{
			$_SESSION['Status'] = 1;
			echo $_SESSION['Email']  = $Email;
			header('location:../users/index.php');

			
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login Page</title>
		<!-- bootstrap css link -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<!-- custom css link -->
		<link rel="stylesheet" href="../css/custom.css">
	</head>
	<body id="bg">
		<!-- header strat -->
		<section class="header">
			<div class="text-center">
				<h2>Blood Finder</h2>
				<hr>
			</div>
		</section>
		<!-- header end -->
		<!-- header end -->
		<!-- banner section -->
		<section class="banner">
			<div class="container">
				<div class="row">
					<!-- desing section -->
					<div class="col-md-6">
						<div class="row">
						  <img src="../img/images-removebg-preview.png" alt="" height="460px" width="700px">
						</div>
					</div>
					<!-- form section -->
					<div class="col-md-6 bg">
						<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
							<div class="col-md-8  m-auto form-background">
								<h2 class="text-center p-0 m-0">Login Page</h2>
								<!--single item  -->
								<div class="form-group">
									<label for="Email" class="col-form-label">Email:</label>
									<div class="">
										<input class="form-control" type="email" name="Email">
									</div>
								</div>
								<!--single item  -->
								<div class="form-group ">
									<label for="Password" class=" col-form-label">Password:</label>
									<div class="">
										<input class="form-control" type="password" name="Password">
									</div>
								</div>
								<!--button link  -->
								<input type="submit" name="submit" value="Login" class="btn btn-success btn-block">
								<span>Don't have an account?<a href="register.php">Register Now</a></span>
								<span>Please <a href="">Forget Your Password?</a></span><br>
								<span>Back to <a href="../index.php">Home</a></span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- banner section end -->
		<!-- footer strat -->
		<section class="Footer">
			<div class="col-md-12">
				<hr>
				<div class="text-muted text-center pt-2">Copyright &copy; Your Website M.Ferdawus Sk -<?php
    			echo date('d-m-Y');?></div>
			</div>
		</section>
		<!-- footer section end -->
		<!-- javasctipt link strat-->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
		<!-- javascript link end-->
	</body>
</html>