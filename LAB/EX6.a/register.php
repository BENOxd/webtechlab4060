<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "valorant";

    $agent_name = $_POST['agent_name'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO agents (agent_name, email, role) VALUES ('$agent_name', '$email', '$role')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<h1>Agent $agent_name has been registered successfully!</h1>";
    } else {
        echo "<h1>Error: " . $conn->error . "</h1>";
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Valorant Agent</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="banner">
        <h1>Register as a Valorant Agent</h1>
    </header>
    <main>
        <form action="register.php" method="post">
            <label for="agent_name">Agent Name:</label>
            <input type="text" id="agent_name" name="agent_name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="role">Agent Role:</label>
            <select id="role" name="role" required>
                <option value="Duelist">Duelist</option>
                <option value="Controller">Controller</option>
                <option value="Sentinel">Sentinel</option>
                <option value="Initiator">Initiator</option>
            </select>

            <button type="submit">Register</button>
        </form>
    </main>
</body>
</html>
