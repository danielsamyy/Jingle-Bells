<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="admin.css">
  <title>JingleBells | Products</title>
  <style>
    body{
    background-color:#FAF3E0;
}
#click{
    width: 10%;
    color: black;
    display: inline-block;
    margin: 10px 0 0 20px ;
    padding: 9px;
    font-weight: bold;
    font-size: 15px;
    border: 2px solid snow;
    cursor: pointer;
    background-color: #228B22;
}
#click:hover{
    background-color: #B22222;
}
  </style>
</head>
<body>
  <table border="1" style="width:80%; margin-left:10%;">
  <tr>
      <td colspan="7" class="title" style="color: white; background-color: #B22222;">
        Product Details
      </td>
    </tr>
    <tr style="font-size: 22px; text-align: center;">
    <td class="thead" style="color: white; background-color: #006400;">ID</td>
    <td class="thead" style="color: white; background-color: #006400;">Product Name</td>
    <td class="thead" style="color: white; background-color: #006400;">Description</td>
    <td class="thead" style="color: white; background-color: #006400;">Price</td>
    <td class="thead" style="color: white; background-color: #006400;">Image</td>
    <td class="thead" style="color: white; background-color: #006400;">Update</td>
    <td class="thead" style="color: white; background-color: #006400;">Delete</td>
</tr>
    <?php
    $records = mysqli_query($database, "SELECT * FROM product");
    while ($data = mysqli_fetch_array($records)) {
    ?>
    <tr style="font-size:20px;">
      <td><?php echo $data['p_id']; ?></td>
      <td><?php echo $data['p_name']; ?></td>
      <td><?php echo $data['description']; ?></td>
      <td><?php echo $data['price']; ?></td>
      <td><img src="images/<?php echo $data['image'];?>" height="150px" width="150px"></td>
      <td style="background-color: #FAF3E0;"><a href="update.php ? id=<?php echo $data['p_id']; ?>">Update</a></td>
      <td style="background-color: #FAF3E0;"><a href="delete.php ? id=<?php echo $data['p_id']; ?>" name="confirm_delete" onclick="return confirmDelete();">Delete</a></td>
    </tr>
    <?php
    }
    ?>
  </table>
  <br>
  <strong><p style="text-align:center; font-size:18px;">Do you want to add any other Product? <a id="click" href="addproduct.php">Click Here</a></p></strong>
  <script>
    function confirmDelete(){
      return confirm("Are you sure you want to delete this record?");
    }
  </script>
</body>
</html>