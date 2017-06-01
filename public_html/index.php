<!DOCTYPE html>
<html lang="en">
<head>
	<title>Isles Designs</title>
	<meta charset="UTF-8">
	<!--For Internet explorer users please see http://lmgtfy.com/?q=how+to+download+google -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!--Boot strap style pages from http://getbootstrap.com/getting-started/ -->

	<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!--font awesome for icons and stuff-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Google fonts for header and body-->
		<link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel|Offside" rel="stylesheet">

	<!-- my custom css-->
		<link rel="stylesheet" href="css/style.css" type="text/css">


	<!-- 1. Add latest jQuery and fancyBox files -->
	<script src=“https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js“></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



</head>


	<body class="sfooter">


		<!-- header with title and nav bar -->
		<header>
			<div class="container-fluid">
				 <img class="pull-left" src="imagespwp/logo.png" alt="Isles Designs logo">
			</div> <!--container -->
		</header>

		<div class="container-fluid"> <!-- all the content containter -->

		<!--Photography using fancybox3 -->
		<section>
			<div class="container">

				 <a data-fancybox="group" data-caption="lightning">
					<img class="img-responsive center-block" src="images-fancybox3/lightning.jpg" alt="lightning" />
				</a>
				<a data-fancybox="group" data-caption="blood-moon">
					<img class="img-responsive center-block" src="images-fancybox3/blood-moon.jpg" alt="blood moon" />
				</a>
			</div>
		</section>


		<!-- about me section-->
		<div class="container" id="about-me">
			<div class="row">
				<div class="col-xs-12 col-md-8">
						<h2>About me:</h2>
							<p>Hello I am Danielle Isles Martin and I truly believe a good balance of art and science is what makes good design. As a Photographer, Web Developer and Scientist I live in that balance between science and art, constantly creating and testing new ideas. If you have and idea and need a website let's talk! (add link to contact me section here) </p>
		<!-- link to contact me section here -->
				</div> <!-- column text -->
				<div class="col-xs-12 col-md-4">
							<img class="img-circle" src="imagespwp/profile-picture.jpg" alt="picture of Danielle">
				</div> <!-- column img -->
			</div> <!-- row -->
		</div> <!-- container end about me-->


		<!-- portfolio section -->

<!-- contact me section-->
		<section id="contact-form">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8 center-block">
					<!--Begin Contact Form-->
					<form id="contact-form" action="php/mailer.php" method="post">
						<div class="form-group">
							<label for="name">Name <span class="text-danger">*</span></label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								<input type="text" class="form-control" id="name" name="name" placeholder="Name">
							</div>
						</div>
						<div class="form-group">
							<label for="email">Email <span class="text-danger">*</span></label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<input type="email" class="form-control" id="email" name="email" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<label for="subject">Subject</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-pencil" aria-hidden="true"></i>
								</div>
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
							</div>
						</div>
						<div class="form-group">
							<label for="message">Message <span class="text-danger">*</span></label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-comment" aria-hidden="true"></i>
								</div>
								<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message (2000 characters max)"></textarea>
							</div>
						</div>

						<!-- reCAPTCHA -->
						<div class="g-recaptcha" data-sitekey="--YOUR RECAPTCHA SITE KEY--"></div>

						<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
						<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
					</form>


				</div> <!-- column-->
			</div> <!-- row -->
			<!--empty area for form error/success output-->
			<div class="row">
				<div class="col-xs-12">
					<div id="output-area"></div>
				</div>
			</div>
		</section>

		</div> <!-- all the content container-->
	</body>

</html>