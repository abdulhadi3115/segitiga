<?php include 'connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kalkulator Segitiga</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main2.css">
<!--===============================================================================================-->

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">
				<div class="longin100-pic js-tilt" data-tilt>
					<img src="">
				</div>

				<form class="login100-form validate-form" action="index.php" method="post">
					<span class="login100-form-title p-b-45">
						PERHITUNGAN SEGITIGA
					</span>
					
					<div class="wrap-input100 rs1 validate-input" data-validate = "Masukkan Angka">
						<input class="input100" type="text" name="alas">
						<span class="label-input100">ALAS</span>
					</div>
					
					
					<div class="wrap-input100 rs2 validate-input" data-validate="Masukkan Angka">
						<input class="input100" type="text" name="tinggi">
						<span class="label-input100">TINGGI</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="submit" value="Hitung">
							HITUNG
						</button>
					</div>
					
					<div class="text-center w-full p-t-20">
						<a href="#" class="txt1">
						
						</a>
					</div>
				</form>

				<form class="login100-form validate-form">
					<div class="container-login100-form-btn">
							<?php
							if(isset($_POST['submit'])){
								$alas   = $_POST['alas'];
								$tinggi = $_POST['tinggi'];
								$luas_segitiga = 1/2 * $alas * $tinggi; // Mengitung luas segitiga

								$tanggal_hari_ini = date('Y-m-d',time());
								$sql = "INSERT INTO segitiga (id,alas, tinggi, luas,created_date)
								VALUES (null,'$alas', '$tinggi', '$luas_segitiga','$tanggal_hari_ini')";

								if ($conn->query($sql) === TRUE) {
								echo "New record created successfully";
								} else {
								echo "Error: " . $sql . "<br>" . $conn->error;
								}

							}
							?>
						<input class="login100-form-btn" type="text" value='<?php echo "$luas_segitiga";?>' disabled align="center">
						
					</div>
					
				</form>



			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>