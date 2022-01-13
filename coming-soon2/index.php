<?php
	$is_email_sent = false;
	if(isset($_POST['send_email']) && !empty($_POST['full_name']) && !empty($_POST['email']) ){
		$msg = "Name: ".$_POST['full_name']." \n";
		$msg .= "Email: ".$_POST['email']." \n";
		$msg .= "Phone: ".$_POST['phone']." \n";
		$msg = wordwrap($msg,70);
		//send email 
		mail("email@example.com","Message from website",$msg);
		$is_email_sent =true;
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Comming Soon</title>
   <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
  	<div class="rscsp_cs_page">
  		<div>
  			<h1>TEEHANISM<span>Systemy</span></h1>
	  		<h2 class="rscsp_title_1">Lorem Ipsum is simply dummy text</h2>
	  		<div class="rscsp_os_box">
	  			<h2>opening soon</h2>
	  			<h3>in north scottsdale</h3>
	  			<h4>be the first to know</h4>
	  		</div>
	  		<form class="rscsp_contact_form" action="" method="post">
					<div class="input-group mb-3">
						<input type="text" class="form-control" name="full_name" placeholder="FULL NAME">
						<div class="input-group-append">
							<i class="fa fa-user"></i>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="email" class="form-control" name="email" placeholder="EMAIL">
						<div class="input-group-append">
							<i class="fa fa-envelope"></i>
						</div>
					</div>
					<div class="input-group mb-3">
						<input type="text" class="form-control" name="phone" placeholder="PHONE NUMBER">
						<div class="input-group-append">
							<i class="fa fa-phone"></i>
						</div>
					</div>
					<div class="d-grid">
						<button type="submit" name="send_email" class="btn">Submit</button>
					</div>
					<?php
						if($is_email_sent){
							echo "<p>Thank you for filling out your information!</p>";
						}
					?>
	  		</form>
	  		<div class="rscsp_social_list">
	  			<a href=""><i class="fa fa-facebook-f"></i></a>
	  			<a href=""><i class="fa fa-instagram"></i></a>
	  			<a href=""><i class="fa fa-youtube-play"></i></a>
	  		</div>
  		</div>
  	</div>

  </body>
</html>
