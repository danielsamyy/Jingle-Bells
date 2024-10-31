<?php
include("connection.php");

if(isset($_POST["register"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $confirm = $_POST['conpass'];
    $mobile = $_POST['ph_no'];
    $DOB = $_POST['DOB'];

    $check_query = "SELECT * FROM users WHERE email = '$email'";
    $check_result = mysqli_query($database, $check_query);

    if(mysqli_num_rows($check_result) > 0) {
        echo "<p class='error-message'>" . "Email is already taken";
    } else {
        $errors = array();

        if (empty($name)) {
            $errors[] = "Username is required";
        }
        if (empty($email)) {
            $errors[] = "Email is required";
        }
        if (empty($mobile)) {
            $errors[] = " phone number is required";
        }
    
        if (empty($pass)) {
            $errors[] = "Password is required";
        }

        if (empty($confirm)) {
            $errors[] = "Confirm password is required";
        } elseif ($pass != $confirm) {
            $errors[] = "Password does not match the confirm password";
        } elseif (strlen($pass) < 8) {
            $errors[] = "Password must be at least 8 characters long";
        } elseif (!preg_match("/[a-z]/i", $pass)) {
            $errors[] = "Password must contain at least one letter";
        }

        if (empty($errors)) {
            //                                               database column
            $insert_query = "INSERT INTO users (id, name, email, pass, mobile, DOB) VALUES (NULL, '$name', '$email', '$pass', '$mobile' , default)";
            $insert_result = mysqli_query($database, $insert_query);
            if ($insert_result) {
                header('Location: category.php');
                exit();
            } else {
                echo "Error: Failed to register user";
            }
        } else {
            foreach ($errors as $error) {
                echo "<p class='error-message'>" . $error . "</p>";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="registration.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="icon" type="image/x-icon" href="./images/blury.jpg">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
     integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
    
     <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Times New Roman', Times, serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-image: url('images/blury.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}

.all {
    background: transparent;
    width: 500px;
    height: 690px;
    border: 1px solid rgba(255, 255, 255, 2);
    border-radius: 40px;
    margin-top: 3%;
    color: white;
    padding: 20px 30px;
}

.all h2 {
    font-family: 'Times New Roman', Times, serif;
    font-weight: bolder;
    text-align: center;
    font-size: xx-large;
}

.all .input {
    position: relative;
    width: 100%;
    height: 50px;
    margin: 30px 0;
}

.input input {
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, 2);
    border-radius: 40px;
    font-size: 20px;
    color: #fff;
    padding: 20px 45px 20px 20px;
}

.input input::placeholder {
    color: #fff;
    font-size: large;
    font-weight: bold;
}

.input i {
    position: absolute;
    right: 30px;
    top: 38%;
    transform: translate(-50%);
    font-size: 25px;
}

.all .remember {
    display: flex;
    font-size: large;
    font-weight: 590;
    margin: 0 4px 10px 4px;
}

.remember label input {
    accent-color: #fff;
    margin-right: 5px;
}

.all .button {
    width: 100%;
    height: 50px;
    border-radius: 35px;
    font-weight: bold;
    font-size: larger;
    border: none;
    outline: none;
    box-shadow: 0 0 10px rgba(0, 0, 0, 1);
    cursor: pointer;
    font-family: 'Times New Roman', Times, serif;
    background-color: #ae0707;
    color: white;
    margin-top: 10px;
}

.all .button:hover {
    background-color: rgb(10, 134, 10);
    font-family: cursive;
    padding-bottom: 50px;
}

.all .register {
    display: flex;
    justify-content: space-between;
    font-size: 17px;
    font-weight: 600;
    text-align: center;
    margin-top: 25px;
    margin: 13px 5.5px 0 5.5px;
}

/* .register a {
    color: #fff;
    text-decoration: none;
} */

.register a:hover {
    text-decoration: underline;
    font-family: Arial, Helvetica, sans-serif;
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
            <h2><i><strong>Registration</strong></i></h2>
            <div class="input">
                <input type="text" placeholder="Name" name="name">
                <!-- <i class='bx bxs-user' style='color:#f8f7eb'></i> -->
            </div>
           
            <div class="input">
                <input type="email" placeholder="Email" name="email">
            </div>
            <div class="input">
                <input type="tel" placeholder="Phone Number" name="ph_no">
                <!-- <i class='bx bxs-phone' style='color:#f8f7eb'></i> -->
            </div>
            <div class="input">
                <input type="password" placeholder="Password" name="pass">
                <!-- <i class='bx bxs-lock-alt' style='color:#f8f7eb'></i> -->
            </div>
            <div class="input">
                <input type="password" placeholder="Confirm Password" name="conpass">
                <!-- <i class='bx bxs-user' style='color:#f8f7eb'></i> -->
            </div>
            
            <div class="input">
                <input type="date" placeholder="Date of Birth" name="DOB">
                <!-- <i class='bx bxs-calendar' style='color:#f8f7eb'></i> -->
            </div>
            <div class="remember">
                <label for="remember"><input type="checkbox"id="remember" rerequired>I agree to the terms & conditions</label>
            </div>
            <div>
                <button type="submit" class="button" name="register">Create Account</button>
                
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