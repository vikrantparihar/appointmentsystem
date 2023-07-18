<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Panel</title>
    <!-- <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/normalize.min.css"> -->
    <link rel="stylesheet" href="stylea.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>

      
<nav class="navbar navbar-expand-sm bg-info">
      <a href="#">Online Appointment System</a>

 <!-- <ul class="navbar-nav ml-auto">
      <li class="nav-item">
          <a class="nav-link" href="#">
          Online Appointment System
          </a> -->
          
          <ul class="navbar-nav ml-auto">
      </li>
      <li class="nav-item">
          <a class="nav-link" href="../home.php">
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

        <!-- <div class="col-sm-12">
            <p> Glad to see you back!
            <div class="appoi">
                            <p>My Appointments</p>
                            <p>Check your active Appointments</p>
                            </div>
                        </div>     --> 

          <div class="col-sm-12">
          <p> Glad to see you back! <?php echo $_SESSION['name'];?></p>
            <div class="contain-table">
              <div class="col-sm-5"></div>
                <div class="col-sm-4">
                  <div class="table-element">
                    <div class="card" style="width: 35rem;">
                      <div class="card-body">
                        <h5 >My Appointments</h5>
                        <h6 >Check your active Appointment and update their appointment status</h6>
                        <a href='calander.php'><button class="su">Submit</button>
                      </div>
                    </div>
                </div>
              <div class="col-sm-3"></div>                  
            </div>
           </div>

    </section>
</body>
</html>