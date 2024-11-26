<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "valorant";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM agents";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registered Valorant Agents</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="banner">
        <h1>Registered Valorant Agents</h1>
    </header>
    <main>
        <table>
            <tr>
                <th>ID</th>
                <th>Agent Name</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["agent_name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["role"] . "</td></tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No agents found</td></tr>";
            }
            $conn->close();
            ?>
        </table>
    </main>
</body>
</html>
