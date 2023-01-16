<!--
    Name:Ahmed Ounissi
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
    <link rel="stylesheet" href="Css/account.css">
    <title>Home</title>
</head>

<body>
    <!--Body Content-->
    <script src="script.js"></script>

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

            if(isset($_POST['email'])){
                $uname=$_POST['email'];
                $password=$_POST['password'];

                $sql = "SELECT * from `loginform` where `email`='".$uname."'AND password='".$password."'
                limit 1";
                
                $result=mysqli_query($connect,$sql);
                $row=mysqli_fetch_array($result);


                if(is_array($row)){
                    $_SESSION["email"] = $row['email'];
                    $_SESSION["password"] = $row['password'];
                }else{
                    echo " You have Entered Incorrect Password";
                    echo 'window.location.href = "account.php"';
                }

                if(isset($_SESSION["email"])){
                    header("Location:home.php");
                }
            }
        
        
        ?>

        <form method="get" action="home.php">
            <div class="content">
                <h1>Sign in</h1>

                <label>Email</label>
                <input type="text" placeholder="Enter Email" name="email" id="email">

                <label>Password</label>
                <input type="password" placeholder="Enter Password" name="password" id="psw">

                <a href="home.php" class="navbar"><button type="submit" class="login">Login</button></a>
                <button type="reset" class="reset">Reset</button>
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