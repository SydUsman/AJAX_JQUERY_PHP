<?php
// Connect to the database
include('connection.php');

$countryId = $_POST['countryId'];

$query = "SELECT * FROM cities WHERE country_id = $countryId";
$result = mysqli_query($connection, $query);

$options = '';
while ($row = mysqli_fetch_assoc($result)) {
  $options .= "<option value='{$row['id']}'>{$row['name']}</option>";
}

echo $options;
?>
