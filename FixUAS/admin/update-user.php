<?php $title = "Update User"; ?>
<?php include('../layout/header.php') ?>
<?php if (isset($_GET['id'])) : ?>
    <?php
        $id = $_GET['id'];
        $sql = "select email, phone_number, role, password, fullname from users where id = '$id' and role = 'customers'";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            $count = mysqli_num_rows($res);
            if ($count <= 0) {
                echo "data yang dicari tidak ada";
                exit;
            }
            $data = mysqli_fetch_array($res);
        }
        ?>
    <form action="" method="POST">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Update User</h3>
            </div>
            <div class="card-body">
                <div class="mb-10 fv-row" data-kt-password-meter="true">
                    <div class="mb-1">
                        <label class="form-label">Change Password</label>
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
                    <label for="" class="form-label">Fullname</label>
                    <input type="text" name="fullname" class="form-control" value="<?php echo $data['fullname'] ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $data['email']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="text" name="phone_number" class="form-control" value="<?php echo $data['phone_number'] ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Role</label>
                    <select name="role" class="form-control">
                        <option value="customers" <?php echo $data['role'] == 'customers' ? 'selected' : '' ?>>User</option>
                        <option value="mentor" <?php echo $data['role'] == 'mentor' ? 'selected' : '' ?>>Mentor</option>
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <a href="<?php echo SITEURL; ?>admin/manage-user.php" class="btn btn-secondary me-3">Kembali</a>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
        </div>
    </form>
<?php endif; ?>
<?php
if(isset($_POST['submit'])){
    $password = empty($_POST['password']) ? $data['password'] : htmlspecialchars($_POST['password']);
    $email = empty($_POST['email']) ? $data['email'] : htmlspecialchars($_POST['email']);
    $phoneNumber = empty($_POST['phone_number']) ? $data['phone_number'] : htmlspecialchars($_POST['phone_number']);
    $fullname = empty($_POST['fullname']) ? $data['fullname'] : htmlspecialchars($_POST['fullname']);
    $role = empty($_POST['role']) ? $data['role'] : htmlspecialchars($_POST['role']);

    $sql = "update users set password = '$password', email = '$email', phone_number = '$phoneNumber', fullname = '$fullname', role = '$role' where id = '$id' and role = 'customers'";
    $res = mysqli_query($conn, $sql);
    if($res) {
        header('location:' . SITEURL . 'admin/manage-user.php');
    }
}
?>
<?php include('../layout/footer.php') ?>