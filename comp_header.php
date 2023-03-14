<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="app.css">
  <title>
        <?php $_title ?? 'Momondo'?>
  </title>
</head>
<!--Return false is written because it opens the menu when the user right clicks the page. Remove to disable-->
<body oncontextmenu="toogle_menu(); return false">  
  <div id="menu" onclick="toogle_menu()">
    <div class="left">
      <a href="view_index.php">Flights</a>
      <a href="view_holidays.php">Holidays</a>
      <a href="view_car_hire.php">Car hire</a>
      <a href="view_stays.php">Stays</a>
      <a href="view_things_to_do.php">Activities</a>
      <a href="view_train_and_buses.php">Transport</a>
      <a href="view_campers.php">Campers</a>
    </div>
  </div>
  <nav>
  <a href="/"><img src="images/momondo-logo-img.png" alt="img"></a>
    <button onclick="toogle_menu()">☰</button>
  </nav>