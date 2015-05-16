<?php
include('includes/body.php');
?>
<link rel="stylesheet" href="css/base.css" type="text/css" charset="utf-8" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/contact.js"></script>
<div id="footer">
	<div id="contact">
		<h2 class="align-center with-border subheader-font">SCRIE-NE UN MESAJ</h2>
		<form class="content-form margin-bottom margin-top margin-left margin-right" id="MyContactForm" name="MyContactForm" method="post" />
			<div class="form-input">
				<label for="name" class="middle-color"><img src="images/dotcrux.png" />&nbsp;&nbsp;Nume:</label>
				<input type="text" class="text-input dark-color light-bg" name="name" id="name" value="" />
				<label for="nameLb" id="nameLb">
					<span class="error">Camp obligatoriu</span>
				</label>
			</div>
			<div class="form-input">
				<label for="email" class="middle-color"><img src="images/dotcrux.png" />&nbsp;&nbsp;Email:</label>
				<input type="email" class="text-input dark-color light-bg" name="email" id="email" value="" />
				<label for="emailLb" id="emailLb">
					<span class="error error1">Camp obligatoriu</span>
					<span class="error error2">Email invalid</span>
				</label>
			</div>					
			<div class="form-input">
				<label for="phone" class="middle-color"><img src="images/dotcrux.png" />&nbsp;&nbsp;Telefon:</label>
				<input type="text" class="text-input dark-color light-bg" name="phone" id="phone" value="" />
				<label for="phoneLb" id="phoneLb"><span class="error">Camp obligatoriu</span></label>
			</div>
			<div class="form-input">
				<label for="message" class="middle-color"><img src="images/dotcrux.png" />&nbsp;&nbsp;Mesaj:</label>
				<textarea class="textarea-input dark-color light-bg" name="message" id="message"></textarea>
				<label for="messageLb" id="messageLb"><span class="error">Camp obligatoriu</span></label>
			</div>
			<div class="form-submit">
				<a href="#" id="contact-btn" class="button-normal uppercase light-color middle-gradient dark-gradient-hover"><img src="images/dotcrux.png" />&nbsp;&nbsp;Trimite</a>
			</div>			
		</form>
		<div id="ErrResults">O eroare a avut loc si mesajul nu a putut fi transmis.</div>
		<div id="MainResult">Emailul a fost trimis.</div>			
	</div>	
</div>
<div class="clear"></div>