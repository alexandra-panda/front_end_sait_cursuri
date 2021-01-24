<?php
//conexiunea si adaugarea tabelului pentru  introduce cursuri si pret
include 'conn.php';

if(isset($_POST['done'])){

 $name = $_POST['name'];
 $price = $_POST['price'];
 $q = " INSERT INTO `crudtable`(`name`, `price`) VALUES ( '$name', '$price' )";

 $query = mysqli_query($con,$q);
}
?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">  
  <link rel="stylesheet" type="text/css" href="css/insert.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">Add new cours</h1>
 </div><br>

 <label>Name Cours: </label>
 <input type="text" name="name" class="form-control"> <br>

 <label> Pretul: </label>
 <input type="text" name="price" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>