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
    <link rel="stylesheet" href=".css/home.css">
    <title>Home</title>
    <style>
      th {
          background-color: #20B2AA;
          color: white;
        }
      .table{
        text-align: center;
        background-color:white;
        
      }
      table {
          width: 100%;
          border: 1px solid;
          border-collapse: 10px;
          margin: 25px 0;
          font-size: 20px;
          font-family: sans-serif;
          min-width: 1000px;
          box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
          background-color:bisque;
        }
    </style>
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

      
    

      <div class="table">
      <?php
        $host="localhost";
        $user="root";
        $password="";
        $db="account";

        $conn = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($conn,'account');
        $email = $_GET['email'];
            $sql = "SELECT * FROM `loginform` where email = '$email';";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);

            if($result = mysqli_query($conn, $sql)){
              if(mysqli_num_rows($result) > 0){
                  echo "<table class='table'>";
                      echo "<tr>";
                          echo "<th>ID</th>";
                          echo "<th>Email</th>";
                          echo "<th>Name</th>";
                          echo "<th>Card number</th>";
                          echo "<th>Expiry month</th>";
                          echo "<th>Expiry year</th>";
                          echo "<th>CVV</th>";
                      echo "</tr>";
                  while($row = mysqli_fetch_array($result)){
                      echo "<tr>";
                          echo "<td>" . $row['id'] . "</td>";
                          echo "<td>" . $row['email'] . "</td>";
                          echo "<td>" . $row['fname'] . "</td>";
                          echo "<td>" . $row['c_number'] . "</td>";
                          echo "<td>" . $row['exp_m'] . "</td>";
                          echo "<td>" . $row['exp_y'] . "</td>";
                          echo "<td>" . $row['cvv'] . "</td>";   
                      echo "</tr>";
                  }
                  echo "</table>";
                  // Free result set
                  mysqli_free_result($result);
              } else{
                  echo "No records matching your account details were found.";
              }
          } else{
              echo "ERROR:" . mysqli_error($conn);
          }
            

    ?>
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