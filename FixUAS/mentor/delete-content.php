<?php include('../login_check.php') ?>
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "delete from content where id = '$id'";
    $res = mysqli_query($conn, $sql);
    if($res){
        header('location:' . SITEURL . 'mentor/manage-content.php');
    }
}
?>