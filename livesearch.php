<?php

/* MySQL server */
$db_hostname = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "skywars";



// Open connection to the MySQL DB server
$db_connection = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

// Check connection to the MySQL DB server
if (mysqli_connect_errno()) {
  echo "Failed to connect to the MySQL server: " . mysqli_connect_error();
  exit();
}



// Check if $_GET super global variable is not null
// Fixes "Undefined array key" error
if (isset($_GET['results'])) {
  // Get searched data with $_GET
  // Sent through ajax_search.js
  $livesearh = $_GET['results'];
  $livesearh = mysqli_real_escape_string($db_connection, $livesearh);

  // Select data from DB
  mysqli_select_db($db_connection, "sw_player");
  $db_query_livesearch = "SELECT player_name FROM sw_player WHERE player_name LIKE '%" . $livesearh . "%' LIMIT 10";
  $db_results_livesearch = mysqli_query($db_connection, $db_query_livesearch);

  // Check if at least 1 character is entered in the search bar
  if (strlen($livesearh) > 1) {
    while ($row = mysqli_fetch_array($db_results_livesearch)) {
      echo '<a href="search.php?q=' . $row["player_name"] . '">' . $row["player_name"] . '</a><br>';
    }
  }
}



// Close connection to the MySQL DB server
mysqli_close($db_connection);

?>