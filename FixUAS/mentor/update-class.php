<?php $title = "Update Class"; ?>
<?php include('../layout/header.php') ?>
<?php if (isset($_GET['id'])) : ?>
    <?php
        $id = $_GET['id'];
        $getAllCategorySql = "select id, name_category from category";
        $resultGetAllCategory = mysqli_query($conn, $getAllCategorySql);
        if ($resultGetAllCategory) {
            $dataCategory = mysqli_fetch_all($resultGetAllCategory, MYSQLI_ASSOC);
        }

        $sql = "select name, categories_id from class where id = '$id'";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            $data = mysqli_fetch_assoc($res);
        }
        ?>
    <form action="" method="post">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Update Kelas</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="" class="form-label">Kategori</label>
                    <select name="category_id" id="" class="form-control">
                        <option value="">-- Pilih Kategori --</option>
                        <?php foreach ($dataCategory as $row) : ?>
                            <option value="<?php echo $row['id'] ?>" <?php echo $row['id'] == $data['categories_id'] ? 'selected' : '' ?>><?php echo $row['name_category'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Nama Kelas</label>
                    <input type="text" name="name" id="" class="form-control" value="<?php echo $data['name']; ?>">
                </div>
            </div>
            <div class="card-footer">
                <a href="<?php echo SITEURL; ?>admin/manage-class.php" class="btn btn-secondary me-3">Kembali</a>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
        </div>
    </form>
<?php endif; ?>
<?php
if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $categoryId = htmlspecialchars($_POST['category_id']);

    $sql = "update class set categories_id = '$categoryId', name = '$name' where id = '$id'";
    $res = mysqli_query($conn, $sql);
    if($res){
        header('location:' . SITEURL . 'mentor/manage-class.php');
    }
}
?>
<?php include('../layout/footer.php') ?>