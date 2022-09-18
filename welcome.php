<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table thead tr {
    background-color: grey;
    color: #ffffff;
    text-align: left;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}


    </style>


    <title>PHP login system!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Php Login System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      
     
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
      </li>
  </ul>
  </div>


  </div>
</nav>

<div class="container mt-4">
<h3><?php echo "Welcome ". $_SESSION['username']?>! You can now use this website</h3>
<hr>

<h2> Headlines </h2>

<table class="styled-table">
    <thead>
        <tr>
            <th>Place</th>
            <th>Breaking News</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Udhampur</td>
            <td> Two men aressted for robbery in  HDFC bank.</td>
        </tr>
        <tr>
            <td>Roorkee ,Uttrakhand</td>
            <td>Goverment announced subsidy for residents in local colleges.</td>
        </tr>
        <tr>
            <td>Nagpur ,Mumbai</td>
            <td>Floods in local area due to heavy rains.residents are advised to take their umbrella with them to avoid getting wet. </td>
        </tr> 
        <tr>
            <td> Local Mumbai </td>
            <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ducimus blanditiis est animi cum recusandae non nam voluptas incidunt deleniti asperiores necessitatibus harum, natus explicabo perspiciatis velit! Vitae repellat sequi debitis dicta, beatae laborum a fugit, dolores cumque quis est vel consequatur exercitationem tenetur necessitatibus corrupti? </td>
        </tr>
        <!-- and so on... -->
    </tbody>
</table>


<footer class="bd-footer py-4 py-md-5 mt-5 bg-light">
  <div class="container py-4 py-md-5 px-4 px-md-3">
    <div class="row">
      <div class="col-lg-3 mb-3">
        
        <ul class="list-unstyled small text-muted">
          <li class="mb-2">This website is made by swap_inc. and maintained by brosStudios.</li>
          
          
        </ul>
      </div>
      <div class="col-6 col-lg-2 offset-lg-1 mb-3">
        <h5>Links</h5>
        <ul class="list-unstyled">
          <li class="mb-2">Home</li>
          <li class="mb-2">Docs</li>
          <li class="mb-2">Examples</li>
          <li class="mb-2">Icons</li>
          <li class="mb-2">Themes</li>
          <li class="mb-2">Blog</li>
          <li class="mb-2">Swag Store</li>
        </ul>
      </div>
      <div class="col-6 col-lg-2 mb-3">
        <h5>Guides</h5>
        <ul class="list-unstyled">
          <li class="mb-2">Getting started</li>
          <li class="mb-2">Starter template</li>
          <li class="mb-2">Webpack</li>
          <li class="mb-2">Parcel</li>
          <li class="mb-2">Vite</li>
        </ul>
      </div>
      <div class="col-6 col-lg-2 mb-3">
        <h5>Projects</h5>
        <ul class="list-unstyled">
          <li class="mb-2">Bootstrap 5</li>
          <li class="mb-2">Bootstrap 4</li>
          <li class="mb-2">Icons</li>
          <li class="mb-2">RFS</li>
          <li class="mb-2">npm starter</li>
        </ul>
      </div>
      <div class="col-6 col-lg-2 mb-3">
        <h5>Community</h5>
        <ul class="list-unstyled">
          <li class="mb-2">Issues</li>
          <li class="mb-2">Discussions</li>
          <li class="mb-2">Corporate sponsors</li>
          <li class="mb-2">Open Collective</li>
          <li class="mb-2">Stack Overflow</li>
        </ul>
      </div>
    </div>
  </div>
</footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
