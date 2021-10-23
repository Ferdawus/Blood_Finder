<?php 
include('../db.php');
if (isset($_REQUEST['Action'])) {
	if ($_REQUEST['Action'] == 'Edit') {
		$Id = $_REQUEST['Id'];

		$Query = "SELECT * FROM donors WHERE Id = '$Id'";

		$Result = mysqli_query($Connection,$Query);
		$Data   = mysqli_fetch_assoc($Result);

		$Name     	= $Data['Name'];
		$Email   	= $Data['Email'];
		$Phone   	= $Data['Phone'];
		$Location 	= $Data['Location'];
		$BloodGroup = $Data['BloodGroup'];
		$Status     = $Data['Status'];
	}
}

if (isset($_POST['submit'])) {
	if ($_POST['submit'] == 'Update Information') {
		$Name = $_POST['Name'];
		$Email = $_POST['Email'];
		$Phone = $_POST['Phone'];
		$Location = $_POST['Location'];
		$BloodGroup = $_POST['BloodGroup'];
		// $Status     = $_POST['Status'];

		echo $Query = "UPDATE donors SET Name ='$Name', Email ='$Email', Phone = '$Phone', Location = '$Location', BloodGroup = '$BloodGroup'";
		$Result = mysqli_query($Connection,$Query);

		if (!$Result) {
			echo "Update Field";
		}
		else
			header('location:list.php');

	}
}
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Update Page</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/custom.css">
	</head>
	<body>
		<div class="container">
			<!-- form section -->
			<form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data" class="form-custom">
				<div class="row">
					<div class="col-md-8 m-auto">
						<!-- heading start -->
						<h3 class="text-center p-4">Update Information</h3>
						<!-- heading end -->
						<!-- single item -->
						<input type="hidden" name="Id" value="<?php echo $id?>">
						<div class="form-row form-group">
							<label for="Name" class="col-form-label col-md-2">Name:</label>
							<div class="col-md-4">
								<input type="text" name="Name" class="form-control" placeholder="Name" value="<?php echo $Name?>">
							</div>
							<label for="Email" class="col-form-label col-md-2"> Email:</label>
							<div class="col-md-4">
								<input type="email" name="Email"class="form-control" placeholder="Email" value="<?php echo $Email?>">
							</div>
						</div>
						<!-- single item -->
						<div class="form-row form-group">
							<label for="Phone" class="col-form-label col-md-2">Phone:</label>
							<div class="col-md-10">
								<input type="text" name="Phone" class="form-control" placeholder="Phone" value="<?php echo $Phone?>">
							</div>
							
						</div>
						<!-- single item -->
						<div class="form-row form-group">
							<label for="Location" class="col-form-label col-md-2">Location:</label>
							<div class="col-md-4">
								<select class="form-control" type="text" name="Location" value="<?php echo $Location?>">
									<option value="">Choose option......</option>
									<option value="চট্টগ্রাম জেলা">চট্টগ্রাম জেলা</option>
									<option value="ঢাকা জেলা">ঢাকা জেলা</option>
									<option value="রাজশাহী জেলা">রাজশাহী জেলা</option>
									<option value="সিলেট জেলা">সিলেট জেলা</option>
									<option value="ময়মনসিংহ জেলা">ময়মনসিংহ জেলা</option>
									<option value="বরিশাল জেলা">বরিশাল জেলা</option>
									<option value="রংপুর জেলা">রংপুর জেলা</option>
									<option value="খুলনা জেলা">খুলনা জেলা</option>
									<option value="কুমিল্লা জেলা">কুমিল্লা জেলা</option>
									<option value="ফেনী জেলা">ফেনী জেলা</option>
									<option value="ব্রাহ্মণবাড়িয়া জেলা">ব্রাহ্মণবাড়িয়া জেলা</option>
									<option value=" রাঙ্গামাটি জেলা"> রাঙ্গামাটি জেলা</option>
									<option value="নোয়াখালী জেলা">নোয়াখালী জেলা</option>
									<option value=" চাঁদপুর জেলা"> চাঁদপুর জেলা</option>
									<option value="লক্ষ্মীপুর, জেলা">লক্ষ্মীপুর, জেলা</option>
									<option value=" নরসিংদী জেলা"> নরসিংদী জেলা</option>
									<option value="মুন্সীগঞ্জ জেলা">মুন্সীগঞ্জ জেলা</option>
									<option value="নারায়ণগঞ্জ  জেলা">নারায়ণগঞ্জ  জেলা</option>
									<option value="মানিকগঞ্জ  জেলা">মানিকগঞ্জ  জেলা</option>
									<option value="গাজীপুর জেলা">গাজীপুর জেলা</option>
									<option value="কিশোরগঞ্জ জেলা">কিশোরগঞ্জ জেলা</option>
									<option value="জামালপুর জেলা">জামালপুর জেলা</option>
									<option value="শেরপুর জেলা">শেরপুর জেলা</option>
									<option value="নেত্রকোণা জেলা">নেত্রকোণা জেলা</option>
									<option value="টাঙ্গাইল জেলা">টাঙ্গাইল জেলা</option>
									<option value="ফরিদপুর জেলা">ফরিদপুর জেলা</option>
									<option value="গোপালগঞ্জ জেলা">গোপালগঞ্জ জেলা</option>
									<option value="শরীয়তপুর জেলা">শরীয়তপুর জেলা</option>
									<option value="মাদারীপুর জেলা">মাদারীপুর জেলা</option>
									<option value="রাজবাড়ি জেলা">রাজবাড়ি জেলা</option>
									<option value="কক্সবাজার জেলা">কক্সবাজার জেলা</option>
									<option value="বান্দবান জেলা">বান্দবান জেলা</option>
									<option value="রাঙামাটি জেলা">রাঙামাটি জেলা</option>
									<option value="খাগড়াছড়ি জেলা">খাগড়াছড়ি জেলা</option>
									<option value="চাঁদপুর জেলা">চাঁদপুর জেলা</option>
									<option value="নাটোর জেলা">নাটোর জেলা</option>
									<option value="নওগাঁ জেলা">নওগাঁ জেলা</option>
									<option value="নওয়াবগঞ্জ জেলা">নওয়াবগঞ্জ জেলা</option>
									<option value="বগুড়া জেলা">বগুড়া জেলা</option>
									<option value="পাবনা জেলা">পাবনা জেলা</option>
									<option value="সিরাজগঞ্জ জেলা">সিরাজগঞ্জ জেলা</option>
									<option value="জয়পুরহাট জেলা">জয়পুরহাট জেলা</option>
									<option value="লালমনিরহাট জেলা">লালমনিরহাট জেলা</option>

									<option value="কুড়িগ্রাম জেলা">কুড়িগ্রাম জেলা</option>
									<option value="নীলফামারী জেলা">নীলফামারী জেলা</option>
									<option value="পঞ্চগড় জেলা">পঞ্চগড় জেলা</option>
									<option value="দিনাজপুর জেলা">দিনাজপুর জেলা</option>
									<option value="ঠাকুরগাঁও জেলা">ঠাকুরগাঁও জেলা</option><option value="সাতক্ষীরা জেলা">সাতক্ষীরা জেলা</option>
									<option value="বাগেরহাট জেলা">বাগেরহাট জেলা</option>
									<option value="যশোর জেলা">যশোর জেলা</option>
									<option value="ঝিনাইদহ জেলা">ঝিনাইদহ জেলা</option>
									<option value="নড়াইল জেলা">নড়াইল জেলা</option>
									<option value="মাগুরা জেলা">মাগুরা জেলা</option>
									<option value="কুষ্টিয়া জেলা">কুষ্টিয়া জেলা</option>
									<option value="চূয়াডাঙ্গা  জেলা">চূয়াডাঙ্গা  জেলা</option>
									<option value="মেহেরপুর জেলা">মেহেরপুর জেলা</option>
									<option value="ঝালকাঠি জেলা">ঝালকাঠি জেলা</option>
									<option value="পিরোজপুর জেলা">পিরোজপুর জেলা</option>
									<option value="পটুয়াখালী জেলা">পটুয়াখালী জেলা</option>
									<option value="বরগুনা জেলা">বরগুনা জেলা</option>
									<option value="ভোলা জেলা">ভোলা জেলা</option>
									<option value="হবিগঞ্জ জেলা">হবিগঞ্জ জেলা</option>
									<option value="মৌলভীবাজার জেলা">মৌলভীবাজার জেলা</option>
								</select>
							</div>
							<label for="BloodGroup" class="col-form-label col-md-2"> BloodGroup:</label>
							<div class="col-md-4">
								<select class="form-control" type="text" name="BloodGroup" value="<?php echo $BloodGroup?>">
									<option value="">Choose option......</option>
									<option value="A+">A+</option>
									<option value="B+">B+</option>
									<option value="AB+">AB+</option>
									<option value="A-">A-</option>
									<option value="B-">B-</option>
									<option value="AB-">AB-</option>
								</select>
							</div>
						</div>
						<!-- single item -->
						<div class="form-row form-group">
							<label for="LastDonated" class="col-form-label col-md-2">LastDonated: </label>
							<div class="col-md-4">
							  <input type="date" name="LastDonated"class="form-control"value="<?php echo $LastDonated?>">
							</div>
							<label for="Status" class="col-form-label col-md-2"> Status:</label>
							<div class="col-md-4">
								<select class="form-control" type="text" name="Status" value="<?php echo $Status?>">
									<option value="">Choose option......</option>
									<option value="Male">Yes</option>
									<option value="Female">No</option>
								
								</select>
							</div>
						</div>
						<input type="submit" name="submit" value="Update Information" class="btn-custom offset-5">
					</div>
				</div>
				
			</form>
		</div>

		
		<!--  -->
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