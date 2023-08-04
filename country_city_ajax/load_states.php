<?php
// Connect to the database
include('connection.php');

$cityId = $_POST['cityId'];

$query = "SELECT * FROM states WHERE city_id = $cityId";
$result = mysqli_query($connection, $query);

$options = '';
while ($row = mysqli_fetch_assoc($result)) {
  $options .= "<option value='{$row['id']}'>{$row['name']}</option>";
}

echo $options;
?>
