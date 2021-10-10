   <!-- PHP -->
	<?php

	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = "ONET HOSTING <your@email.com>";
        $headers = "From: $from";
		$to = 'your@email.com, your@email.com'; 
		$subject = 'ONET | Web Contact';
		
		$body = "
_________________________________________________________________________
| Full name: $name
_________________________________________________________________________
| Email: $email
_________________________________________________________________________
| Phone: $phone
_________________________________________________________________________
| Message: $message 

		 
		 
		 \n";
 

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $headers)) {
		$result='<h1>Success!!</h1><h3>You will be in touch!!</h3>';
	} else {
		$result='<h1>Error!.</h1><h3>Try again!!</h3>';
	}
}
	}
?>


<div class="container" id="contact">
<div class="row PageHead">
<div class="col-md-12">
<?php echo $result; ?>
</div>
</div>
<div class="row ContactUs">
<div class="col-md-6">
<div class="row">
<div class="col-sm-6">
<h4>Bosna and Hercegovina</h4>
<address>
<strong>Čtiluk, BB</strong><br />
<strong>Mail: <a href="mailto:your@email.com">your@email.com</a> </strong><br />
<strong>Tel <a href="tel:+38763161167">(+387) 063/161-167</a> </strong><br />
<strong>Mon - Fri: 09:00 - 17:00 </strong><br />

</address>
</div>
<div class="col-sm-6">
<h4></h4>
<address>
<strong></strong><br>
<abbr title="Phone"></abbr><br>
<br>
</address>
</div>
</div>
<div class="row">
<div class="col-md-12 mapwrap">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3151.835837652496!2d144.955431!3d-37.817313999999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xedc33f230d1355b1!2sEnvato+Pty+Ltd!5e0!3m2!1sen!2sin!4v1408780745585" width="100%" height="250" frameborder="0" style="border:0"></iframe>
</div>
</div>
</div>
<div class="col-md-6">
<form class="form" id="phpcontactform" role="form" action="#" method="post">
<div class="form-group">
<input class="form-control" type="text" placeholder="Full Name" name="name" id="name" required value="<?php echo htmlspecialchars($_POST['name']); ?>">
</div>
<div class="form-group">
<input class="form-control" type="email" placeholder="Email" name="email" id="email" required value="<?php echo htmlspecialchars($_POST['email']); ?>">
</div>
<div class="form-group">
<input class="form-control" type="text" placeholder="Mobile Number" name="mobile" id="mobile" required value="<?php echo htmlspecialchars($_POST['phone']); ?>">
</div>
<div class="form-group">
<textarea class="form-control" rows="10" name="message" placeholder="Your Message" id="message"  <?php echo htmlspecialchars($_POST['message']);?> ></textarea>
</div>
<div class="form-group">
<p>
<input class="btn btn-success btn-lg" id="submit" name="submit" type="submit" value="Sending..." />
</p>
<span class="loading"></span> </div>
</form>
</div>
</div>
</div>


<script>
  setTimeout(function () {    
    window.location.href = '/contact'; 
},4000); // 5 seconds </script>


