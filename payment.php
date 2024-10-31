<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="payment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
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
    <div class="container">
        <h1>Payment</h1>
        <form  method="post">
            <h4> Account</h4>
            <div class="pop">
            <div class="p">
                <input type="text" placeholder="Full Name" required class="name">
                <i class="fa-solid fa-circle-user icon"></i>
                
                
                
                </div>
            <div class="p">
                <input type="text" placeholder="Nick name" required class="name">
              <i class="fa-solid fa-circle-user icon"></i>
                </div>
           </div>
            
            <div class="pop">
            <div class="p">
              <input type="email" placeholder="Email Adress"  required class="name"> 
                <i class="fa-regular fa-envelope icon"></i>
                </div>
            
            
            </div>
            <div class="pop">
            <div class="p">
                <h4> Date of birth</h4>
             <input type="text" placeholder="DD" required class="dob">
             <input type="text" placeholder="MM" required class="dob">
             <input type="text" placeholder="YYYY" required class="dob">
                 </div>
                <div class="p">
                <h4> Gender</h4>
                <input type="radio" id="b1" name="gender" checked class="radio">
                <label for="b1">Male</label>
                 
                <input type="radio" id="bb" name="gender"  class="radio">
                <label for="bb">Female</label>
                    
                    
                </div>
               </div>
                
                <div class="pop">
                <div class="p">
                    <h4> Payment Details</h4>
                    <input type="radio"  name="pay" id="bc1" checked class="radio">
                    <label for="bc1"><span><i class="fa-brands fa-cc-visa"></i> Credit Card </span></label>
                    
                    <input type="radio"  name="pay" id="bc2" class="radio">
                    <label for="bc2"><span><i class="fa-brands fa-paypal"></i>Paypal </span></label>
            
                    </div>
            
                </div>
                
                
                <div class="pop">
            <div class="p">
             
                <input type="tel" placeholder="Card Number" required class="name">
                <i class="fa fa-credit-card icon"></i>
                
                    </div>
                </div>
                
                
                <div class="pop">
                
                <div class="p">
                    <input type="tel" placeholder="Card CVC" required class="name">
                    <i class="fa-solid fa-user icon"></i>
                    
                    
                    
                    
                    
                    
                    </div>
               <div class="p">
                   <!-- <select>
                       <option> 01 jun</option>
                       <option> 02 jun</option>
                        <option>03 jun</option>
                   </select> -->
                   <select>
                       <option selected > 2024</option>
                       <option> 2025</option>
                        <option> 2026</option>

                   </select>
                   
                     </div>
                </div>
                <div class="pop">
                <div class="p">
                    
                    <button type="submit">PAY NOW
                    
                    </button>
                    
                    </div>
                
                </div>
               
            
        </form>
    </div>
</body>
</html>