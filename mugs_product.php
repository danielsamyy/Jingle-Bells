<?php
include("connection.php");

$sort = '';
$searchTerm = '';
$orderproduct = 'mugs';

if (isset($_POST['sort'])) {
  $sort = $_POST['sort'];
}

if (isset($_POST['search'])) {
  $searchTerm = mysqli_real_escape_string($database, $_POST['search']);
}

$query = "SELECT * FROM product WHERE p_name = '$orderproduct'";

if (!empty($searchTerm)) {
  $query .= " AND description LIKE '%$searchTerm%'";
}

if ($sort == 'High to Low') {
    $query .= " ORDER BY price DESC";
  } elseif ($sort == 'Low to High') {
    $query .= " ORDER BY price ASC";
  }

$records = mysqli_query($database, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pajames</title>
    <link rel="stylesheet" href="mug.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <nav>
        <ul>
        <li><a href="index.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="category.php">Category</a></li>
            <li><a href="feedback.php">Feedback</a></li>
            <li><a href="about.php">About Us</a></li>
        </ul>
    </nav>
    <center>
    <div id="search">
        <form method="post">
            <div class="input-container">
            <input type="search" name="search" placeholder="Search for mugs..." size="50px" value="<?php echo $searchTerm; ?>">
            <i class='bx bx-search-alt-2' style='color:#bd1d1d'  ></i>
            </div>
            <input type="submit" value="Search" id="go">
        </form>
        <form id="Rightform" method="post">
        <label>Sort by</label>
        <select name="sort">
            <option value="" disabled selected>None</option>
            <option value="High to Low">High to Low</option>
            <option value="Low to High">Low to High</option>
        </select>
        <input type="submit" value="Sort">
    </form>
    </div>
    </center><br><br>
    <table>
       <?php if (mysqli_num_rows($records) > 0) { ?>
            <?php while ($data = mysqli_fetch_array($records)) { ?>
                <td class="box">
                <figure>
                    <img class="first" src="images/<?php echo $data['image']; ?>" height="200px" width="200px" class="Product"><br>
                    <figcaption style="font-family: 'Times New Roman', Times, serif;"><?php echo $data['description']; ?> </figcaption> 
                    <p class="paragraph"><del><span>1000EGP</span></del> <span class="Price">Price: <?php echo $data['price']; ?></span>
                    <i class='bx bxs-discount' style='color:#e50e0e' ></i></p><br>
                    <i class='bx bxs-heart' style='color:#e50e0e' ></i><a href="payment.php">
                        <i class='bx bxs-cart-add' style='color:#e50e0e' ></i></a> </p>

                    <select>
                   <option value="">Green</option>
                   <option value="">Red</option>
                   <option value="">Blue</option>
                   <option value="">White</option>
                    </select>
                </figure>
                </td>
            <?php } ?>
        <?php } else { ?>
            <p>No products found matching your search criteria.</p>
        <?php } ?>
    </table>

</body>
</html>


