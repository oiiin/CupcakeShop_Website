<!--
    Name: Ahmed Ounissi
    Date: 2022-07-30
    index.html page
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <!--Head Content-->
    <meta charset="UTF-8">
    <meta name="author" content="Kealey Lawton and Ahmed Ounissi">
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="Css/register.css">
    <title>Home</title>
</head>

<body>
    <!--Body Content-->
    <script src="script.js"></script>
    <script src="events.js" defer></script>

    <!--Header-->
    <header>
        <div class="header">

            <div class="logo">
                <img class="logoImage" src="Images/logo.png" alt="logo">
            </div>
            <div class="cart">
                <img class="cartImage" src="Images/Cart.png" alt="cart">
            </div>

            <nav>
                <div>
                    <a href="index.php" class="navbar">HOME</a>
                    <a href="about.php" class="navbar">ABOUT</a>
                    <a href="menu.php" class="navbar">MENU</a>
                    <a href="order.php" class="navbar">ORDER</a>
                    <a href="contact.php" class="navbar">CONTACT</a>
                    <a href="Register.php" class="navbar">REGISTRATION</a>
                    <a href="account.php" class="navbar">MY ACCOUNT</a>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <?php
            $host="localhost";
            $user="root";
            $password="";
            $db="account";

            $connect=mysqli_connect($host,$user,$password);
            mysqli_select_db($connect,$db);

            if(isset($_POST['submit'])){
                if(!empty($_POST['email']) && !empty($_POST['pass']) && !empty($_POST['pass2']) && !empty($_POST['fname']) && !empty($_POST['address']) && !empty($_POST['c_number']) && !empty($_POST['exp_m']) && !empty($_POST['exp_y']) && !empty($_POST['cvv'])){
                    $email = $_POST['email'];
                    $fname = $_POST['fname'];
                    $address= $_POST['address'];
                    $c_number = $_POST['c_number'];
                    $exp_m = $_POST['exp_m'];
                    $exp_y = $_POST['exp_y'];
                    $cvv = $_POST['cvv'];
                    $pass = $_POST['pass'];

                    $query = "insert into loginform(email,fname,address,c_number,exp_m,exp_y,cvv,password) values('$email','$fname','$address','$c_number','$exp_m','$exp_y','$cvv','$pass')";
                    $run = mysqli_query($connect,$query);

                    if($run){
                        echo "Form submitted successfully";
                    }else{
                        echo "Form not submitted";
                    }

                }else{
                    echo "";
                }
            }
        ?>
        <form name="form" action="Register.php" method="post">
            <div class="content">
                <h1>New Member Registration</h1>

                <label for="email">Email</label>
                <input type="text" placeholder="Enter Email" name="email" id="email">
                <span class="alert" id="emailError"></span>

                <label for="fname">Full Name</label>
                <input type="text" placeholder="Enter Full Name" name="fname" id="fname">
                <span class="alert" id="passwordError2"></span>

                <label for="address">Address</label>
                <input type="text" placeholder="Enter address" name="address" id="address">
                <span class="alert" id="passwordError2"></span>

                <label for="ccnum">Credit card number</label>
                <input type="text" id="ccnum" name="c_number" placeholder="1111-2222-3333-4444">

                <label for="expmonth">Exp Month</label>
                <input type="text" id="expmonth" name="exp_m" placeholder="00">

                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="exp_y" placeholder="00">

                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="000">

                <label for="pass">Password</label>
                <input type="password" placeholder="Enter Password" name="pass" id="pass">
                <span class="alert" id="passwordError"></span>

                <label for="pass2">Repeat Password</label>
                <input type="password" placeholder="Repeat Password" name="pass2" id="pass2">
                <span class="alert" id="passwordError2"></span>


                <button type="submit" class="register" name="submit">Register</button>
                <button type="reset" class="reset">Reset</button>
            </div>

            <div class="login">
                <p class="paragraph">Already have an account? <a href="account.html" class="signin">Sign in</a>.</p>
            </div>
        </form>

    </main>

    <footer>
        <!--Footer Content-->
        <div class="stars">
            <img class="starsImage" src="Images/Stars.png" alt="stars">
        </div>
        <p id="footer">2022 by STAR CUPCAKES</p>
    </footer>

</body>

</html>