<?php $title = "Add Content"; ?>
<?php include('../layout/header.php') ?>
<form action="" method="post">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Kontent</h3>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="" class="form-label">Course</label>
                <select name="course_id" id="" class="form-control">
                    <option value="">-- Pilih Course --</option>
                    <?php
                    $dataCourse = null;
                    $courseSql = "select id, name from course";
                    $resultCourse = mysqli_query($conn, $courseSql);
                    if ($resultCourse) {
                        $countCourse = mysqli_num_rows($resultCourse);
                        if ($countCourse > 0) {
                            $dataCourse = mysqli_fetch_all($resultCourse, MYSQLI_ASSOC);
                        }
                    }
                    ?>
                    <?php if ($dataCourse != null) : ?>
                        <?php foreach ($dataCourse as $row) : ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Nama Konten</label>
                <input type="text" name="name" id="" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Link Youtube</label>
                <input type="text" name="link" id="" class="form-control">
            </div>
        </div>
        <div class="card-footer">
            <a href="<?php echo SITEURL; ?>mentor/manage-content.php" class="btn btn-secondary me-3">Kembali</a>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
    </div>
</form>
<?php
if (isset($_POST['submit'])) {
    $course = htmlspecialchars($_POST['course_id']);
    // $mentor = htmlspecialchars($_POST['user_id']);
    $name = htmlspecialchars($_POST['name']);
    $link = htmlspecialchars($_POST['link']);
    $idUserLogin = $_SESSION['id'];

    $sql = "insert into content (name, course_id, user_id, link_youtube) values ('$name', '$course', '$idUserLogin', '$link')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        header('location:' . SITEURL . 'mentor/manage-content.php');
    }
}
?>
<?php include('../layout/footer.php') ?>