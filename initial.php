<!DOCTYPE html> 
<!--cand nue sti logat si nu ai acces la nimic-->
<html>
<head>
	<title>Home</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> 
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
 <link rel="stylesheet" href="css/admin.css"> 
 </head>
</head>
<body> 
<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./images/v.jpg')">
			<div class="overlay"></div>
		</div> 
		
	<div class="header"> 
	</div>
	<div class="content"> 
<div class="navbar">  
 <a href="login.php">Login</a> 
<div class="dropdown">
  <button class="dropbtn" onclick="myFunction()">Cours
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="myDropdown"> 
   
    <a href="login.php">C#</a>
    <a href="login.php">Java</a>
    <a href="login.php">Python</a>
  </div>
  </div>   
    <a href="info.php">Info</a> 
  <a href="index.php">Home</a>
</div> 
</div> 
	<div class="intro">
    <div class="container">  
		<h1>SITE DE CURSURI IT</h1>
    <div class="col-md-4 text-center"> 
    <button id="button" name="button" class="btn btn-primary"><a href="read_more.php">Citește mai mult</a></button> 
</div>
</div>

</div>  
		<script>
// Când utilizatorul face click pe buton,
//comutarea între ascundere și afișarea conținutului derulant 
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

//Închideți meniul  dacă utilizatorul face clic în afara acestuia
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>  
	</header>
</body>
</html>