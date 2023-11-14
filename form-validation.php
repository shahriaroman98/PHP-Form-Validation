<?php 

/*
$name = "";
$errorname = "";

$email = "";
$erroremail = "";

$phone = "";
$errorphone = "";

$address = "";
$erroraddress = "";

$gender = "";
$errorgender = "";
*/



//or shortcut way
$name = $email = $phone = $address = $gender = "";

$errorname = $erroremail = $errorphone = $erroraddress = $errorgender = "";



	if ($_SERVER["REQUEST_METHOD"] == "POST") {


		if (empty($_POST['name'])) {
			$errorname = "<span class='text-danger'>Name is required</span>";
		}
		else{
			$name = $_POST['name'];
		}


		if (empty($_POST['email'])) {
			$erroremail = "<span class='text-danger'>Email is required</span>";
		}
		elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$erroremail = "<span class='text-danger'>Invalid email format</span>";
		}
		else{
			$email = $_POST['email'];
		}


		if (empty($_POST['phone'])) {
			$errorphone = "<span class='text-danger'>Phone number is required</span>";
		}
		else{
			$phone = $_POST['phone'];
		}


		if (empty($_POST['address'])) {
			$erroraddress = "<span class='text-danger'>Address is required</span>";
		}
		else{
			$address = $_POST['address'];
		}


		if (empty($_POST['gender'])) {
			$errorgender = "<span class='text-danger'>Gender is required</span>";
		}
		else{
			$gender = $_POST['gender'];
		}


				    echo "Name: ".$name."<br>";
					echo "Email: ".$email."<br>";
					echo "Phone: ".$phone."<br>";
					echo "Address: ".$address."<br>";
					echo "Gender: ".$gender."<br>";
	}


 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Form Validation</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
	<div class="row justify-content-center mt-5">
		<div class="col-lg-6">
			<div class="card">
				<div class="card-header bg-success">
					<h4 class="card-title">PHP Form Validation</h4>
				</div>
				<div class="card-body">
					<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
						<div class="mb-3">
							<input type="text" name="name" class="form-control" placeholder="Enter your name">
							<?php echo $errorname ?>
						</div>

						<div class="mb-3">
							<input type="text" name="email" class="form-control" placeholder="Enter your email">
							<?php echo $erroremail ?>
						</div>

						<div class="mb-3">
							<input type="number" name="phone" class="form-control" placeholder="Enter your number">
							<?php echo $errorphone ?>
						</div>

						<div class="mb-3">
							<textarea name="address" class="form-control" placeholder="Enter your address"></textarea>
							<?php echo $erroraddress ?>
						</div>

						<div class="mb-3">
							<div class="form-check form-check-inline">
								<input type="radio" name="gender" class="form-check-input" value="Male">
								<label>Male</label>
							</div>

							<div class="form-check form-check-inline">
								<input type="radio" name="gender" class="form-check-input" value="Female">
								<label>Female</label>
							</div>
							<?php echo $errorgender ?>

						</div>

						<div class="mb-3 d-grid">
							<input type="submit" name="submit" class="btn btn-outline-success" value="Save">
						</div>

					</form>
				</div>
			</div>

			
			<!-- or here-> <?php 

				    echo "Name: ".$name."<br>";
					echo "Email: ".$email."<br>";
					echo "Phone: ".$phone."<br>";
					echo "Address: ".$address."<br>";
					echo "Gender: ".$gender."<br>";



			 ?> -->


		</div>
	</div>
</div>

</body>
</html>