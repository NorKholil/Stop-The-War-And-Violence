<?php
session_start(); 

if( ! isset($_SESSION['login'])){ // Jika tidak ada session username berarti dia belum login
  header("location: v_login.php"); // Kita Redirect ke halaman index.php karena belum login
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palestine News</title>
    <link rel="stylesheet" href="../assets/css/welcome.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="header-left">
                <img class="logo" src="../assets/images/logo.png">
            </div>
            <div class="header-right">
                <a href="index.php">Home</a>
                <a href="v_myanmar.php">Hot News</a>
                <a href="v_aboutUs.php" class="login">About Us</a>
            </div>
        </div>
    </header>

    <div class="lesson-wrapper">
        <div class="container">
          <div class="parent1">
              <div class="parent2">
                <h1>Hello, "<?php echo $_SESSION['username']; ?>"</h1>
                <h4>Congrats!!! Login Successfully</h4>
            </div>
          </div>
        </div>
    </div>
    <div class="message-wrapper">
        <div class="container">
            <a href="../controller/c_logout.php"><span class="btn message">Log Out</span></a>
        </div>
    </div>
    <footer>
        <div class="container">
            <p>Copyright@Kholil-Fahreza</p>
        </div>
    </footer>
</body>

</html>