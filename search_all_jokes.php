<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Accordion - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $(function() {
    $("#accordion").accordion();
  });
  </script>
</head>
<?php
include "db_connect.php";

// Corrected the column name from 'users_id' to 'user_id'
$sql = "SELECT JokeID, Joke_question, Joke_answer, user_id FROM Jokes_table";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<h3>" . $row['Joke_question'] . "</h3>";
        echo "<div><p>" . $row["Joke_answer"] . " submitted by user #" . $row['user_id'] . "</p></div>";
    }
} else {
    echo "0 results";
}
?>
