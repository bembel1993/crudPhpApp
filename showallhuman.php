<html>

<head>
    <title>Display all</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="selectuser.js"></script>
</head>

<body>
    <a href="ex.php">
        <button class="btn btn-primary hBack" id="back">
            <span class="glyphicon glyphicon-arrow-left" aria-hidden="true">
                
            </span>
        </button>
    </a>
    <?php
    include('sqlconnected.php');

    $sql = "SELECT id, firstname, lastname, age, hometown, job
        FROM user";

    $result = $conn->query($sql);

    echo "<table border='1'>
<tr>
<th>ID</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
<th>Active</th>
</tr>";
    if (!empty($result) && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            $id = $row['id'];
            echo "<td>" . $row['firstname'] . "</td>";
            echo "<td>" . $row['lastname'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['hometown'] . "</td>";
            echo "<td>" . $row['job'] . "</td>";
            echo "<td>
            <button style='background-color:green'>
                    <a href='update.html?id=" . $row['id'] . "' style='color:white'>
                    <span class='glyphicon glyphicon-refresh'></span>
                    </a>
                </button>
                <button style='background-color:red'>
                    <a href='delete.php?id=" . $row['id'] . "' style='color:white'>
                    <span class='glyphicon glyphicon-trash'></span>
                    </a>
                </button>
            </td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    echo "</table>";

    $conn->close();
    ?>

</body>

</html>