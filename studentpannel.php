<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Student Pannel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/styleb.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-sm bg-info">
        <a class="nav-link" href="#">Online Appointment System</a>
          
        <ul class="navbar-nav ml-auto">
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home.php">
           Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            Settings
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php">
            Logout
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">
           <?php echo $_SESSION['name'];?>
          </a>
        </li>
    </ul>
</nav>
    
    <section>

      <div class="col-sm-12">
            <div class="contain-table">
              <div class="col-sm-5"></div>
                <div class="col-sm-4">
                  <div class="table-element">
                    <div class="card" style="width: 55rem;">
                      <div class="card-body">
                      <h5 class="u">Enjoy Your Day!</h5>
                      <h6 class="t">You don't have any appointments today</h6>
                      <p class="y"><a href="#"> +Appointment</a></p>
                      <input type="date" name="calendar" id="calendar">
                      </div>
                    </div>
                  </div>
               </div>
              <div class="col-sm-3"></div>
            </div>
       </div>
    
    </section>

</body>
</html>