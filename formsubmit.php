<?php
require_once('./conn/config.php');

$today = date("Y-m-d");

$name = $_POST['name'];
$description = $_POST['description'];

$sql = "INSERT INTO `estimate` (`project_id`, `name`, `emp_id`, `total_cost`, `date`, `description`, `status`, `insertdatetime`, `insertupdateuser`) VALUES ('1', '$name', '1', '1', '$today', '$description', '1', '$today', '1')";

$conn->query($sql);

header('Location:Estimates.php');

?>
