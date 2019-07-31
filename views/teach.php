<?php
require_once(__DIR__.'/getForTeach.php');
$data = $_GET;
$flag = 0;
if(isset($data['error'])){
    if($data['error'] === 'courseAlreadyAssignedToInstructor') {
        $flag = 1;
    }elseif ($data['error'] === 'courseNotAlreadyAssignedToInstructor'){
        $flag = 2;
    }
    elseif ($data['error'] === 'chooseCourseId'){
        $flag = 3;
    }
    elseif ($data['error'] === 'chooseInstructorId'){
        $flag = 4;
    }
}elseif (isset($data['state'])){
 if($data['state'] === 'InstructorAssignedToCourse'){
    $flag = 5;
 }
 elseif ($data['state'] === 'InstructorUnAssignedFromCourse'){
     $flag = 6;
 }
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

    <title>Assign Instructor</title>
</head>

<body>
<header>
 
<nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo">
        <a href="home_mm.html" class="navbar-brand" style="color: #a2a2a2"><strong>Welcome</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                
				<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Admins
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="createAdmin_basma.html">Create</a>
          <a class="dropdown-item" href="adminDashboard_mm.php">Dashboard</a>
        </div>
				
				<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Instructors
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="createInstructor_basma.php">Create</a>
          <a class="dropdown-item" href="instructorDashboard_mm.html">Dashboard</a>
        </div>
                
				
				<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Students
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="createStudent_basma.html">Create</a>
          <a class="dropdown-item" href="studentDashboard_mm.php">Dashboard</a>
        </div>
                
				
				<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Courses
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="createCourse_basma.php">Create</a>
          <a class="dropdown-item" href="courseDashboard_mm.php">Dashboard</a>
        </div>
				<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Tracks
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="createTrack_basma.html">Create</a>
          <a class="dropdown-item" href="trackDashboard_mm.html">Dashboard</a>
		  
        </div> 
		
			<li class="nav-item dropdown">
			<a role="button" href="teach.php" class="navbar" style="color: #a2a2a2">Teach</a>
       
		
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
    <br><br><br><br>
    <?php
    if($flag === 1){
        echo '<div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>WARNING!</strong> This Instructor is already assigned to this Course</div>';
    }
    elseif ($flag === 2){
        echo '<div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>WARNING!</strong> This Instructor is not assigned to this Course</div>';
    }
    elseif ($flag === 3){
        echo '<div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>WARNING!</strong> Please choose Course ID then try again</div>';
    }
    elseif ($flag === 4){
        echo '<div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>WARNING!</strong> Please choose Instructor ID then try again</div>';
    }
    elseif ($flag === 5){
        echo '<div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>CONGRATS!</strong> Instructor assigned to Course Successfully</div>';
    }
    elseif ($flag === 6){
        echo '<div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>CONGRATS!</strong> Instructor unassigned from Course Successfully</div>';
    }
    ?>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-sm-6 align-self-center auth-wrapper">
                <div class="auth-intro">
                    <h1 class="auth-title">Assign</h1>
                    <form id="assignInstructor" method="post" action="/app/Controllers/teachAssign.php">
                        <select name="course_id" class="form-control">
                            <option disabled selected >Course Name</option>
                                <?php
                                foreach ($courses as $course){?>
                            <option value="<?php echo $course->getId(); ?>"> <?php echo $course->getName() ?></option>
                                <?php
                                }
                                ?>
                        </select>

                        <select name="instructor_id" class="form-control">
                            <option disabled selected >Instructor Name</option>
                            <?php
                            foreach ($instructors as $instructor){?>
                                <option value="<?php echo $instructor->getId(); ?>"> <?php echo $instructor->getName() ?></option>
                                <?php
                            }
                            ?>
                        </select>

                        <button type="submit" name="assign" id="btn_assign" class="form-control d-block w-100 btn btn-primary">Assign</button>
                    </form>

                        <hr>
                    <form id="UnAssignInstructor" method="post" action="/app/Controllers/teachUnassign.php">
                        <select name="course_id" class="form-control">
                            <option disabled selected >Course Name</option>
                            <?php
                            foreach ($courses as $course){?>
                                <option value="<?php echo $course->getId(); ?>"> <?php echo $course->getName() ?></option>
                                <?php
                            }
                            ?>
                        </select>

                        <select name="instructor_id" class="form-control">
                            <option disabled selected >Instructor Name</option>
                            <?php
                            foreach ($instructors as $instructor){?>
                                <option value="<?php echo $instructor->getId(); ?>"> <?php echo $instructor->getName() ?></option>
                                <?php
                            }
                            ?>
                        </select>

                        <button type="submit" name="unassign" id="btn_remove" class="form-control d-block w-100 btn btn-danger">Unassign</button>
                    </form>
                    <br>
                    <div class="text-center">
                        <a href="courseDashboard_mm.php" target="_blank"><button class="btn btn-secondary mb-1">Course Dashboard</button></a>
                        <a href="instructorDashboard_mm.php" target="_blank"><button class="btn btn-secondary mb-1">Instructor Dashboard</button></a>
                    </div>
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