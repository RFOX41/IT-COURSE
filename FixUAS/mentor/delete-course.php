<?php include('../login_check.php') ?>
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $mentorId = $_SESSION['id'];
    $deleteRelationCourseSql = "delete from user_course where user_id = '$mentorId' and course_id = '$id'";
    $resultDeleteRelationCourse = mysqli_query($conn, $deleteRelationCourseSql);
    if ($resultDeleteRelationCourse){
        $deleteCourseSql = "delete from course where id = '$id'";
        $resultDeleteCourse = mysqli_query($conn, $deleteCourseSql);
        if ($resultDeleteCourse) {
            header('location:' . SITEURL . 'mentor/manage-course.php');
        }
    }
}
?>