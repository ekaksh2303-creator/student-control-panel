<?php
// Database connection settings
$servername = "localhost";
$username = "username"; // replace with your database username
$password = "password"; // replace with your database password
$dbname = "students_db"; // replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetching all students
$sql = "SELECT id, name, email, phone, course FROM students";
$result = $conn->query($sql);

// Start HTML output
$html = "<html><head><title>Student List</title><style>table { width: 100%; border-collapse: collapse; } th, td { border: 1px solid #ddd; padding: 8px; } th { background-color: #f2f2f2; }</style></head><body><h1>Student List</h1><table><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Course</th></tr>";

if ($result->num_rows > 0) {
    // Output data for each row
    while($row = $result->fetch_assoc()) {
        $html .= "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>" . $row["phone"]. "</td><td>" . $row["course"]. "</td></tr>";
    }
} else {
    $html .= "<tr><td colspan='5'>No students found</td></tr>";
}

$html .= "</table></body></html>";

// Closing connection
$conn->close();

// Output the HTML
echo $html;
?>