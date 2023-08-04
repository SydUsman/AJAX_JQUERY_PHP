<?php
// Connect to the database
include('connection.php');

$query = "SELECT * FROM countries";
$result = mysqli_query($connection, $query);

$options = '';
while ($row = mysqli_fetch_assoc($result)) {
  $options .= "<option value='{$row['id']}'>{$row['name']}</option>";
}

echo $options;
?>
