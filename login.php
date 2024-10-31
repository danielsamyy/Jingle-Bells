<?php
include("connection.php");

$errors = array();

if(isset($_POST['login'])) {
    $email = mysqli_real_escape_string($database, $_POST['email']);
    $password = mysqli_real_escape_string($database, $_POST['pass']);

    if(empty($email)) {
        array_push($errors, "Email is required");
    }
    if(empty($password)) {
        array_push($errors, "Password is required");
    }

    if(count($errors) == 0) {
        $query = "SELECT * FROM users WHERE email = '$email' AND pass = '$password'";
        $result = mysqli_query($database, $query);

        if(mysqli_num_rows($result) == 1) {

            $_SESSION['email'] = $email;
            $_SESSION['success'] = "Welcome, you are logged in";
            header('Location: category.php');
            exit();
            }else {
                array_push($errors, "Incorrect Email or Password");
            }
        } 
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="footer.css">
    <link rel="icon" type="image/x-icon" href="./images/blury.jpg">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
     integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Great+Vibes">
    
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:'Times New Roman', Times, serif;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-image: url('images/blury.jpg');
    
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}
h1{
    font-family:"Great Vibes", cursive;
    color: white;
    margin-top: 10px;
    font-size: xx-large;
    font-weight: bolder;
}
.all{
    background:transparent;
    width: 500px;
    height: 415px;
    border: 1px solid rgba(255, 255, 255, 2);
    border-radius: 40px;
    margin-top: 3%;
   color: white;
   padding: 20px 30px ;
   flex: 1;
}
.all h2{
    font-family: 'Times New Roman', Times, serif;
    font-weight: bolder;
    text-align: center;
    font-size: xx-large;
}

.all .input{
    position: relative;
    width: 100%;
    height: 50px;
    margin: 30px 0;
}
.input input{
   width: 100%;
   height: 100%;
   background: transparent; 
   border: none;
   outline: none;
   border: 2px solid rgba(255, 255, 255, 2) ;
   border-radius: 40px;
   font-size: 25px;
   color: #fff; 
   padding: 20px 45px 20px 20px;
}
.input input::placeholder{
    color: #fff;
    font-size: large;
    font-weight: bold;
}
.input i{
    position: absolute;
    right: 30px;
    top: 38%;
    transform:translate(-50%);
    font-size: 25px;
}
.all .remember{
    display: flex;
    font-size: large;
    font-weight: 590;
    margin: 0 4px 10px 4px;  
}
.remember label input{
    accent-color: #fff;
    margin-right: 5px;
}
/* .remember a{
    color: #fff;
    text-decoration: none;

}
.remember a:hover{
    text-decoration: underline;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
}
 */
.all .button{
    width: 100%;
    height: 50px;
    border-radius: 35px;
    font-weight: bold;
    font-size: larger;
    border: none;
    outline: none;
    box-shadow:0 0 10px rgba(0,0, 0, 1) ;
    cursor: pointer;
    font-family:'Times New Roman', Times, serif;
    background-color: #ae0707;;
    color:white;
    margin-top: 10px;
}
.all .button:hover{
    background-color:rgb(10, 134, 10);
    font-family: cursive;
}
.all .register{
    display: flex;
    justify-content: space-between;
    font-size: 17px;
    font-weight: 600;
    text-align: center;
    margin-top: 25px;
    margin: 13px 5.5px 0 5.5px ;
}
.register  a {
    color: #fff;
    text-decoration: none;
}
.register a:hover{
    text-decoration: underline;
    font-family:Arial, Helvetica, sans-serif;
    font-weight: bold;
}
nav ul{
list-style-type: none;
text-align: center;
margin: 0;
}
nav ul li{
display: inline;
}
nav ul li a {
display: inline-block;
width: 140px;
text-decoration:none ;
padding: 5px;
color: white;
font-family: 'Times New Roman', Times, serif;
font-weight: bold;
font-size: large;
}
nav{
background-color: #BF0505;
width: 100%;
}
nav ul li a:hover{
background-color:rgb(5, 116, 5);
font-weight: bolder;
font-size: large;
font-family: Arial, Helvetica, sans-serif;
}

.error-message {
    color: white;
    font-size: 16px;
    font-weight: bold;
    margin-top: 10px;
}
</style>

</head>
<body>
    <nav>
        <ul>
        <li><a href="index.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
            
            <li><a href="feedback.php">Feedback</a></li>
            <li><a href="about.php">About Us</a></li>
        </ul>
    </nav>
    <div class="all">
    <form method="post" action="">
    <?php if(count($errors) > 0): ?>
        <div class="error">
            <?php foreach($errors as $error): ?>
                <p><?php echo "<p class='error-message'>" . $error . "</p>"; ?></p>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <h2><i><strong>Login</strong></i></h2>
        <div class="input">
            <input type="email" placeholder="Email" name="email" >
            <!-- <i class='bx bxs-user' style='color:#de1111'  ></i> -->
            <i class='bx bxs-user' style='color:#f8f7eb' ></i>
        </div>
            <div class="input">
            <input type="password" placeholder="Password" name="pass">
            <!-- <i class='bx bxs-lock-alt' style='color:#de1111' ></i> -->
            <i class='bx bxs-lock-alt' style='color:#f8f7eb'  ></i>
        </div>
        <div class="remember">
            <label for="remember"><input type="checkbox"id="remember">Remember me</label>
        </div>
        <div>
            <button type="submit" class="button" name="login">Login</button>
        </div>
        <div class="register">
            <p>don't have account? </p>
            <a href="registration.php">Create account</a>
        </div>
    </form>
</div>
<footer>
    <div class="footercontainer">
        <div class="socialIcons">
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-google-plus"></i></a>
            <a href=""><i class="fa-brands fa-youtube"></i></a>
        </div>
        <div class="footerNav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="feedback.php">FeedBack</a></li>
            </ul>
        </div>
    </div>
    <div class="footerBottom">
        <p>Copyright &copy;2024; Designed by <span class="designer">Jingle Bells.Com</span></p>
    </div>
   </footer>
</body>
</html>

