<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Student Portal</h2>
            </div>
            
            <div class="menu">
                <ul>
                    <li><a href="#">NEWS</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <li><a href="#">TEAM</a></li>
                    <li><a href="#">ADMISSION</a></li>
                    
                </ul>
            </div>
        </div>
        
        <div class="content">
            <h1>Mekusmekus <br><span>University</span></h1>
            <p class="par">Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br>Esse natus et fuga blanditiis est dolore quaerat praesentium neque beatae, <br>enim assumenda voluptates mollitia similique voluptate rem, <br>fugit vero eum nesciunt!</p>
            
            <button class="cn"><a href="#">JOIN US</a></button>

        </div>

        <div class="form">
            <h2>Signin HERE!</h2>
            <form action="login.php" method="POST">
                <input type="email" name="email" placeholder="Email or Student No." required>
                <input type="password" name="password" placeholder="Password" required>
                <button class="login-btn" type="submit">Login</button>
            </form>

            <p class="link">Not enrolled yet?<br>
            <a href="signup.php">Enroll NOW!</a></p>
            <hr>
            <p class="liw">Login with</p>
            
            <div class="icons">
                <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
            </div>
        </div>

    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>