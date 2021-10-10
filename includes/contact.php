
<div class="container" id="contact">
<div class="row PageHead">
<div class="col-md-12">
<h1>Contact Us</h1>
<h3>Keep in touch with us. we are here to help you</h3>
</div>
</div>
<div class="row ContactUs">
<div class="col-md-6">
<div class="row">
<div class="col-sm-6">
<h4>Drzava</h4>
<address>
<strong>Grad, BB</strong><br />
<strong>Mail: <a href="mailto:your@email.com">your@email.com</a> </strong><br />
<strong>Tel <a href="tel:+38766 111 111">(+387) 066 111 111</a> </strong><br />
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
<iframe src="" width="100%" height="250" frameborder="0" style="border:0"></iframe>
</div>

</div>
</div>

<div class="col-md-6">
<form class="form" id="phpcontactform" role="form" action="/contactsend" method="post">
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
<input class="btn btn-success btn-lg" id="submit" name="submit" type="submit" value="Send Message" />
</p>
<span class="loading"></span> </div>
</form>
</div>
</div>
</div>