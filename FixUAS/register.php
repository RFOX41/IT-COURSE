<?php include('config/constants.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link rel="stylesheet" href="assets/styles/backend/plugins.bundle.css">
    <link rel="stylesheet" href="assets/styles/backend/style.bundle.css">
</head>
<body id="kt_body" class="bg-body">
		<div class="d-flex flex-column flex-root">
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(assets/images/14.png)">
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
					<a href="register.php" class="mb-12">
						<img alt="Logo" src="assets/images/logo-1.svg" class="h-40px" />
					</a>
					<div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
						<form class="form w-100" method="post" action="" id="kt_sign_up_form">
							<div class="mb-10 text-center">
								<h1 class="text-dark mb-3">Create an Account</h1>
								<div class="text-gray-400 fw-bold fs-4">Already have an account?
								<a href="login.php" class="link-primary fw-bolder">Sign in here</a></div>
							</div>
							<div class="row fv-row mb-7">
								<label class="form-label fw-bolder text-dark fs-6">Username</label>
								<input type="text" name="username" class="form-control form-control-lg form-control-solid" autocomplete="off">
							</div>
							<div class="fv-row mb-7">
								<label class="form-label fw-bolder text-dark fs-6">Email</label>
								<input class="form-control form-control-lg form-control-solid" type="email" placeholder="" name="email" autocomplete="off" />
							</div>
							<div class="fv-row mb-7">
								<label class="form-label fw-bolder text-dark fs-6">Phone Number</label>
								<input class="form-control form-control-lg form-control-solid" type="text" placeholder="" name="phone_number" autocomplete="off" />
							</div>
							<div class="mb-10 fv-row" data-kt-password-meter="true">
								<div class="mb-1">
									<label class="form-label fw-bolder text-dark fs-6">Password</label>
									<div class="position-relative mb-3">
										<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password" autocomplete="off" />
										<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
											<i class="bi bi-eye-slash fs-2"></i>
											<i class="bi bi-eye fs-2 d-none"></i>
										</span>
									</div>
								</div>
							</div>
							<div class="fv-row mb-5">
								<label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
								<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="confirm_password" autocomplete="off" />
							</div>
                            <div class="text-center">
								<button type="submit" name="submit" id="kt_sign_up_submit" class="btn btn-lg btn-primary">
									<span class="indicator-label">Submit</span>
									<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script src="assets/js/backend/plugins.bundle.js"></script>
		<script src="assets/js/backend/scripts.bundle.js"></script>
	</body>
</html>

<?php
if(isset($_POST['submit']))
{
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $phoneNumber = mysqli_real_escape_string($conn, $_POST['phone_number']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);

    $sqlCheckUsername = "select * from users where username = '$username'";
    $resCheckUsername = mysqli_query($conn, $sqlCheckUsername);
    $count = mysqli_num_rows($resCheckUsername);
    if($count == 1){
        echo "username sudah ada";
		exit;
    }else{
		if ($_POST['password'] != $_POST['confirm_password']) {
			echo "password harus sama. silahkan check kembali";
			exit;
		}
        $sql = "insert into users (username, password, email, phone_number, role) values ('$username', '$password','$email', '$phoneNumber', 'customers')";
        $res = mysqli_query($conn, $sql);
        if(mysqli_affected_rows($conn) > 0){
            header('location:' . SITEURL . 'login.php');
        }
    }
}
?>