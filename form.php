<?php
include './include/fileheader.php';

$sql = "SELECT * FROM estimate";
$result = $conn->query($sql);
?>

<h2 style="margin-bottom: 0;">Existing Projects</h2>
<hr>
<div>
  <form action="formsubmit.php" method='POST'>
    <label for="">NAME</label>
    <input type="text" id ='name' name ='name'>
    <label for="">DESCRIPTION</label>
    <input type="text" id ='description' name ='description'>
    <input type="submit" value='Submit'>
  </form>
</div>

<?php include './include/filefooter.php'; ?>

