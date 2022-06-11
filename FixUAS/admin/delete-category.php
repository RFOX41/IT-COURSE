<?php include('../login_check.php') ?>
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "delete from category where id = '$id'";
    $res = mysqli_query($conn, $sql);
    if($res){
        header('location:' . SITEURL . 'admin/manage-category.php');
    }
}
?>