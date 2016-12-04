<?php
if(isset($_POST['search'])) {
  // connect to database
  include("../mysqli_connect.php");

  $searchTags = $_POST['search'];
  echo $searchTags;
}

 ?>
