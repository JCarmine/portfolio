<?php 
error_reporting(E_ALL ^ E_NOTICE); // hide all basic notices from PHP

//If the form is submitted
if(isset($_POST['submitted'])) {
	
	// require a name from user
	if(trim($_POST['contactName']) === '') {
		$nameError =  'Please enter your name'; 
		$hasError = true;
	} else {
		$name = trim($_POST['contactName']);
	}
	
	// need valid email
	if(trim($_POST['email']) === '')  {
		$emailError = 'Please enter in your e-mail address';
		$hasError = true;
	} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
		$emailError = 'Please enter a valid email address';
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}
		
	// we need at least some content
	if(trim($_POST['comments']) === '') {
		$commentError = 'Please enter a message';
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['comments']));
		} else {
			$comments = trim($_POST['comments']);
		}
	}
		
	// upon no failure errors let's email now!
	if(!isset($hasError)) {
		
		$emailTo = 'carminej@gmail.com';
		$subject = 'Submitted message from '.$name;
		$sendCopy = trim($_POST['sendCopy']);
		$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
		$headers = 'From: ' .' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
        
        // set our boolean completion value to TRUE
		$emailSent = true;
	}
}
?>
<!DOCTYPE html> 
<head> 
    <title>Contact Form</title>
    <script type="text/javascript" src="../js/jquery-1.8.2.min.js"></script>
    <link href="../css/main.css" rel="stylesheet" type="text/css" />
</head>

<body style="overflow:hidden; font-size: 16px;">
    <!-- @begin contact -->
	<div id="contact">
		<div class="container content">
		
	        <?php if(isset($emailSent) && $emailSent == true) { ?>
                <p class="info">Thank you! I will get back to you shortly.</p>
            <?php } else { ?>

				
				<div id="contact-form">
					<?php if(isset($hasError) || isset($captchaError) ) { ?>
                        <p class="alert">Sorry, there was an error submitting the form.</p>
                    <?php } ?>
				    
					<form id="contact-us" action="contact.php" method="post">
						<div class="formblock">
							<label class="screen-reader-text"><h2>NAME:</h2></label>
							<input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="txt requiredField" placeholder="" /><br>
							<?php if($nameError != '') { ?>
								<br /><span class="error"><?php echo $nameError;?></span> 
							<?php } ?>
						</div>
                        
						<div class="formblock">
							<label class="screen-reader-text"><h2>EMAIL:</h2></label>
							<input type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="txt requiredField email" placeholder="" /><br>
							<?php if($emailError != '') { ?>
								<br /><span class="error"><?php echo $emailError;?></span>
							<?php } ?>
						</div>
                        
						<div class="formblock">
							<label class="screen-reader-text"><h2>MESSAGE:</h2></label>
							 <textarea name="comments" id="commentsText" class="txtarea requiredField" placeholder=""><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea><br>
							<?php if($commentError != '') { ?>
								<br /><span class="error"><?php echo $commentError;?></span> 
							<?php } ?>
						</div>
                        
						<button name="submit" type="submit" class="subbutton btn btn-primary" style="margin-right: -12px;">
            	Submit
            </button>
						<input type="hidden" name="submitted" id="submitted" value="true" />
					</form>	
                    	
				</div>
				
			<?php } ?>
		</div>
    </div><!-- End #contact -->
	
<script type="text/javascript">
	<!--//--><![CDATA[//><!--
	$(document).ready(function() {
		$('form#contact-us').submit(function() {
			$('form#contact-us .error').remove();
			var hasError = false;
			$('.requiredField').each(function() {
				if($.trim($(this).val()) == '') {
					var labelText = $(this).prev('label').text();
					$(this).parent().append('<span class="error">Please enter your '+labelText+'.</span>');
					$(this).addClass('inputError');
					hasError = true;
				} else if($(this).hasClass('email')) {
					var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
					if(!emailReg.test($.trim($(this).val()))) {
						var labelText = $(this).prev('label').text();
						$(this).parent().append('<span class="error">Please enter a valid '+labelText+'.</span>');
						$(this).addClass('inputError');
						hasError = true;
					}
				}
			});
			if(!hasError) {
				var formInput = $(this).serialize();
				$.post($(this).attr('action'),formInput, function(data){
					$('form#contact-us').slideUp("fast", function() {				   
						$(this).before('<p class="tick center">Thank you! I will get back to you shortly.</p>');
					});
				});
			}
			
			return false;	
		});
	});
	//-->!]]>
</script>

</body>
</html>