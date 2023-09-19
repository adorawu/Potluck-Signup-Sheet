<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$conn = new mysqli("spring-2023.cs.utexas.edu", "cs329e_bulko_adorawu", 'Drip$Duet=soft',"cs329e_bulko_adorawu");


$name = $_POST['name'];
$items = $_POST['items'];
$sql = "INSERT INTO dinner (name, items) VALUES ('$name', '$items')";



if ($conn->query($sql) === TRUE) {
    $query = "DELETE FROM dinner WHERE name =' ' OR name IS NULL";
    $result = $conn->query($query);
    
    $query = "SELECT * FROM dinner";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        echo "<table border='1'><tr><th>Name</th><th>Items</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["name"] . "</td><td>" . $row["items"] . "</td></tr>";
        }

        echo "</table>";
    } 
    else {
        echo "Nobody is bringing anything yet :)";
    }
} 

// else {
//     echo "Nobody is bringing anything yet :)";
// }

$conn->close();
}
?>

