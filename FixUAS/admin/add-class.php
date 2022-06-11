<?php $title = "Add Class"; ?>
<?php include('../layout/header.php') ?>
<form action="" method="post">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Kelas</h3>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="" class="form-label">Kategori</label>
                <select name="category_id" id="" class="form-control">
                    <option value="">-- Pilih Kategori --</option>
                    <?php
                    $sql = "select id, name_category from category";
                    $res = mysqli_query($conn, $sql);
                    if ($res) {
                        $data = mysqli_fetch_all($res, MYSQLI_ASSOC);
                    }
                    ?>
                    <?php foreach ($data as $row) : ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['name_category'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Nama Kelas</label>
                <input type="text" name="name" id="" class="form-control">
            </div>
        </div>
        <div class="card-footer">
            <a href="<?php echo SITEURL; ?>admin/manage-class.php" class="btn btn-secondary me-3">Kembali</a>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
    </div>
</form>
<?php
if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $categoryId = htmlspecialchars($_POST['category_id']);

    if (empty($name)) {
        echo "Nama Kelas wajib diisi";
        exit;
    }

    $insertSql = "insert into class (name, categories_id) values ('$name', '$categoryId')";
    $resultInsert = mysqli_query($conn, $insertSql);
    if ($resultInsert) {
        header('location:' . SITEURL . 'admin/manage-class.php');
    }
}
?>
<?php include('../layout/footer.php') ?>