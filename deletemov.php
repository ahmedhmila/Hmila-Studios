<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projet";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["name"])) {    $movieName = $_POST["name"];

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "DELETE FROM movies WHERE name = '$movieName'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Movie removed successfully.";
    } else {
        echo "Error removing movie: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Invalid request.";
}
?>
