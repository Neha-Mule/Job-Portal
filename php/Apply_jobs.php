<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>

<body>
    <!-- nav vbar section -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">

                RecruitYes
            </a>
        </div>
    </nav>
    <!-- php -->
<?php
include('connection.php');
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$email=$_REQUEST['email'];
$number=$_REQUEST['number'];
$Address=$_REQUEST['Address'];
$Gender=$_REQUEST['Gender'];
$age=$_REQUEST['age'];
$tenth=$_REQUEST['tenth'];
$twelth=$_REQUEST['twelth'];
$College=$_REQUEST['College'];
$Branch=$_REQUEST['Branch'];
$skills=$_REQUEST['skills'];
$Projects=$_REQUEST['Projects'];
$city=$_REQUEST['city'];
$state=$_REQUEST['state'];
$zip=$_REQUEST['zip'];



$sql="INSERT INTO `jobs`(`fname`, `lname`, `email`, `number`, `Address`, `Gender`, `age`, `tenth`, `twelth`, `College`, `Branch`
, `skills`, `Projects`, `city`, `state`, `zip`)
 VALUES ('$fname','$lname','$email','$number','$Address','$Gender','$age','$tenth','$twelth','$College',
 '$Branch','$skills','$Projects','$city','$state','$zip')";


$results=mysqli_query($con,$sql);

if($results)
{
 echo '<div class="popup my-5">
 <div class="alert alert-success" role="alert">
 <h4 class="alert-heading">' . $_POST['fname'] . ' your details has been succesfully submited</h4>
 <p>If your skill matches with our corrent job role the recruiters will contact you</p>
 <hr>
 <div class="alert alert-success" role="alert">
<a href="\php\displayphp\jobs_display.php" class="alert-link">Apply for more jobs</a>. 
 </div></div>';
}
else{
    echo"failed";
}
?>

<footer class="bd-footer py-4 py-md-5 mt-5 bg-body-tertiary">
        <div class="container py-4 py-md-5 px-4 px-md-3 text-body-secondary">
          <div class="row">
            <div class="col-lg-3 mb-3">
              <a class="d-inline-flex align-items-center mb-2 text-body-emphasis text-decoration-none" href="/" aria-label="Bootstrap">
                
                <title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
                <span class="fs-5">RecruitYes</span>
              </a>
              <ul class="list-unstyled small">
                <li class="mb-2">Designed and built for the job seeker RecruitYes team with the help of our contributors</a>.
              </ul>
            </div>
            <div class="col-6 col-lg-2 offset-lg-1 mb-3">
              <h5>Links</h5>
              <ul class="list-unstyled">
                <li class="mb-2"><a href="/frontednd/home.html">Home</a></li>
                <li class="mb-2"><a href="/frontednd/contact.html">Contact</a></li>
                
              </ul>
            </div>
          </div>
        </div>
      </footer>
  </body>
</html>

