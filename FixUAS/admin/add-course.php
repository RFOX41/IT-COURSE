<?php $title = "Add Course"; ?>
<?php include('../layout/header.php') ?>
<form action="" method="post">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Course</h3>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="" class="form-label">Kelas</label>
                <select name="class_id" id="" class="form-control">
                    <option value="">-- Pilih Kelas --</option>
                    <?php 
                    $kelas = null;
                    $getAllKelasSql = "select id, name from class";
                    $resultGetAllKelas = mysqli_query($conn, $getAllKelasSql);
                    if ($resultGetAllKelas){
                        $kelas = mysqli_fetch_all($resultGetAllKelas, MYSQLI_ASSOC);
                    }
                    ?>
                    <?php if($kelas != null): ?>
                        <?php foreach($kelas as $row): ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                        <?php endforeach; ?>
                    <?php endif; ?>    
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Mentor</label>
                <select name="mentor_id" class="form-control">
                    <option value="">-- Pilih Mentor --</option>
                    <?php
                      $mentor = null;
                      $getAllMentorSql = "select id, fullname from users where role = 'mentor' and deleted_at is null";
                      $res = mysqli_query($conn, $getAllMentorSql);
                      if ($res) {
                        $mentor = mysqli_fetch_all($res, MYSQLI_ASSOC);
                      }
                    ?>
                    <?php if($mentor != null): ?>
                        <?php foreach($mentor as $val): ?>
                            <option value="<?php echo $val['id']; ?>"><?php echo $val['fullname']; ?></option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Name Course</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Description Course</label>
                <textarea name="description" id="" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Price Course</label>
                <input type="number" name="price" class="form-control">
            </div>
        </div>
        <div class="card-footer">
            <a href="<?php echo SITEURL; ?>admin/manage-course.php" class="btn btn-secondary me-3">Kembali</a>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
    </div>
</form>
<?php
if(isset($_POST['submit'])){
    $class = htmlspecialchars($_POST['class_id']);
    $mentor = htmlspecialchars($_POST['mentor_id']);
    $nameCourse = htmlspecialchars($_POST['name']);
    $description = htmlspecialchars($_POST['description']);
    $price = htmlspecialchars($_POST['price']);

    $checkCourseSql = "select * from course where name = '$nameCourse'";
    $resultCheckCourse = mysqli_query($conn, $checkCourseSql);
    if ($resultCheckCourse) {
        $countResultCheckCourse = mysqli_num_rows($resultCheckCourse);
        if ($countResultCheckCourse > 0) {
            echo "nama course sudah ada";
            exit;
        }
    }

    $insertCourseSql = "insert into course (name, class_id, price, description) values ('$nameCourse', '$class', '$price', '$description')";
    $resultInsertCourse = mysqli_query($conn, $insertCourseSql);
    if ($resultCheckCourse) {
        $latestId = mysqli_insert_id($conn);
        $insertUserCourseSql = "insert into user_course (user_id, course_id, type) values ('$mentor', '$latestId', 1)";
        $resultInsertUserCourse = mysqli_query($conn, $insertUserCourseSql);
        if ($resultInsertUserCourse){
            header('location:' . SITEURL . 'admin/manage-course.php');
        }
    }


}
?>
<?php include('../layout/footer.php') ?>