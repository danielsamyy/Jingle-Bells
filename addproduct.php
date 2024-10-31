<?php
include('connection.php');
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_POST['add'])) {
    $productName = mysqli_real_escape_string($database, $_POST['productName']);
    $description = mysqli_real_escape_string($database, $_POST['description']);
    $price = mysqli_real_escape_string($database, $_POST['price']);
    $image = mysqli_real_escape_string($database, $_POST['image']);
    $insert = "insert into product (p_id, p_name, description, price, image) values(Null, '$productName','$description','$price', '$image')";
    $run_insert=mysqli_query($database, $insert);
    header("location:admin.php");
}

?>

<html>
<head>
    <link rel="stylesheet" href="addproduct.css">
    <title>Add Product</title>
    <style>
        /* General styling for body */
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
        .img input[type="file"] {
            width: 100%;
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
<h1 >Add Product</h1>
<form method="post">
    <div class="form">
        <label for="productName">Product name</label>
        <input type="text" placeholder="Example mugs" name="productName" id="productName" required>
    </div>
    <div class="form">
        <label for="description">Description</label>
        <input type="text" placeholder="Enter Description" name="description" id="description" required>
    </div>           
    <div class="form">
        <label for="price">Price</label>
        <input type="text" placeholder="Enter price" name="price" id="price" required>
    </div> 
    <div class="img">
        <label for="image">Enter the image</label>
        <input type="file" placeholder="Chose File" name="image" id="image" required>
    </div>
    <div class="btn">
        <button type="submit" name="add" >Add</button>
    </div>
</form>
</body>
</html>