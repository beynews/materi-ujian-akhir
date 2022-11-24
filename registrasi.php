<html>
  <head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
  <h1 class="text-center">Form Pendaftaran Santri Baru </h1>

<?php

$servername = "sql303.epizy.com";
$username = "epiz_32958264";
$password = "biyvlnYKPfdQ";
$dbname = "epiz_32958264_datasantribaru";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

  
    ?>

           

       <div class="container">
  <div class="row">
    <div class="col-sm-6">
    <form action="updateform.php" method="POST">
       <div class="form-group">
    <label>Masukan Nama </label>
    <input type="text" class="form-control" name="Nama" name=""  placeholder="Masukan Nama">
    <small  class="form-text text-muted"></small>
  </div>

       <div class="form-group">
    <label>Alamat :</label>
    <input type="text" class="form-control" name="Alamat"  placeholder="Masukan Alamat">
    <small  class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address :</label>
    <input type="email" class="form-control" name="Email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="Password" id="exampleInputPassword1" placeholder=" Masukan Password">
  </div>

  <div class="form-group">
    <label >No Handphone :</label>
    <input type="text" class="form-control" name="NoHandphone"  placeholder="No Handphone">
  </div>

  <div class="form-group">
    <label>Tanggal Lahir :</label>
    <input type="text" class="form-control" name="TanggalLahir"  placeholder="Tanggal Lahir">
  </div>

  <div class="form-group">
    <label>Motivasi :</label>
    <input type="text" class="form-control" name="Motivasi"  placeholder="Motivasi">
  </div>


  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>


      
    </form>
    </div>
  </div>
</div>
</body>
</html>
    
