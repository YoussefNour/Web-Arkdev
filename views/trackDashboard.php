<?php
require_once(__DIR__ . '/../app/Repository/TrackRepository.php');
$trackRepo = new TrackRepository();
$tracks = $trackRepo->getAll();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/main.css">

    <title>Workshop | Dashboard</title>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Simple App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/app/Controllers/logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<article class="main container">
    <section>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>

            <?php
            foreach ($tracks as $track) {
                echo '<tr>';
                echo '<th scope="row">' . $track->getId() . '</th>';
                echo '<td>' . $track->getFname() . '</td>';
                echo '<td>' . $track->getEmail() . '</td>';

                echo '<td>';
                echo '<a class="btn btn-primary" href="/edit.php?id=' . $track->getId() . '">Edit</a>';
                echo '<a class="btn btn-danger m-lg-1" href="/app/Controllers/delete.php?id=' . $track->getId() . '">Delete</a>';
                echo '</td>';

                echo '</tr>';
            }
            ?>

            </tbody>
        </table>
    </section>
</article>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/main.js"></script>

</body>
</html>
