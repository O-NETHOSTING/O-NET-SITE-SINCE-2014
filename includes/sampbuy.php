<div class="container">

<div class="row FeatLayout">
<div class="col-md-5 Featimg"> <img src="images/samp.png" width="314" height="314" alt="feature" class="img-responsive center-block"></div>
<div class="col-md-7">
<h1>GTA SA:MP</h1>
<p class="lead">Buy & Pay</p>
<p>As soon as you make a successful payment via PayPal or Google Checkout, your GTA will be activated immediately. No waiting time whatsoever. Our network runs the latest stable and secure versions of SA:MP </p>
<ul class="ticklist">
<li>Dedicated Servers</li>
<li>GPanel Access</li>
<li>FTP Access</li>
<li>Backup</li>
<li>Support 24/7</li>
<li>SSH2</li>
</ul>
</div>
</div>
<div class="row PageHead">
<div class="col-md-12">
</div>		

<?php
if(isset($_POST['naruci'])) {
$name = $_POST['name'];
$grad = $_POST['grad'];
$email = $_POST['email'];
$drzava = $_POST['drzava'];
$slot = $_POST['slot'];
$mod = $_POST['mod'];
$imeservera = $_POST['imeservera'];
$igra = $_POST['igra'];


$to = "your@email.com, your@email.com"; /// ovde pisete vas mejl.
$subject = "GTA SA:MP | ONET";
$message = "New server for $name :

Server name: $imeservera
Game: $igra
Slots: $slot
Game mod: $mod
Panel: $drzava

Informacije korisnika:

Full name: $name
Country: $grad
Email: $email

";
$from = "ONET HOSTING <your@email.com>";
$headers = "From: $from";
$mail = mail($to,$subject,$message,$headers);
if ($_POST['name'] == ""){echo "<title>Greska</title><b>Error - Full name.</b>";}
else if ($_POST['grad'] == ""){echo "<title>Greska</title><b>Error - Country.</b>";}
else if($_POST['email'] == ""){echo "<title>Greska</title><b>Error - E-mail.</b>";}
else if($_POST['drzava'] == ""){echo "<title>Greska</title><b>Error - Country.</b>";}
else if($_POST['message'] == ""){echo "
<center>
<br />
 <h1>Success!</h1>
 <h3>You will be in touch!!</h3>
 <h3>Check your e-mail: <b>$email</b></h3>
</center>
";
$na = "$email";
$naziv = "Auto replay | www.o-net.info";
$msg = "This is the announce!,\n\nYour order has been successfully received and we will answer you as soon as possible.\n\nYour ONET Stuff.\n\n https://www.o-net.info";
$od = "From: ONET HOSTING <your@email.com>";
mail($na,$naziv,$msg,$od);
}

else if ($mail) {
echo "
<center>
<br />
 <h1>Success!</h1>
 <h3>You will be in touch!!</h3>
 <h3>Check your e-mail: <b>$email</b></h3>
</center>
";
	
$na = "$email";
$naziv = "From: www.o-net.info | Auto replay";
$msg = "This is the announce!,\n\nYour order has been successfully received and we will answer you as soon as possible.\n\nYour administration team.";
$od = "From: ONET HOSTING <your@email.com>";
mail($na,$naziv,$msg,$od);
}else {
echo "
<center>
 <h1>ERROR!</h1>
 <h3>Try Again!!</h3>
</center>
";
}
}
?> 

<?php 
	
	$igra = $_POST['igra'];
	if(!$igra) {

?>

<div id="odaberi_igru_box">

</div>

	<center>
                               <h3>Accept TOS</h3>
	<form class="col-md-6 col-md-offset-3" action=""  method="post">
	 
		<select type="text"  class="form-control " name="igra" >
			<option value="cs">GTA SA:MP</option>
	
			
		</select>
		
			<br />
		<input type="submit" name="odaberi" class="btn btn-success btn-lg" value="ACCEPT ToS"></input>
		<a href="/"  id="cancel" name="cancel" class="btn btn-success btn-lg" value="DECLINE" type="submit">DECLINE</input></a>
		  <br /><br /> <a href="/tos"> Terms of use </a>
	</form>

</center>

<?php } else if($igra == "cs") { ?>
	
<div id="odaberi_igru_box">

</div>
<center>
	                    <h3>Your Account</h3>
	<form class="col-md-6 col-md-offset-3" action="" method="post">
	<div class="form-group">
		<input type="text" name="name" required="required" class="form-control" placeholder="Full name"></input>
    </div>
    <div class="form-group">		
		<input type="text" name="grad"  required="required" class="form-control" placeholder="Country"></input> 	
	</div>
    <div class="form-group">	
		<input type="email" name="email"  required="required" class="form-control" placeholder="E-mail"></input> 
	</div>
	<div class="form-group">
		<input type="text" name="imeservera"  required="required" class="form-control" placeholder="Server name"></input> 
	 </div>
     <div class="form-group">	
		<select type="text" name="igra"  required="required" class="form-control" placeholder="Service">
			<option value="GTA SA:MP">GTA SA:MP</option>
		</select> 
	 </div>
     <div class="form-group">		
		<select type="text" name="drzava"  required="required" class="form-control" placeholder="Country">
			<option value="GTA PANEL">GTA GPANEL</option>
		</select>
	</div>
     <div class="form-group">			
		<select type="text" name="mod"  required="required" class="form-control" placeholder="Mod">
			<option value="SA:MP 0.3x Deafult">SA:MP 0.3x Deafult</option>
		</select> 
	</div>
     <div class="form-group">	
		<select type="text" name="slot"  required="required" class="form-control" placeholder="Packet">
			<option value="50 slot 3€">50 Slot- €3/mo</option>
			<option value="100 slot 4€">100 Slot - €4/mo</option>
			<option value="150 slot 5€">150 Slot - €5/mo</option>
			<option value="200 slot 6€">200 Slot - €6/mo</option>
			<option value="250 slot 7€">250 Slot - €7/mo</option>
			<option value="300 slot 8€">300 Slot - €8/mo</option>
			<option value="400 slot 9€">400 Slot - €9/mo</option>
			<option value="500 +WEB 10€">500 Slot - €10/mo</option>
		</select> 			
		<br />
		<input type="submit" name="naruci" class="btn btn-success btn-lg" value="Success"></input>
		
	</form>

</center>
	

<?php }; ?>


</div>
</div>
</div>

