<?php include('../login_check.php') ?>
<?php 
  if(isset($_GET['id'])) {
      $id = $_GET['id'];
      $dateNow = date('Y-m-d H:i:s');
      $sql = "update users set deleted_at = '$dateNow' where id = '$id' and role = 'mentor'";
      $res = mysqli_query($conn, $sql);
      if ($res) {
          header('location:' . SITEURL . 'admin/manage-mentor.php');
      }
  }
?>