<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/info.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">  
  
  </head>
  <body>  
     	<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/2.jpg')">
			<div class="overlay"></div>
    </div>   
<script>
    
    var intervalID;
     
    function showTime() {
        var d = new Date();
        document.getElementById("clock").innerHTML = d.toLocaleTimeString();
    }
     
    function stopClock() {
        clearInterval(intervalID);
    }
     
    var intervalID = setInterval(showTime, 1000);
    </script>
     
    <p>Ora la moment este: <span id="clock"></span></p>
     
    <div class="contact-info">
      <div class="card">
        <i class="card-icon far fa-envelope"></i>
        <p>sakura.school@gmail.com</p>
      </div>

      <div class="card">
        <i class="card-icon fas fa-phone"></i>
        <p>+37362138292</p>
      </div>
      <div class="card">
        <i class="card-icon fas fa-map-marker-alt"></i>
        <p>Str.Studentilor 3/7</p>
      </div>
	  </div>  


  </body>
</html>