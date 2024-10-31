
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FeedBack</title>
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
        
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url('./images/blury.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        
        .all {
            background: transparent;
            width: 500px;
            height: 400px;
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
            font-size: 25px;
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
        
         /* .all .remember {
            display: flex;
            font-size: large;
            font-weight: 590;
            margin: 0 40px 10px 4px;
        }
        
        .remember label input {
            accent-color: #fff;
            margin-right: 5px;
        } */
        
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
            margin-top: 50px;
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
        textarea {
        width: 100%;
        height: 150px;
        background: transparent;
        border: 2px solid rgba(255, 255, 255, 2);
        border-radius: 40px;
        font-size: 25px;
        color: #fff;
        padding: 20px;
        resize: none;
        outline: none;
        font-family: 'Times New Roman', Times, serif;
      }

textarea::placeholder {
    color: #fff;
    font-size: large;
    font-weight: bold;
}
    </style>
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
    <div class="all">
        <form>
            <h2><i><strong>FeedBack</strong></i></h2>
            <div class="input">
                <input type="email" placeholder="Email" name = "email" required>
                <!-- <i class='bx bxs-user' style='color:#f8f7eb'></i> -->
            </div>
            <div class="input">
              <textarea class="input" cols="20" rows="30"placeholder="Your Feedback" name = "message" required></textarea>
                <!-- <input type="text" placeholder="Last Name" required> -->
                <!-- <i class='bx bxs-user' style='color:#f8f7eb'></i> -->
            </div>
            <div>
                <button type="submit" class="button" onclick="return confirmSend();">Send </button>
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
          <p>Copyright &copy;2024; Designed by <span class="designer">JingleBells.com</span></p>
      </div>
     </footer>
     <script>
    function confirmSend(){
      return confirm("Your Feedback Sent Successfully, Thank You for your feedback");
    }
  </script>
</body>
</html>