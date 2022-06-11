<?php include('../login_check.php') ?>
<?php
if(isset($_GET['id']) && isset($_GET['mentor_id'])){
    $id = $_GET['id'];
    $mentorId = $_GET['mentor_id'];
    $deleteRelationCourseSql = "delete from user_course where user_id = '$mentorId' and course_id = '$id'";
    $resultDeleteRelationCourse = mysqli_query($conn, $deleteRelationCourseSql);
    if ($resultDeleteRelationCourse){
        $deleteCourseSql = "delete from course where id = '$id'";
        $resultDeleteCourse = mysqli_query($conn, $deleteCourseSql);
        if ($resultDeleteCourse) {
            header('location:' . SITEURL . 'admin/manage-course.php');
        }
    }
}
?>