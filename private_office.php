<html>

<head>
    <title>Private Office</title>
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
        <a href="ex.php">
            <button class="btn btn-primary hBack" id="back">
                <span class="glyphicon glyphicon-backward" aria-hidden="true">

                </span>
            </button>
        </a>
        <center>
            <h3>
                <a href="private_office.php" class="readtxtwel">
                    Private office
                </a>
            </h3>
            <div class="container h-30">
                <div class="w-50 p-3">
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        Directory<input type="text" name="dirname" id="dirname">
                        <br>
                        Select image to upload:
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        <br>
                        <div class="w-25 p-3">
                        <input type="submit" value="Upload Image" name="submit">
                        <br><br>
                        <style class="glyphicon glyphicon-save"></style>
                        </div>
                    </form>
                    <?php
                    if (isset($_GET["img"])) {
                        $n = $_GET["img"];
                        echo "<img src='photos/" . $n . "'>";
                    }
                    ?>
                </div>
            </div>
        </center>
    </div>

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

</body>

</html>