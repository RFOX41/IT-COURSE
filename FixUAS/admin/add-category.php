<?php $title = "Add Category"; ?>
<?php include('../layout/header.php') ?>
<form action="" method="post">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Category</h3>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="" class="form-label">Nama Category</label>
                <input type="text" name="name" id="" class="form-control">
            </div>
        </div>
        <div class="card-footer">
            <a href="<?php echo SITEURL; ?>admin/manage-category.php" class="btn btn-secondary me-3">Kembali</a>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
    </div>
</form>
<?php
if(isset($_POST['submit'])){
    $name = htmlspecialchars($_POST['name']);

    $sql = "insert into category (name_category) values ('$name')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        header('location:' . SITEURL . 'admin/manage-category.php');
    }
}
?>
<?php include('../layout/footer.php') ?>
