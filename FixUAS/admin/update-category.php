<?php $title = "Update Category"; ?>
<?php include('../layout/header.php') ?>
<?php if (isset($_GET['id'])) : ?>
    <?php
        $id = $_GET['id'];
        $sql = "select name_category from category where id = '$id'";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            $data = mysqli_fetch_assoc($res);
        }
        ?>
    <form action="" method="post">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Update Category</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="" class="form-label">Name Category</label>
                    <input type="text" name="name" id="" class="form-control" value="<?php echo $data['name_category'] ?>">
                </div>
            </div>
            <div class="card-footer">
                <a href="<?php echo SITEURL; ?>admin/manage-category.php" class="btn btn-secondary me-3">Kembali</a>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
        </div>
    </form>
<?php endif; ?>
<?php
if(isset($_POST['submit'])){
    $name = htmlspecialchars($_POST['name']);

    $updateCategorySql = "update category set name_category = '$name' where id = '$id'";
    $resultUpdateCategory = mysqli_query($conn, $updateCategorySql);
    if($resultUpdateCategory){
        header('location:' . SITEURL . 'admin/manage-category.php');
    }
}
?>
<?php include('../layout/footer.php') ?>