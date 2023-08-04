<?php
include 'connection.php';

if (isset($_POST['country_id'])) {
    $country_id = $_POST['country_id'];

    $conn = getConnection();

    $sql = "SELECT * FROM cities WHERE country_id = $country_id";
    $result = $conn->query($sql);

    $cities = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $cities[] = $row;
        }
    }

    echo json_encode($cities);
}
?>
