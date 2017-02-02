<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/simple-php-contact-form.html
*/
require_once("./include/fgcontactform.php");

$formproc = new FGContactForm();


//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('petewaldock@gmail.com'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('CnRrspl1FyEylUj');


if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php");	
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<!-- Set the viewport width to device width for mobile + disable zoom on ipad -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>Contact form</title>
<script type='text/javascript' src='scripts/gen_validatorv.js'></script>

<!--all css-->
<link rel="stylesheet" type="text/css" href="../css/styles.css" />
</head>
<body class="contactform-body">

<!-- Form Code Start -->
<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
  <fieldset >
    <legend style="display:none;">Contact us</legend>
    <input type='hidden' name='submitted' id='submitted' value='1'/>
    <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
    <input  style="display:none;" type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
    <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
    <div class="row">
      <div class="four columns pad-right">
        <label for='name' >Your Full Name </label>
        <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" />
        <span id='contactus_name_errorloc' class='error'></span> 
        </div>

      <div class="four columns pad-right">
        <label for='email' >Email Address</label>
        <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" />
        <span id='contactus_email_errorloc' class='error'></span> 
        </div>

      <div class="four columns">
        <label for='phone' >Phone Number</label>
        <input type='text' name='phone' id='phone' value='<?php echo $formproc->SafeDisplay('phone') ?>' maxlength="15" />
        <span id='contactus_phone_errorloc' class='error'></span> 
      </div>

      <div class="twelve columns">
        <label for='message' >Message</label>
        <textarea  name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
        <span id='contactus_message_errorloc' class='error'></span> 
        </div>
    </div>
   
    <input  class="k-button cta" type='submit' name='Submit' value='Send Message'  />
  </fieldset>
</form>

<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com--> 

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");
    frmvalidator.addValidation("email","req","Please provide your email address");
    frmvalidator.addValidation("email","email","Please provide a valid email address");
    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");
    frmvalidator.addValidation("phone","req","Please provide your phone number");
	
	

// ]]>
</script>
</body>
</html>