?php
$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$dbname = "booking app";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$bus_category = $_POST['bus_category'];
$user_name = $_POST['user_name'];
$seat_count = $_POST['seat_count'];


$sql = "INSERT INTO bookings (bus_category, user_name, seat_count) VALUES ('$bus_category', '$user_name', '$seat_count')";

if ($conn->query($sql) === TRUE) {
    echo "Booking successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>