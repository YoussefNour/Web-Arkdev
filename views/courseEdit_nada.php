<?php
require_once(__DIR__.'/../app/Repository/CourseRepository.php');
require_once(__DIR__.'/../app/Models/Course.php');

$data = $_GET;
if(!isset($data['id']) || empty($data['id'])){
    echo 'Error in this Request';
    exit();
}
else {
    $courseRepo = new CourseRepository();
    $course = $courseRepo->getById($data['id']);
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>project | edit</title>
</head>

<body>
<header>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo">
        <a class="navbar-brand" href="#"><strong>Welcome</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admins
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Create</a>
                        <a class="dropdown-item" href="#">Dashboard</a>
                    </div>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Instructors
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Create</a>
                        <a class="dropdown-item" href="#">Dashboard</a>
                    </div>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Students
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Create</a>
                        <a class="dropdown-item" href="#">Dashboard</a>
                    </div>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Courses
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Create</a>
                        <a class="dropdown-item" href="#">Dashboard</a>
                    </div>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tracks
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Create</a>
                        <a class="dropdown-item" href="#">Dashboard</a>
                    </div>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>
        </div>
    </nav>

</header>
<div class="main">
    <div class="main-img">
        <img src="../images/books.jpg" class="banner" alt="banner"/>
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center full-height">
            <div class="col-sm-6 align-self-center auth-wrapper">
                <div class="auth-intro">
                    <h2 class="auth-title"> Edit Course Information </h2>
                </div>
                <form id="courseForm" method="post" action="\app\Controllers\updateCourse.php">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" type="name" placeholder="Edit Your Name" name="name" class="form-control" value="<?php echo $course->getName(); ?>" required/>
                    </div>
                    <div class="form-group">
                        <label for="name">ID</label>
                        <input id="id" type="name" placeholder="Course ID" name="id" class="form-control" value="<?php echo $course->getId(); ?>" required/>
                    </div>
                    <div class="form-group">
                        <label for="name">Track</label>
                        <input id="name" type="name" placeholder="Exist in which Track" name="track_id" class="form-control" value="<?php echo $course->getTrackId(); ?>" required/>
                    </div>
                    <div class="form-group">
                        <i class="fa fa-edit"></i>
                        <label for="description">Description</label>
                        <textarea id="description" placeholder="Add info..." name="description"  class="form-control" required><?php echo $course->getDescription(); ?></textarea>
                    </div>

                    <div class="text-center submit-btn">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>

            </div>
        </div>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../js/jquery-3.3.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.validate.js"></script>
<script src="../js/main.js"></script>

</body>
</html>