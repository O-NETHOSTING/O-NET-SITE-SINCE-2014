
<div class="container">

<div class="row FeatLayout">
<div class="col-md-5 Featimg"> <img src="images/paypal.png" width="314" height="314" alt="feature" class="img-responsive center-block"></div>
<div class="col-md-7">
<h1>PayPal </h1>
<p class="lead">Faster & Secure</p>
<p>As soon as you make a successful payment via PayPal, your will be activated immediately. No waiting time whatsoever.</p>
<ul class="ticklist">
<li>Easy</li>
<li>No Fee</li>
<li>Instant</li>
<li>One click</li>
<li>Support 24/7</li>
<li>Safe</li>
</ul>
</div>
</div>
<div class="row PageHead">
<div class="col-md-12">
</div>		

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
			<option value="cs">1. PayPay -- Counter Strike 1.6</option>
			<option value="samp">2. PayPay -- GTA SA:MP</option>
			<option value="ts3">3. PayPay -- TeamSpeak3</option>
			<option value="web">4. PayPay -- WebHosting</option>
	</select>
		
			<br />
		<input type="submit" name="odaberi" class="btn btn-success btn-lg" value="ACCEPT ToS"></input>
		<a href="/"  id="cancel" name="cancel" class="btn btn-success btn-lg" value="DECLINE" type="submit">DECLINE</input></a>
		  <br /><br /> <a href="/tos"> Terms of use </a>
	</form>

</center>

<?php } else if($igra == "web") { ?>
	
<div id="odaberi_igru_box">

</div>
<center>
	                    <h3>WebHosting Pay NOW</h3>
						
						
						
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="3B9GJM78FGS2G">
<table>
<tr><td><input type="hidden" name="on0" value="Webhosting Plan"></td></tr><tr><td><select class="form-control" name="os0">
	<option value="Basic">Basic : €7.00 EUR - monthly</option>
	<option value="Medium">Medium : €12.00 EUR - monthly</option>
	<option value="Ultra">Ultra : €15.00 EUR - monthly</option>
	<option value="Business">Business : €20.00 EUR - monthly</option>
</select> </td></tr>
<tr><td><input type="hidden" name="on1" value="ONET Service"><br /></td></tr><tr><td><select class="form-control" name="os1">
	<option value="WebHosting">WebHosting </option>
</select> </td></tr>
</table><br />
<input type="hidden" name="currency_code" value="EUR">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


</center>
	

<?php } else if($igra == "cs") { ?>
	
<div id="odaberi_igru_box">

</div>
<center>
	                    <h3>CS 1.6 Pay NOW</h3>
						
						
						
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="T3MYZN82SJE5U">
<table>
<tr><td><input type="hidden" name="on0" value="Packet"></td></tr><tr><td><select class="form-control" name="os0">
	<option value="Basic">Basic : €3.00 EUR - monthly</option>
	<option value="Medium">Medium : €5.00 EUR - monthly</option>
	<option value="Ultra">Ultra : €8.00 EUR - monthly</option>
	<option value="ONET + TS3">ONET + TS3 : €10.00 EUR - monthly</option>
</select> </td></tr>
<tr><td><input type="hidden" name="on1" value="ONET Service"><br /></td></tr><tr><td><select class="form-control" name="os1">
	<option value="Counter-Strike 1.6">Counter-Strike 1.6 </option>
</select> </td></tr>
</table><br />
<input type="hidden" name="currency_code" value="EUR">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>



</center>
	
	<?php } else if($igra == "samp") { ?>
	
<div id="odaberi_igru_box">

</div>
<center>
	                    <h3>GTA SA:MP Pay NOW</h3>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="K2HFU3K6N3KB6">
<table>
<tr><td><input type="hidden" name="on0" value="Packet"></td></tr><tr><td><select class="form-control" name="os0">
	<option value="Basic">Basic : €3.00 EUR - monthly</option>
	<option value="Medium">Medium : €5.00 EUR - monthly</option>
	<option value="Ultra">Ultra : €7.00 EUR - monthly</option>
	<option value="ONET + TS3">ONET + TS3 : €10.00 EUR - monthly</option>
</select> </td></tr>
<tr><td><input type="hidden" name="on1" value="ONET Service"><br /></td></tr><tr><td><select class="form-control" name="os1">
	<option value="GTA SA:MP">GTA SA:MP </option>
</select> </td></tr>
</table><br />
<input type="hidden" name="currency_code" value="EUR">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
					
</center>

	<?php } else if($igra == "ts3") { ?>
	
<div id="odaberi_igru_box">

</div>
<center>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="BFKYY6VCEJERU">
<table>
<tr><td><input type="hidden" name="on0" value="Packet"></td></tr><tr><td><select class="form-control" name="os0">
	<option value="Basic">Basic : €3.00 EUR - monthly</option>
	<option value="Medium">Medium : €5.00 EUR - monthly</option>
	<option value="Ultra">Ultra : €7.00 EUR - monthly</option>
	<option value="ONET">ONET : €10.00 EUR - monthly</option>
</select> </td></tr>
<tr><td><input type="hidden" name="on1" value="ONET Service"><br /></td></tr><tr><td><select class="form-control" name="os1">
	<option value="TeamSpeak 3">TeamSpeak 3 </option>
</select> </td></tr>
</table><br />
<input type="hidden" name="currency_code" value="EUR">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


</center>


<?php }; ?>




</div>
</div>
</div>

