<?php

require_once(__DIR__ . '/../app/Repository/InstructorRepository.php');
require_once(__DIR__ . '/../app/Controllers/getInstructors.php');


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

    <title>Instructor | Dashboard</title>
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

<!------------------------------------------------------------------------------------------------------------------->
<div class="main">
    <div class="main-img">
        <img style="height:190px"src="../images/books.jpg" class="banner" alt="banner"/>
    </div>
    <form method="get" action="">
    <div style="padding-top:43px; padding-left:210px; marginbackground-color:none;" id="navbar">
        <br><br><br>
        <input type="text" class="form-control col-2 d-inline" placeholder="Instructor Name" name="instructorName" >
        <input type="submit" class="btn btn-primary col-1 d-inline" value="Filter" name="filter">
    </div>
    </form>
<main class="grid">


<?php



foreach ($instructors as &$instructor) {

  echo ' <article>';
  echo ' <img style="height:190px" src="../images/'.$instructor->getImagePath().'"'.' alt="Sample photo">';
  echo ' <div class="text">';
  echo '<p>';
  echo '<b style="text-decoration:underline">Name:</b><br>'.$instructor->getName().'<br>';
  echo '<b style="text-decoration:underline">Email:</b><br>'.$instructor->getEmail().'<br>';
  echo '<b style="text-decoration:underline">Bio: </b><br>'.$instructor->getBio().'<br>';

  echo'  </p>';
  echo' <a class="btn btn-primary m-lg-1" href="../views/instructorEdit_nada.php?id=' . $instructor->getInstructorId(). '">Edit</a> ';
  echo' <a class="btn btn-danger m-lg-1" href="../app/Controllers/deleteInstructor.php?id=' . $instructor->getInstructorId(). '">Delete</a> ';
    echo' </div>';
  echo'</article>';
}

?>

</main>
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
