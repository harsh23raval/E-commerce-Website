<!DOCTYPE html>
<html>
<head>
	<title></title>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="css/style.css">	
<style >
.contactform{
	border:1px solid black;
	margin-top: 50px;
	border-radius: 15px;
}	
</style>


</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-sm-offset-1 col-sm-10" contactform>Contact Us:</div>
	</div>
	
	<main>
		<p>Send E-mail</p>
		<form class="contact-form" action="contactform.php" method="post">
			<input type="text" name="name" placeholder="Full Name">
			<input type="text" name="mail" placeholder="Your Email">
			<input type="text" name="subject" placeholder="Subject">
			<textarea name="mesaage" placeholder="Message"></textarea>
			<button type="submit" name="Submit">Send Mail</button>
		</form>
	</main>

	
</div>















<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>