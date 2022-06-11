<?php include('../login_check.php') ?>
<?php
if(isset($_GET['id'])){
    $sql = "delete from class where id = '$id'";
    $res = mysqli_query($conn, $sql);
    if($res){
        header('location:' . SITEURL . 'mentor/manage-class.php');
    }
}
?>