<?php
$s
 = "your_server_name";
$username = "your_username";
$password = "your_password";
$dbname = "booking app";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM bus_categories";
$result = $conn->query($sql);

// Populate options
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['category_id'] . "'>" . $row['category_name'] . "</option>";
    }
}

$conn->close();
?>