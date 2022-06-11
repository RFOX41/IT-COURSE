<?php include('config/constants.php') ?>

<?php

if (isset($_SESSION['user'])) {
    if ($_SESSION['role'] == 'customers') {
        header('location:' . SITEURL . 'user/');
    } elseif ($_SESSION['role'] == 'mentors') {
        header('location:' . SITEURL . 'mentor/');
    } else {
        header('location:' . SITEURL . 'admin/');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link rel="stylesheet" href="assets/styles/backend/plugins.bundle.css">
    <link rel="stylesheet" href="assets/styles/backend/style.bundle.css">
</head>

<body id="kt_body" class="bg-body">
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(assets/images/14.png)">
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <a href="login.php" class="mb-12">
                    <img alt="Logo" src="assets/images/logo-1.svg" class="h-40px" />
                </a>
                <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <form class="form w-100" id="kt_sign_in_form" action="" method="post">
                        <div class="text-center mb-10">
                            <h1 class="text-dark mb-3">Sign In to IT Course</h1>
                            <div class="text-gray-400 fw-bold fs-4">New Here?
                                <a href="register.php" class="link-primary fw-bolder">Create an Account</a></div>

                        </div>
                        <div class="fv-row mb-10">
                            <label class="form-label fs-6 fw-bolder text-dark">Username</label>
                            <input class="form-control form-control-lg form-control-solid" type="text" name="username" autocomplete="off" />
                        </div>
                        <div class="fv-row mb-10">
                            <div class="d-flex flex-stack mb-2">
                                <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                            </div>
                            <input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                                <span class="indicator-label">Submit</span>
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
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "select id, role from users where username = '$username' and password = '$password'";

    $res = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($res);

    $result = mysqli_fetch_array($res);

    if ($count == 1) {
        $_SESSION['user'] = $username;
        $_SESSION['id'] = $result['id'];
        $_SESSION['role'] = $result['role'];

        if ($result['role'] == 'customers') {
            header('location:' . SITEURL . 'user/');
        } elseif ($result['role'] == 'mentor') {
            header('location:' . SITEURL . 'mentor/');
        } else {
            header('location:' . SITEURL . 'admin/');
        }
    } else {
        header('location:' . SITEURL . 'login.php');
    }
}
?>