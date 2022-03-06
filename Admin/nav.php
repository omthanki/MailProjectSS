<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
        .navbar-nav {
            margin-left: auto;
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-white bg-secondary">
        <a class="navbar-brand text-white" href="index.php">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="adduser.php">Add Receipents</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Add Department</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Add State</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#" onclick="formToggle('importFrm');">Import</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="export.php">Export</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../logout.php">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="col-md-12" id="importFrm" style="display: none;">
        <form action="importdata.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" />
            <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
        </form>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>