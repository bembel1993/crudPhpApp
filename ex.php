<html>

<head>
    <title>Crud App</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="selectuser.js"></script>
</head>

<body>
    <?php
    include('sqlconnected.php');
    session_start();
    print_r($_SESSION);
    ?>
    <div class="pri">
    </div>
    <div>
        <p>
            <button type="button" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-log-out"></span>
                <a href="logout.php">LogOut</a>
            </button>
        </p>
        <center>
        <h3>
            <a href="private_office.php" class="readtxtwel">
                Private office
            </a>
        </h3>
        </center>
    </div>
    <form>
        <div class="">
            <h3>Select a User:</h3>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" 
            name="users" onchange="showUser(this.value)">
                <?php
                $sql = "SELECT id, firstname, lastname FROM user";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                        $firstname = $row['firstname'];
                        $lastname = $row['lastname'];
                ?>
                        <option value="<?php echo $id . " - "; ?>" selected><?php echo $id; ?>
                            <?php echo $firstname . " " . $lastname; ?>
                        </option>
                <?php
                    }
                } else {
                    echo "<option value='user is not'>";
                }
                ?>
            </select>
        </div>
    </form>
    <center>
        <a href="update.html">
            <button id="update">Update Data</button>
        </a>

        <a href="add.html">
            <button id="add">Add Data</button>
        </a>
        <a href="showallhuman.php">
            <button id="show">Show all users</button>
        </a>
    </center>
    <br>
    <center>
        <p>
        <div id="txtHint"><b>
                <h3>User info will be listed here.</h3>
            </b></div>
        </p>
    </center>

</body>

</html>