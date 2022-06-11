<?php $title = "Add Mentor"; ?>
<?php include('../layout/header.php') ?>
<form action="" method="POST">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Tambah Mentor</div>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="" class="form-label">Username</label>
                <input type="text" name="username" id="" class="form-control">
            </div>
            <div class="mb-10 fv-row" data-kt-password-meter="true">
                <div class="mb-1">
                    <label class="form-label">Password</label>
                    <div class="position-relative mb-3">
                        <input class="form-control" type="password" placeholder="" name="password" autocomplete="off" />
                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                            <i class="bi bi-eye-slash fs-2"></i>
                            <i class="bi bi-eye fs-2 d-none"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" name="email" id="" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Phone Number</label>
                <input type="text" name="phone_number" id="" class="form-control">
            </div>
        </div>
        <div class="card-footer">
            <a href="<?php echo SITEURL; ?>admin/manage-mentor.php" class="btn btn-secondary me-3">Kembali</a>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
    </div>
</form>
<?php
if(isset($_POST['submit'])){
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $email = htmlspecialchars($_POST['email']);
    $phoneNumber = htmlspecialchars($_POST['phone_number']);

    $checkUsernameSql = "select username from users where username = '$username'";
    $resultCheckUsername = mysqli_query($conn, $checkUsernameSql);
    if($resultCheckUsername) {
        $count = mysqli_num_rows($resultCheckUsername);
        if ($count > 0) {
            echo "username sudah ada";
            exit;
        }
    }

    $sql = "insert into users (username, password, email, phone_number, role) values ('$username', '$password', '$email', '$phoneNumber', 'mentor')";
    $res = mysqli_query($conn, $sql);
    if($res) {
        header('location:' . SITEURL . 'admin/manage-mentor.php');
    }


}
?>
<?php include('../layout/footer.php') ?>