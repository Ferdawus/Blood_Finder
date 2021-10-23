<?php
include('../db.php');
if (isset($_POST['submit'])) {
	if ($_POST['submit'] == 'Create a new user') {
		$Name  			 = $_POST['Name'];
		$Email  		 = $_POST['Email'];
		$Phone 			 = $_POST['Phone'];
		$Password 		 = $_POST['Password'];
		$ConfirmPassword = $_POST['ConfirmPassword'];
		$Status    		 = 0;
		$Type            = 'User';

		$Query = "SELECT * FROM users WHERE Email = '".$Email."'";
		$Count = mysqli_num_rows(mysqli_query($Connection,$Query));

		if ($Count != 0) 
			echo "This Email address already exists";
		else{
			if ($Password != $ConfirmPassword) 
				echo "Sorry ! Password does not match ";
			else{
				$Query = "INSERT INTO users (Name,Email,Phone,Password,Status,Type) VALUES('$Name','$Email','$Phone','$Password',$Status,'$Type')";
				$Result = mysqli_query($Connection,$Query);

				if (!$Result)
					echo "Sorry ! something went wrong";
				else
					echo "Congrasulation ! New user created successfully";
			}
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Register Page</title>
		<!-- bootstrap css link -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<!-- custom css link-->
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
		<!-- banner section -->
		<section class="banner">
			<div class="container">
				<div class="row">
					<!--1st banner  -->
					<div class="col-md-8 m-auto">
						<img src="../img/images__1_-removebg-preview.png" alt=""width="500px" height="300px">
					</div>
					<!-- 2nd banner -->
					<div class="col-md-4">
						<div class="row form">
							<div class="col-md-12">
								<!-- from heading -->
								<h3 class="text-center p-3">Register Page</h3>
								<!----Form strat------->
								<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
									<!-- single item -->
									<div class="form-group">
										<input type="text" name="Name" class="form-control" placeholder="Name">
									</div>
									<!-- single item -->
									<div class="form-group ">
										<input type="email" name="Email" class="form-control" placeholder="Email">
									</div>
									<!-- single item -->
									<div class="form-group">
										<input type="text" name="Phone" class="form-control" placeholder="Phone">
									</div>
									<!-- single item -->
									<div class="form-group ">
										<input type="password" name="Password" class="form-control"  placeholder="Password">
									</div>
									<!-- single item -->
									<div class="form-group ">
										<input type="password" name="ConfirmPassword" class="form-control"  placeholder="ConfirmPassword">
									</div>
									<!-- button -->
									<input type="submit" name="submit" class="btn btn-block btn-primary" value="Create a new user">
									<span>Have already an account?<a href="login.php">Login here</a></span><br>
									<span>Back to <a href="index.php">Home</a></span>
								</form>
								<!---Form section strat--->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- banner section -->
		<!-- footer strat -->
		<section class="Footer">
			<div class="col-md-12">
				<hr>
				<div class="text-muted text-center pt-2">Copyright &copy; Your Website M.Ferdawus Sk -<?php
				echo date('d-m-Y');?></div>
				
			</div>
		</section>
		<!-- footer end-->
		<!-- Optional JavaScript; choose one of the two! -->
		<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
		<!-- Option 2: Separate Popper and Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
	</body>
</html>