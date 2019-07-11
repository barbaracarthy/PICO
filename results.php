<!DOCTYPE html>
<html>
<head>
	<title></title>
	        <link rel="stylesheet" type="text/css" href="style.css"/>
			<meta name='viewport' content='width=device-width, initial-scale=1'>
		    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
		    <meta charset="utf-8">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
	        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
		    <meta name="viewport" content="width=device-width, initial-scale=1">
		    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div style="background-color: black;">


  <div class="container-fluid">
    <div class="navbar-header">
      <h1 style="color: white;">PICO <em style="font-size:30px; color: tomato; font-family: Lucida Sans Unicode;">issues confirmation</em></h1>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.html" style="color: white;">HOME</a></li>
      <li><a href="about.html" style="color: white;">ABOUT US</a></li>
      <li><a href="download.html" style="color: white;">DOWNLOAD</a></li>
      <li><a href="contact.html" style="color: white;">CONTACT</a></li>
    </ul>
  </div>

</div>


<?php

   $name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
        echo "<h2>please confirm your submissions</h2>";
        echo "HELLO !  ";
        echo $name;
        echo "<br>";
		echo "Feedback will be sent to this email ";
		echo "<br>";
		echo $email;
		echo "<br>";
		echo "About your website ";
		echo $website;
		echo "<br>";
		echo "Concerning the following issues  ";
		echo "<br>";
		echo $comment;

		
	?>
<footer>
  <div style="text-align: center; padding: 10px; background-color: rgb(40, 40, 40); color: white;">
    <br>
    <h3>Thank you for posting your inquiries and issues</h3>

    <p>Help make Pico better by checking ou the <a href="git.html"><font color="tomato">GitHub repository </font></a>and submitting pull requests.</p>
    <p>You can also subscribe for our  <a href=""><font color="tomato">newsletter.</font></a></p> 
    <p>Reach us on our toll free line<br><font color="tomato"> 0772348745 </font> <br>or<br><font color="tomato"> 070456798 </font> </p>
    
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-facebook"></a>
    <br>
    
  </div>
</footer>


</body>
</html>
