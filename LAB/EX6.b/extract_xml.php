<?php
$xml = simplexml_load_file("agents.xml") or die("Error: Cannot create object");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Extract XML Data</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="banner">
        <h1>Valorant Agents (From XML)</h1>
    </header>
    <main>
        <table>
            <tr>
                <th>Agent Name</th>
                <th>Role</th>
            </tr>
            <?php
            foreach ($xml->agent as $agent) {
                echo "<tr><td>" . $agent->name . "</td><td>" . $agent->role . "</td></tr>";
            }
            ?>
        </table>
    </main>
</body>
</html>
