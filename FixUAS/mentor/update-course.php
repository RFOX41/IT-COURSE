<?php $title = "Update Course"; ?>
<?php include('../layout/header.php') ?>
<?php if (isset($_GET['id'])): ?>
    <?php
    $id = $_GET['id'];
    $mentorId = $_SESSION['id'];
    $sql = "select ce.id, cs.id as kelas_id, ce.name as course_name, us.fullname as mentor_name, us.id as mentor_id, ce.price, ce.description
    from user_course as uc
    inner join users as us on us.id = uc.user_id
    inner join course as ce on ce.id = uc.course_id
    inner join class as cs on cs.id = ce.class_id
    where uc.type = 1 and uc.course_id = '$id' and uc.user_id = '$mentorId'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $count = mysqli_num_rows($res);
        if ($count <= 0) {
            echo "data tidak ditemukan";
            exit;
        }

        $data = mysqli_fetch_assoc($res);
    }

    
    ?>
    <form action="" method="POST">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Update Course</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="" class="form-label">Kelas</label>
                    <select name="class_id" id="" class="form-control">
                        <option value="">-- Pilih Kelas --</option>
                        <?php 
                        $dataKelas = null;
                        $getAllKelasSql = "select id, name from class";
                        $resultGetAllKelas = mysqli_query($conn, $getAllKelasSql);
                        if($resultGetAllKelas){
                            $countKelas = mysqli_num_rows($resultGetAllKelas);
                            if($countKelas > 0){
                                $dataKelas = mysqli_fetch_all($resultGetAllKelas, MYSQLI_ASSOC);
                            }
                        }
                        ?>
                        <?php if($dataKelas != null): ?>
                            <?php foreach($dataKelas as $row): ?>
                                <option value="<?php echo $row['id'] ?>" <?php echo $row['id'] == $data['kelas_id'] ? 'selected' : '' ?>><?php echo $row['name'] ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Name Course</label>
                    <input type="text" name="name" id="" class="form-control" value="<?php echo $data['course_name'] ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Description Course</label>
                    <textarea name="description" id="" class="form-control"><?php echo $data['description'] ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Price Course</label>
                    <input type="number" name="price" class="form-control" value="<?php echo $data['price'] ?>">
                </div>
            </div>
            <div class="card-footer">
                <a href="<?php echo SITEURL; ?>mentor/manage-course.php" class="btn btn-secondary me-3">Kembali</a>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
        </div>
    </form>
<?php endif; ?>
<?php
if(isset($_POST['submit'])){
    $class = htmlspecialchars($_POST['class_id']);
    // $mentor = htmlspecialchars($_POST['mentor_id']);
    $course = htmlspecialchars($_POST['name']);
    $description = htmlspecialchars($_POST['description']);
    $price = htmlspecialchars($_POST['price']);

    $idUserLogin = $_SESSION['id'];
    
    $deleteRelationCourseSql = "delete from user_course where course_id = '$id' and user_id = '$mentorId'";
    $resultDeleteRelationCourse = mysqli_query($conn, $deleteRelationCourseSql);
    if($resultDeleteRelationCourse) {
        $insertRelationCourseSql = "insert into user_course (user_id, course_id, type) values ('$idUserLogin', '$id', 1)";
        $resultInsertRelationCourse = mysqli_query($conn, $insertRelationCourseSql);
        if ($resultInsertRelationCourse) {
            $sql = "update course set name = '$course', class_id = '$class', price = '$price', description = '$description' where id = '$id'";
            $res = mysqli_query($conn, $sql);
            if ($res) {
                echo "berhasil update";
                header('location:' . SITEURL . 'mentor/manage-course.php');
            }
        }
    }
}
?>
<?php include('../layout/footer.php') ?>