<!--
    Name: Ahmed Ounissi
    Date: 2022-07-30
    contact.html page
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <!--Head Content-->
    <meta charset="UTF-8">
    <meta name="author" content="Kealey Lawton and Ahmed Ounissi">
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="Css/contact.css">
    <title>Star Cupcakes</title>
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
        <div class="allcontent">
            <div class="contentleft">
                <img src="Images/cupcake.jpg" alt="Cupcake image">
            </div>

            <div class="contentright">
                <h1>CONTACT US</h1>
                <p class="paragraph">304 Bank Street, Ottawa, ON, Canada</p>
                <p class="paragraph">info@starcupcakes.com \\ 613-737-9933</p>
                <p class="paragraph">We want to hear from you, write to us:</p>

                <form name="form" action="contact.html" method="get">
                    <input type="text" id="name" name="name" placeholder="Name">
                    <input type="text" id="email" name="email" placeholder="Email">
                    <input type="text" id="message" name="message" placeholder="Type your message here..">
                    <input type="submit" id="Submit" value="Submit">
                </form>

            </div>
        </div>
        <br><br>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2800.731223087316!2d-75.69843698444424!3d45.41475927910029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce05adac68b125%3A0xd5ca8af3589f176!2s304%20Bank%20St%2C%20Ottawa%2C%20ON%20K2P%201X7!5e0!3m2!1sen!2sca!4v1659488757022!5m2!1sen!2sca"
                width="1052" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>




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