<?php
include './include/fileheader.php';

$sql = "SELECT * FROM estimate";
$result = $conn->query($sql);
?>

<h2 style="margin-bottom: 0;">Existing Projects</h2>
<hr>
<div>
  <table class="existingPro">
    <tr>
      <th>Project ID</th>
      <th>Project Name</th>
      <th>Actions</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
    ?>
        <tr>
          <td><?php echo $row['name'] ?></td>
          <td><?php echo $row['description'] ?></td>
          <td style="text-align: center;">
            <button style="background-color: lightblue; border-radius: 5px;"><i class="fa-solid fa-eye"></i></button>
            <button style="background-color: red; border-radius: 5px;"><i class="fa-solid fa-trash-can"></i></button>
          </td>
        </tr>
    <?php
      }
    }
    ?>
  </table>
</div>

<?php include './include/filefooter.php'; ?>