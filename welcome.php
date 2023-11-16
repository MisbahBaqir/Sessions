<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
 body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.navbar {
  background-color: #1F6357;
  overflow: hidden;
}

.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  margin: 11px;
  padding: 14px 16px;
  text-decoration: none;
}

.navbar a:hover {
  background-color: #e5e4e2;
  color: #283747 ;
}

.login-container {
  float: right;
}

.login-btn {
  background-color: #4CAF50;
  color: white;
  margin: 10px;
  padding: 15px 20px;
  border: none;
  border-radius: 10px;
  cursor: pointer;
}

.login-btn:hover {
  background-color: #45a049;
}
  
   
  </style>
</head>
  <body>
  <nav>

<div class="navbar">
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#services">Services</a>
    <div class="logout-container">
    <form action="logout.php" method="post">
    <button class="logout-btn">Logout</button> 
      </div>
    </form>
  </nav>

  <div class="card text-center">
  <div class="card-header">
    Post
  </div>
  <div class="card-body">
    <h5 class="card-title">INTRO</h5>
    <p class="card-text">
        <?php
        session_start();

        echo "Welcome to my website";

        if (isset($_SESSION["username"])) {
            echo "Welcome to our website ".$_SESSION["username"]."<br>";
            echo "<b>My favourite hobby".$_SESSION["hobby"]."</b>";
        }

        ?>
    </p>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>