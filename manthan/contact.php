<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Manthan Films</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" href="CSS/home.css">
   <meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link rel="stylesheet" type="text/css" href="#">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   	integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   	crossorigin=""/>
	<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   	integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   	crossorigin=""></script>
   <style>
body  {
  background-image: url("images/82clicks.jpg");
  background-size: cover;
}
</style>
</head>
<body>
<div class= "loader"></div>
      <nav class="navbar navbar-expand-lg">
         <a class="navbar-brand" href="index.php">Manthan Films</a>
         <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-expand">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="nav-expand">
            <div class="navbar-nav ml-auto">
               <a class="nav-item nav-link" href="#">Portfolio</a>
               <a class="nav-item nav-link" href="about.php">About</a>
               <a class="nav-item nav-link" href="contact.php">Contact</a>
            </div>
         </div>
      </nav>
</div>
			<h1>CONTACT ME</h1>
			<form method="post" action="contactprocess.php">
				<div class="inputBox">
					<input type="text" name="name" value="" autocomplete="off" required>
					<label>Name</label>	
				</div>
				<div class="inputBox">
					<input type="text" name="email" value="" autocomplete="off" required>
					<label>Email</label>
				</div>
				<textarea placeholder="Message" name="message" class="contact-form-textarea" autofocus></textarea>
				<input type="submit" name="submit" value="SUBMIT">
			</form>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"></script>
<script type="text/javascript">
		window.addEventListener("load", function () {
    	const loader = document.querySelector(".loader");
    	loader.className += " hidden"; // class "loader hidden"
		});
	</script>
    <script>
		function openNav(){
			document.getElementById('mysidenav').style.width = "250px";
		}
	</script>
	<script>
		function closenav(){
			document.getElementById('mysidenav').style.width = "0";
		}
	</script>
</body>