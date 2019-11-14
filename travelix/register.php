<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header" height="80px">
		<!-- Top Bar -->
		<div class="top_bar" style="height:80px;">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
                            <div class="logo_container">
							    <br><div class="logo"><a href="index.php"><img src="images/logo.png" alt="">K_Tourist</a></div>
						    </div>
					</div>
				</div>
			</div>		
		</div>

	</header>

	<div class="contact_form_section">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Contact Form -->
					<div class="contact_form_container">
						<div class="contact_title text-center">Registrations</div>
						<form action="" id="contact_form" class="contact_form text-center" method="POST">
                            <input type="text" name="name" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Name" required="required" data-error="Subject is required.">
							<input type="text" name="email" id="contact_form_name" class="contact_form_name input_field" placeholder="Email" required="required" data-error="Name is required.">
							<input type="text" name="pass" id="contact_form_email" class="contact_form_email input_field" placeholder="Password" required="required" data-error="Email is required.">
                            <input type="text" name="state" id="contact_form_name" class="contact_form_name input_field" placeholder="State" required="required" data-error="Name is required.">
							<input type="text" name="city" id="contact_form_email" class="contact_form_email input_field" placeholder="City" required="required" data-error="Email is required.">
                            <input type="number" name="phn" id="contact_form_name" class="contact_form_name input_field" placeholder="Phone Number" required="required" data-error="Name is required.">
							<input type="number" name="pinc" id="contact_form_email" class="contact_form_email input_field" placeholder="Pin Code" required="required" data-error="Email is required.">
                            <button type="submit" name="submit" id="form_submit_button" class="form_submit_button button trans_200">send message<span></span><span></span><span></span></button>
                            <br><a href="login.php" class="form_submit_button button trans_200" style="background-color:rgba(0,0,0,0.1);" >Login Here </a>
                        </form>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact_custom.js"></script>

</body>

    <?php

        if(isset($_POST['submit'])){
            require "init.php";
            $email = $_POST['email'];
            $name = $_POST['name'];
            $pass = $_POST['pass'];
            $state = $_POST['state'];
            $city = $_POST['city'];
            $pn = $_POST['phn'];
            $pin = $_POST['pinc'];

            $query = "select * from user_info where user_name='$email' and password='$pass '";
            $result = mysqli_query($con, $query);
            if(mysqli_num_rows($result)>0){
                session_start();
                ?><script>alert("User Already Exists"); window.location="index.php"</script><?php
            }else{
                $query = "INSERT INTO `user_info` (`user_name`, `password`, `name`, `state`, `city`, `phone_number`, `pin_code`) VALUES ('$email', '$pass', '$name', '$state', '$city', '$pn', '$pin');";
                $result = mysqli_query($con, $query);
                if($result){
                    ?><script>alert("Successfully Registerd"); window.location="login.php"</script><?php
                }
            }
        }
    ?>

</html>