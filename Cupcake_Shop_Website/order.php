<!--
    Name: Ahmed Ounissi
    Date: 2022-07-30
    order.html page
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <!--Head Content-->
    <meta charset="UTF-8">
    <meta name="author" content="Kealey Lawton and Ahmed Ounissi">
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="Css/order.css">
    <title>Star Cupcakes</title>
</head>

<body>
    <!--Body Content-->
    <script src="order.js" defer></script>

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
        <!--Main Content-->

        <div class="allcontent">

            <form class="form">
                <select id="select">
                    <option>-- PRODUCT --</option>
                    <option id="Cupcake">CUPCAKES</option>
                    <option id="Topping">TOPPINGS</option>
                </select>
                <input type="search" placeholder="Search products" id="search">
            </form>

            <div class="allcupcakes" id="allcupcakes">
            <h1>CUPCAKES</h1>

            <!--ROW 1-->
            <div class="allcontent2">
                <div class="contentleft" id="message">
                    <div class="contentleft2">
                        <p id="productName">VANILLA BEAN</p>
                        <p>$15.25</p>
                        <form action="">
                            <input type="submit" id="Add" value="Add to cart">
                        </form>
                    </div>

                    <div class="contentright2">
                        <img class="products" src="menu_pic/vanilla_bean.jpg" alt="Cupcake image">
                    </div>
                </div>

                <div class="contentright" id="message2">
                    <div class="contentright2">
                        <p id="productName2">CHOCOLATE GANACHE</p>
                        <p>$18.75</p>
                        <form action="">
                            <input type="submit" id="Add" value="Add to cart">
                        </form>
                    </div>

                    <div class="contentright2">
                        <img class="products" src="menu_pic/chocolate_ganache.jpg" alt="Cupcake image">
                    </div>
                </div>

            </div>

            <!--ROW 2-->
            <div class="allcontent2">
                <div class="contentleft" id="message3">
                    <div class="contentleft2">
                        <p id="productName3">COFFEE CAKE</p>
                        <p>$15.00</p>
                        <form action="">
                            <input type="submit" id="Add" value="Add to cart">
                        </form>
                    </div>

                    <div class="contentright2">
                        <img class="products" src="menu_pic/coffee-cup.png" alt="Cupcake image">
                    </div>
                </div>

                <div class="contentright" id="message4">
                    <div class="contentright2">
                        <p id="productName4">BANANA BREAD</p>
                        <p>$14.87</p>
                        <form action="">
                            <input type="submit" id="Add" value="Add to cart">
                        </form>
                    </div>

                    <div class="contentright2">
                        <img class="products" src="menu_pic/banana_bread.jpg" alt="Cupcake image">
                    </div>
                </div>
            </div>

            <!--ROW 3-->
            <div class="allcontent2">
                <div class="contentleft" id="message5">
                    <div class="contentleft2">
                        <p id="productName5">CINNAMON BUN</p>
                        <p>$15.90</p>
                        <form action="">
                            <input type="submit" id="Add" value="Add to cart">
                        </form>
                    </div>

                    <div class="contentright2">
                        <img class="products" src="menu_pic/cinnamon_bun.jpg" alt="Cupcake image">
                    </div>
                </div>

                <div class="contentright" id="message6">
                    <div class="contentright2">
                        <p id="productName6">TIRAMISU</p>
                        <p>$15.60</p>
                        <form action="">
                            <input type="submit" id="Add" value="Add to cart">
                        </form>
                    </div>

                    <div class="contentright2">
                        <img class="products" src="menu_pic/tiramisu.jpg" alt="Cupcake image">
                    </div>
                </div>
            </div>

            <!--ROW 4-->
            <div class="allcontent2">
                <div class="contentleft" id="message7">
                    <div class="contentleft2">
                        <p id="productName7">LEMON</p>
                        <p>$13.00</p>
                        <form action="">
                            <input type="submit" id="Add" value="Add to cart">
                        </form>
                    </div>

                    <div class="contentright2">
                        <img class="products" src="menu_pic/lemon.jpg" alt="Cupcake image">
                    </div>
                </div>

                <div class="contentright" id="message8">
                    <div class="contentright2">
                        <p id="productName8">LAVENDER</p>
                        <p>$18.00</p>
                        <form action="">
                            <input type="submit" id="Add" value="Add to cart">
                        </form>
                    </div>

                    <div class="contentright2">
                        <img class="products" src="menu_pic/lavender.jpg" alt="Cupcake image">
                    </div>
                </div>
            </div>
            </div>

            <div class="alltoppings" id="alltoppings">
            <h1>TOPPINGS</h1>

            <!--ROW 1-->
            <div class="allcontent2">
                <div class="contentleft" id="message9">
                    <div class="contentleft2">
                        <p id="productName9">M&MS</p>
                        <p>$0.50</p>
                        <form action="">
                            <input type="submit" id="Add" value="Add to cart">
                        </form>
                    </div>

                    <div class="contentright2">
                        <img class="products" src="menu_pic/M&Ms.jpg" alt="Cupcake image">
                    </div>

                </div>

                <div class="contentright" id="message10">
                    <div class="contentright2">
                        <p id="productName10">MARSHMALLOWS</p>
                        <p>$0.50</p>
                        <form action="">
                            <input type="submit" id="Add" value="Add to cart">
                        </form>
                    </div>

                    <div class="contentright2">
                        <img class="products" src="menu_pic/marshmallow.jpg" alt="Cupcake image">
                    </div>

                </div>

            </div>

            <!--ROW 2-->
            <div class="allcontent2">
                <div class="contentleft" id="message11">
                    <div class="contentleft2">
                        <p id="productName11">OREOS</p>
                        <p>$0.50</p>
                        <form action="">
                            <input type="submit" id="Add" value="Add to cart">
                        </form>
                    </div>

                    <div class="contentright2">
                        <img class="products" src="menu_pic/oreo.jpg" alt="Cupcake image">
                    </div>

                </div>

                <div class="contentright" id="message12">
                    <div class="contentright2">
                        <p id="productName12">BANANA</p>
                        <p>$0.50</p>
                        <form action="">
                            <input type="submit" id="Add" value="Add to cart">
                        </form>
                    </div>

                    <div class="contentright2">
                        <img class="products" src="menu_pic/banana.jpg" alt="Cupcake image">
                    </div>

                </div>

            </div>

            <!--ROW 3-->
            <div class="allcontent2">
                <div class="contentleft" id="message13">
                    <div class="contentleft2">
                        <p id="productName13">COTTEN CANDY</p>
                        <p>$0.50</p>
                        <form action="">
                            <input type="submit" id="Add" value="Add to cart">
                        </form>
                    </div>

                    <div class="contentright2">
                        <img class="products" src="menu_pic/cotton-candy.jpg" alt="Cupcake image">
                    </div>

                </div>

                <div class="contentright" id="message14">
                    <div class="contentright2">
                        <p id="productName14">GRANOLA</p>
                        <p>$0.50</p>
                        <form action="">
                            <input type="submit" id="Add" value="Add to cart">
                        </form>
                    </div>

                    <div class="contentright2">
                        <img class="products" src="menu_pic/granola.jpg" alt="Cupcake image">
                    </div>

                </div>

            </div>

            <!--ROW 4-->
            <div class="allcontent2">
                <div class="contentleft" id="message15">
                    <div class="contentleft2">
                        <p id="productName15">WAFFLES</p>
                        <p>$0.50</p>
                        <form action="">
                            <input type="submit" id="Add" value="Add to cart">
                        </form>
                    </div>

                    <div class="contentright2">
                        <img class="products" src="menu_pic/waffle.jpg" alt="Cupcake image">
                    </div>

                </div>

                <div class="contentright" id="message16">
                    <div class="contentright2">
                        <p id="productName16">SPRINKLES</p>
                        <p>$0.50</p>
                        <form action="">
                            <input type="submit" id="Add" value="Add to cart">
                        </form>
                    </div>

                    <div class="contentright2">
                        <img class="products" src="menu_pic/sprinkles.jpg" alt="Cupcake image">
                    </div>

                </div>
                </div>

            </div>

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