<?php
if(isset($_POST[submit]))
{
		$to = "sonursgowda314@gmail.com";
		$subject = "Message from AgriBuzz";
		
		$message = "
		<html>
		<head>
		<title>AgriBuzz Contact Us form</title>
		</head>
		<body>
		<p>AgriBuzz Contact Us form</p>
		<table>
		<tr>
		<th>Name</th>
		<td>$_POST[name]</td>
		</tr>
		<tr>
		<th>Email ID</th>
		<td>$_POST[emailid]</td>
		</tr>
		<tr>
		<th>Contact Number</th>
		<td>$_POST[contctno]</td>
		</tr>
		<tr>
		<th>Subject</th>
		<td>$_POST[subject]</td>
		</tr>
		<tr>
		<th>Message</th>
		<td>$_POST[textarea]</td>
		</tr>
		</table>
		</body>
		</html>
		";
		
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		
		// More headers
		$headers .= 'From: <$_POST[emailid]>' . "\r\n";
		
echo "<script>alert('Thank You For Dropping A Mail!! We'll Get Back To You Soon..');</script>";
		sendemailmsg($to,$subject,$message);


}

include("header.php");
?>

            <div id="featured">
                <div class="container">
                    <div class="row">
    
                        
                            
                            
                            
                            </div>
                           
                           <div class="3u">     
                          <section>
                               
                            <header>
                                    <h2><center>Send Us A Message</center></h2>
                            </header>
                        
                                <form method="post" action="" name="frmcontact" onSubmit="return validatecontact()">
                            <table width="708" height="430" border="2">
                              <tr>
                                <td width="130" align="right">Name<font color="#FF0000">*</font></td>
                                <td width="560"><input type="text" name="name" id="textfield" autofocus></td>
                              </tr>
                              <tr>
                                <td align="right">E-Mail ID <font color="#FF0000">*</font></td>
                                <td><input type="text" name="emailid" id="textfield2"></td>
                              </tr>
                              <tr>
                                <td align="right">Contact Number<font color="#FF0000">*</font></td>
                                <td><input type="number" name="contctno" id="textfield3"></td>
                              </tr>
							  <!--
                              <tr>
                                <td align="right">Website</td>
                                <td><input type="text" name="web" id="textfield4"></td>
                              </tr>-->
                              <tr>
                                <td align="right">Subject <font color="#FF0000">*</font></td>
                                <td><input type="text" name="subject" id="textfield5"></td>
                              </tr>
                              <tr>
                                <td align="right">Message <font color="#FF0000">*</font></td>
                                <td><textarea name="textarea" id="message"></textarea></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td align="left"><input type="submit" name="submit" id="submit" value="Send Message"></td>
                              </tr>
                            </table>
                       </form>
                            </section>
                        </div>
                        
                        </div>
                        </div>
                        </div>
                    


<script type="application/javascript">
function validatecontact()
{

var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; //Variable to validate Email ID

if(document.frmcontact.name.value == "")
	{
		alert("Name should not be empty..");
		document.frmcontact.name.focus();
		return false;
	}
	else if(!document.frmcontact.name.value.match(alphaspaceExp))
	{
		alert("Please enter only letters for name..");
		document.frmcontact.name.focus();
		return false;
	}
	else if(document.frmcontact.emailid.value == "")
	{
		alert("Kindly enter Email ID..");
		document.frmcontact.emailid.focus();
		return false;
	}		
	else if(!document.frmcontact.emailid.value.match(emailExp))
	{
		alert("Kindly enter Valid Email ID.");
		document.frmcontact.emailid.focus();
		return false;
	}	
	else if(document.frmcontact.contctno.value == "")
	{
		alert("Kindly enter Contact number..");
		document.frmcontact.contctno.focus();
		return false;
	}
	else if(document.frmcontact.subject.value == "")
	{
		alert("Subject should not be empty..");
		document.frmcontact.subject.focus();
		return false;
	}
	else if(document.frmcontact.message.value == "")
	{
		alert("Message should not be empty..");
		document.frmcontact.message.focus();
		return false;
	}
	else
	{
		return true;
	}

}
</script>
<?php
function sendemailmsg($emailid,$emailsubject,$emailmsg)
{
	require 'PHPMailer-master/PHPMailerAutoload.php';
	
	$mail = new PHPMailer;
	//$mail->SMTPDebug = 3;                               // Enable verbose debug output
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'mail.dentaldiary.in';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'sendmail@dentaldiary.in';                 // SMTP username
	$mail->Password = 'q1w2e3r4/';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, ssl also accepted
	$mail->Port = 587;                                    // TCP port to connect to
	
	$mail->From = 'sendmail@dentaldiary.in';
	$mail->FromName = 'AgriBuzz';
	$mail->addAddress($emailid, 'Joe User');     // Add a recipient
	$mail->addAddress($emailid);               // Name is optional
	$mail->addReplyTo('rdsrini94@gmail.com', 'Information');
	$mail->addCC('aravinda@technopulse.in');
	$mail->addBCC('bcc@example.com');
	
	$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML
	
	$mail->Subject = $emailsubject;
	$mail->Body    = $emailmsg;
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		//echo 'Message has been sent';
	}
}

?>