<?php $title = "Update Content"; ?>
<?php include('../layout/header.php') ?>
<?php if (isset($_GET['id'])) : ?>
    <?php
        $id = $_GET['id'];
        $sql = "select id, name, course_id, user_id, link_youtube from content where id = '$id'";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            $data = mysqli_fetch_assoc($res);
        }
        ?>
    <form action="" method="post">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Update Kontent</h3>
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
                                <option value="<?php echo $row['id']; ?>" <?php echo $row['id'] == $data['course_id'] ? 'selected' : '' ?>><?php echo $row['name']; ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Nama Konten</label>
                    <input type="text" name="name" id="" class="form-control" value="<?php echo $data['name'] ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Link Youtube</label>
                    <input type="text" name="link" id="" class="form-control" value="<?php echo $data['link_youtube'] ?>">
                </div>
            </div>
            <div class="card-footer">
                <a href="<?php echo SITEURL; ?>mentor/manage-content.php" class="btn btn-secondary me-3">Kembali</a>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
        </div>
    </form>
<?php endif; ?>
<?php
if (isset($_POST['submit'])) {
    $course = htmlspecialchars($_POST['course_id']);
    // $mentor = htmlspecialchars($_POST['user_id']);
    $name = htmlspecialchars($_POST['name']);
    $link = htmlspecialchars($_POST['link']);
    $idUserLogin = $_SESSION['id'];

    $updateSql = "update content set name = '$name', course_id = '$course', user_id = '$idUserLogin', link_youtube = '$link' where id = '$id'";
    $resultUpdate = mysqli_query($conn, $updateSql);
    if($resultUpdate){
        header('location:' . SITEURL . 'mentor/manage-content.php');
    }
}
?>
<?php include('../layout/footer.php') ?>