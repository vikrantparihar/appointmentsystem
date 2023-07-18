<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teacher Panel</title>
  <!-- <link rel="stylesheet" href="../css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="../css/normalize.min.css">
  <link rel="stylesheet" href="stylec.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>


    <h1 style="text-align: middle;">  <?php
class Calendar {

    private $active_year, $active_month, $active_day;
    private $events = [];

    public function __construct($date = null) {
        $this->active_year = $date != null ? date('Y', strtotime($date)) : date('Y');
        $this->active_month = $date != null ? date('m', strtotime($date)) : date('m');
        $this->active_day = $date != null ? date('d', strtotime($date)) : date('d');
    }

    public function add_event($txt, $date, $days = 1, $color = '') {
        $color = $color ? ' ' . $color : $color;
        $this->events[] = [$txt, $date, $days, $color];
    }

    public function __toString() {
        $num_days = date('t', strtotime($this->active_day . '-' . $this->active_month . '-' . $this->active_year));
        $num_days_last_month = date('j', strtotime('last day of previous month', strtotime($this->active_day . '-' . $this->active_month . '-' . $this->active_year)));
        $days = [0 => 'Sun', 1 => 'Mon', 2 => 'Tue', 3 => 'Wed', 4 => 'Thu', 5 => 'Fri', 6 => 'Sat'];
        $first_day_of_week = array_search(date('D', strtotime($this->active_year . '-' . $this->active_month . '-1')), $days);
        $html = '<div class="calendar">';
        $html .= '<div class="header">';
        $html .= '<div class="month-year">';
        $html .= date('F Y', strtotime($this->active_year . '-' . $this->active_month . '-' . $this->active_day));
        $html .= '</div>';
        $html .= '</div>';
        $html .= '<div class="days">';
        foreach ($days as $day) {
            $html .= '
                <div class="day_name">
                    ' . $day . '
                </div>
            ';
        }
        for ($i = $first_day_of_week; $i > 0; $i--) {
            $html .= '
                <div class="day_num ignore">
                    ' . ($num_days_last_month-$i+1) . '
                </div>
            ';
        }
        for ($i = 1; $i <= $num_days; $i++) {
            $selected = '';
            if ($i == $this->active_day) {
                $selected = ' selected';
            }
            $html .= '<div class="day_num' . $selected . '">';
            $html .= '<span>' . $i . '</span>';
            foreach ($this->events as $event) {
                for ($d = 0; $d <= ($event[2]-1); $d++) {
                    if (date('y-m-d', strtotime($this->active_year . '-' . $this->active_month . '-' . $i . ' -' . $d . ' day')) == date('y-m-d', strtotime($event[1]))) {
                        $html .= '<div class="event' . $event[3] . '">';
                        $html .= $event[0];
                        $html .= '</div>';
                    }
                }
            }
            $html .= '</div>';
        }
        for ($i = 1; $i <= (42-$num_days-max($first_day_of_week, 0)); $i++) {
            $html .= '
                <div class="day_num ignore">
                    ' . $i . '
                </div>
            ';
        }
        $html .= '</div>';
        $html .= '</div>';
        return $html;
    }

}
?> <?php echo $_SESSION['']; ?></h1>
    










  <!-- <nav>
        <a href="../home.php">Home</a>
        <a href="./login.php">Settings</a>
        <a href="./signup.php">Logout</a>
        <a href="./signup.php"></a>
</nav> -->

  <nav class="navbar navbar-expand-sm bg-info">
    <a class="up" href="#">Online Appointment System</a>


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

    <div class="col-sm-12">
      <div class="heading">
        <p>AVAILBILITY SLOT</p>
         <div class="col-sm-2"></div>
            <div class="col-sm-6">
             <div class="heading">
              <p>Select Date and Time Slot</p>
             </div>
            </div>
          <div class="cal4"></div>
      </div>
    </div>

  </section>
</body>

</html>