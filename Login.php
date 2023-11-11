<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="myHeader">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="Home.html">
                        <img src="Logo/AlBums.png" class="img-fluid" alt="Logo" width="45" height="45">

                    </a>
                </div>
                <div class="col-md-4 ">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>



                <div class="col-md-4 ">
                    <button class="btn btn-primary float-end" type="submit">Login</button>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- header -->

    <div class="myMenu">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                  <a class="navbar-brand d-none" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link text-white" href="Trending.html">Trending</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white" href="Aboutus.html">About Us</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Categories
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
    </div>
    <!-- menu -->

    <div>
      <?php
        if(isset($_POST["created"])) {
          $uname = $_POST["uname"];
          $password = $_POST["password"];


          $sql = "SELECT * FROM users WHERE uname = '$uname' AND password = '$password' LIMIT 1 ";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
          
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            echo '
              <script>
                window.location.href = "Home.html";
                alert("Login success")
              </script>
            ';
          } else {
            echo '
              <script>
                window.location.href = "Login.php";
                alert("Fail")
              </script>
            ';
          }

         

        }
      ?>
    </div>

    <form action="Login.php" method="post">
      <div class="boxLogin py-4 text-white container">
        <h1>Login</h1>
        <p>Fill up with correct values.</p>
        <div class="row">
          <div class="col-ms-2">

            <label for="uname"><b>User Name</b></label>   
            <input class="form-control" type="text" name="uname" required>  

            <label for="password"><b>Password</b></label>   
            <input class="form-control" type="password" name="password" required>  
            <br>
            <input class="form-control btn btn-primary" type="submit" name="created" value="Login">
          </div>
        </div>
        
      </div>
    </form>
    

    
  </div>
    
</body>
</html>