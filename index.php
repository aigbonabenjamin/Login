<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Register & login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="signup "  style="display: none;">
        <h1 class="form-title">Register</h1>
         <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                    <input type="text" name="fName" id="fName" placeholder="First Name" required>
                    <label for="fName">First Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" id="lName", placeholder="Last Name" required>
                <label for="lName">Last Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group"> 
                <i class="fas fa-lock"></i>
                    <input type="password" id="password" placeholder="passsword" required>
                    <label for="passsword">Password</label>
            </div>
            <input type="submit" class="btn" value="Sign up" name="Sign up">
         </form>
         <p class="or">
            -----------or----------
         </p>
         <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
         </div>   
     <div class="links"></div>
         <p>Already have another Account?</p>
        <button id="signInButton">Sign In</button>
    </div>  
    </div>
        
    <div class="container" id="signIn ">
        <h1 class="form-title">Sign In</h1>
         <form method="post" action="regitster.php">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                    <input type="password" id="password" placeholder="passsword" required>
                    <label for="passsword">Password</label>
            </div>
            <p class="recover">
                <a href="#">Recover Password </a>
            </p>
            <input type="submit" class="btn" value="Sign In" name="Sign In">
         </form>
         <p class="or">
            -----------or----------
         </p>
         <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
         <div class="links">
        <p>Don't have Account?</p>
        <button id="signUpButton">Sign Up</button>
    </div>   
    </div>
    <script src="script.js"></script>
</body>
</html>