
<?php
$q = $_GET["q"];

include('sqlconnected.php');

$success = '<div class="alert alert-success" role="alert">
                Connected successfully
                </div>';

echo $success;

$sql = "SELECT id, firstname, lastname, age, hometown, job FROM user WHERE id = '" . $q . "'";

$result = $conn->query($sql);

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
if (!empty($result) && $result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['firstname'] . "</td>";
    echo "<td>" . $row['lastname'] . "</td>";
    echo "<td>" . $row['age'] . "</td>";
    echo "<td>" . $row['hometown'] . "</td>";
    echo "<td>" . $row['job'] . "</td>";
    echo "</tr>";
  }
} else {
  echo "0 results";
}
echo "</table>";

$conn->close();
?>