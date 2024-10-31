<?php
include("connection.php");

$id = $_GET['id'];
$selectQry = mysqli_query($database, "SELECT * FROM product WHERE p_id = '$id' ");
$data = mysqli_fetch_array($selectQry);

if(isset($_POST['update'])){
  /*$productName = $_POST['p_name'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $image = $_POST['image'];*/
  $productName = mysqli_real_escape_string($database, $_POST['productName']);
    $description = mysqli_real_escape_string($database, $_POST['description']);
    $price = mysqli_real_escape_string($database, $_POST['price']);
    $image = mysqli_real_escape_string($database, $_POST['image']);
  $updateQry = "UPDATE product SET p_name='$productName', description='$description', price='$price', image = '$image' WHERE p_id='$id'";
  $edit = mysqli_query($database, $updateQry);

  if($edit){
    mysqli_close($database);
    header("location:admin.php");
  }else{
    echo mysqli_error($database);
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="update.css">
  <title>Update products</title>
  <style>
     body {
          background-color: #FFF7E6;
          font-family: 'Arial', sans-serif;
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
          margin: 0;
          flex-direction: column;
      }

      /* Fixed title styling */
      h1 {
          color: #FFF;
          background-color: #B22222;
          padding: 15px;
          text-align: center;
          width: 100%;
          margin: 0;
          font-size: 24px;
          box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
          position: fixed;
          top: 0;
          left: 0;
          z-index: 1;
      }

      /* Form container styling */
      form {
          background-color: #fff;
          padding: 20px;
          border-radius: 10px;
          box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
          max-width: 450px;
          width: 100%;
          border: 2px solid #228B22;
          margin-top: 100px; /* Space to push it below the fixed header */
      }

      /* Center container for form */
      .form-container {
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100%;
          margin-top: 60px;
      }

      /* Input and button styling */
      .form label {
          display: block;
          font-weight: bold;
          margin-bottom: 5px;
          color: #B22222;
      }

      .form input[type="text"],
      .form input[type="number"],
      .img input[type="file"] {
          width: 95%;
          padding: 10px;
          margin-bottom: 15px;
          border: 1px solid #228B22;
          border-radius: 5px;
          background-color: #F5FFE8;
          color: #333;
      }

      .btn button {
          width: 100%;
          padding: 12px;
          background-color: #228B22;
          color: #FFF;
          border: none;
          border-radius: 5px;
          font-size: 16px;
          font-weight: bold;
          cursor: pointer;
          transition: background-color 0.3s;
          box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
      }

      .btn button:hover {
          background-color: #FFD700;
          color: #B22222;
      }
  </style>
</head>
<body>
  <h1 >Update Product</h1>
  <div class="container">
  <form method="POST">
    <div class="form">
      <label for="productName">Product Name </label>
      <input id="productName" type="text" name="productName" value="<?php echo $data['p_name'] ?>"  required>
    </div>
    <div class="form">
      <label for="description">Description </label>
      <input id="description" type="text" name="description" value="<?php echo $data['description']?>">
    </div>
    <div class="form">
      <label for="price">Price </label>
      <input id="price" type="number" name="price" value="<?php echo $data['price']?>">
    </div>
    <div class="img">
    <label for="image" >Enter the image</label>
      <input type="file"  name="image"   value=" <?php echo $data['image']?>" >
    </div>
    <div class="btn">
        <button type="submit" name="update" >Update</button>
    </div>
  </form>
  </div>
</body>
</html>
