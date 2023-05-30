<?php
session_start();

if(isset($_POST['submit_pass']) && $_POST['pass'])
{
 $pass=$_POST['pass'];
 if($pass=="20222023")
 {
  $_SESSION['password']=$pass;
 }
 else
 {
  $error="Incorrect Password";
 }
}

if(isset($_POST['page_logout']))
{
 unset($_SESSION['password']);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Order Confirmation Form | 24x7 Ads</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>
<body>
<style>
#wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    font-family: 'Lato', sans-serif;
    background: url(Business-Banner.jpg) no-repeat;
    background-size: cover;
    position: relative;
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
}
div#wrapper:before {
    content: "";
    display: block;
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
    background: rgba(0,0,0,0.6);
}
.form-control:focus {
    border-color: #227bf5;
    box-shadow: none;
}
.Password_form {
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    z-index: 99;
}
#wrapper h1
{
 margin-top:50px;
 font-size:45px;
 color:white;
}
#login_form {
    background-color: white;
    max-width: 480px;
    padding: 30px 30px;
    box-sizing: border-box;
    box-shadow: 0px 0px 10px 0px #3b240b;

}
#login_form h1{
    margin: 0px;
    font-size: 28px;
    color: #227bf5;
    font-weight: 600;
    text-transform: uppercase;
}
#login_form input[type="password"] {
    height: 50px;
    width: 100%;
    margin: 0 auto;
}
#login_form input[type="submit"] {
    width: 100%;
    margin-top: 20px;
    height: 50px;
    font-size: 18px;
    background-color: #227bf5;
    border: none;
    box-shadow: 0px 4px 0px 0px #003a8a;
    color: white;
    border-radius: 3px;
}
form#contact-form {
    background-color: white;
    width: 100%;
    padding: 30px;
    box-sizing: border-box;
    box-shadow: 0px 0px 10px 0px #3b240b;
    margin: 20px auto;
     position: relative;z-index: 99;
}
input.btn.btn-send {
    text-align: left;
    display: block;
    margin-top: 20px;
    height: 50px;
    font-size: 18px;
    background-color: #227bf5;
    border: none;
    color: white;
    border-radius: 0;
    padding: 0 30px;
}
#login_form p {
    margin:0px;
    margin-top:15px;
    color:#8A4B08;
    font-size:17px;
    font-weight:bold;
}
.form-control {
    height: 45px;
}
label {
    text-align: left;
    display: block;
}
span.danger {
    color: #ff0000;
}
p.Message_sucess {
    font-size: 20px;
    font-weight: 600;
    color: green;
}

/*********** Responsive **************/
@media(min-height: 760px){
    #wrapper {
    height: 100vh;
}
}

@media (max-width:767px){
form#contact-form {
    background-color: white;
    width: 100%;
    padding: 20px 15px;
    box-sizing: border-box;
    box-shadow: 0px 0px 10px 0px #3b240b;
    margin: 20px auto;
}
#login_form input[type="submit"]{
    width: 95%;
    width: 95%;
}
#login_form h1 {
    font-size: 22px;
}
}

</style>

<div id="wrapper">
	<div class="container">
<?php
if(isset($_SESSION['password']))
{
if($_SESSION['password']=="20222023")
{
 ?>

 <form name="contact-form" id="contact-form" action="canada.php" method="POST" class="contact-form-style-01">
 <?php
    if(isset($_GET['msg']))
    echo "<p class='Message_sucess'>Message Sent Successfully. Thank you!</p>";
 ?>
 <div class="form-row">
    <div class="form-group col-md-4">
    	<label>Client Name:</label>
        <input id="form_name" type="text" name="name" class="form-control" required="required" data-error="Client Name is required." data-error="Client Name is Required" />
        <div class="help-block with-errors"></div>
    </div>

    <div class="form-group col-md-4">
    	<label>Company Name:</label>
        <input id="form_companyname" type="text" name="companyname" class="form-control" required="required" data-error="Client Name is required." data-error="Client Name is Required" />
        <div class="help-block with-errors"></div>
    </div>

    <div class="form-group col-md-4">
    	<label>Client Email:</label>
        <input id="form_email" type="email" name="email" class="form-control" required="required" data-error="Client Email is required." required data-error="Please Enter Valid Email" />
        <div class="help-block with-errors"></div>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
    	<label>Website URL <span class="danger">Please submit without https:/http</span></label>
        <input id="form_url" type="text" name="url" value="www." class="form-control" pattern="www.+" required="required" data-error="Client Name is required." data-error="Client Name is Required" />
        <div class="help-block with-errors"></div>
    </div>

    <div class="form-group col-md-4">
    	<label>Phone:</label>
        <input id="form_tel" type="tel" name="phonenumber" class="form-control" required="required" data-error="Email is required." required data-error="Please Enter Valid Email" />
        <div class="help-block with-errors"></div>
    </div>

    <div class="form-group col-md-4">
    	<label>Address:</label>
        <input id="form_clientaddress" type="text" name="clientaddress" class="form-control" required="required" data-error="Client Email is required." required data-error="Please Enter Valid Email" />
        <div class="help-block with-errors"></div>
    </div>
</div>
<div class="form-row">
    <!-- <div class="form-group col-md-4">
    	<label>City:</label>
        <input id="form_clientcity" type="text" name="clientcity" class="form-control" required="required" data-error="Client Email is required." required data-error="Please Enter Valid Email" />
        <div class="help-block with-errors"></div>
    </div> -->

    <div class="form-group col-md-4">
    	<label>State:</label>
        <input id="form_clientstate" type="text" name="clientstate" class="form-control" required="required" data-error="Client Email is required." required data-error="Please Enter Valid Email" />
        <div class="help-block with-errors"></div>
    </div>

    <div class="form-group col-md-4">
    	<label>Zip:</label>
        <input id="form_clientzip" type="text" name="clientzip" class="form-control" required="required" data-error="Client Email is required." required data-error="Please Enter Valid Email" />
        <div class="help-block with-errors"></div>
    </div>

    <div class="form-group col-md-4">
    	<label>Country</label>
        <input id="form_country" type="text" name="country" class="form-control" required="required" />
        <div class="help-block with-errors"></div>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
    	<label>Sales Representative Name:</label>
        <input id="form_salesname" type="text" name="salesname" class="form-control" required="required" data-error="Client Email is required." required data-error="Please Enter Valid Email" />
        <div class="help-block with-errors"></div>
    </div>

    <div class="form-group col-md-4">
    	<label>Sales Representative Email:</label>
        <input id="form_salesname" type="email" name="salesemail" class="form-control" required="required" data-error="Email is required." required data-error="Please Enter Valid Email" />
        <div class="help-block with-errors"></div>
    </div>
    <div class="form-group col-md-4">
    	<label>Campaign Selected</label>
    	<select id="form_packages" name="packages" class="form-control" required="required" data-error="City is required.">
            <option value="">-Select-</option>
            <option value="SEO Package">SEO Package</option>
            <option value="7 Days Free SEO Trial">7 Days Free SEO Trial</option>
            <option value="Web Package">Web Package</option>
            <option value="SMO Package">SMO Package</option>
            <option value="PPC Package">PPC Package</option>
            <option value="SEO + PPC Management">SEO + PPC Management</option>
            <option value="One-Time Website Fixation">One-Time Website Fixation</option>
            <option value="Virtual Assistant">Virtual Assistant</option>
            <option value="Mobile Application">Mobile Application</option>
            <option value="Email Marketing Campaign">Email Marketing Campaign</option>
            <option value="Google Reviews">Google Reviews</option>
            <option value="Landing Page Fixation">Landing Page Fixation</option>
            <option value="Online Reputation Management (ORM)">Online Reputation Management (ORM)</option>
            <option value="SEO + Social Media Service">SEO + Social Media Service</option>
            <option value="Website Hosting & Maintenance">Website Hosting & Maintenance</option>
        </select>
        <div class="help-block with-errors"></div>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-3">
    	<label for="inputEmail4">Campaign Timeline:</label>
        <input id="form_campaigntimeline" type="text" name="campaigntimeline" class="form-control" required="required" data-error="Client Email is required." required data-error="Please Enter Valid Email" />
        <div class="help-block with-errors"></div>
    </div>
    <div class="form-group col-md-3">
    	<label for="inputEmail4">Charges:</label>
        <input id="form_monthlycharges" type="text" name="monthlycharges" value="$" class="form-control" required="required" data-error="Client Email is required." required data-error="Please Enter Valid Email" />
        <div class="help-block with-errors"></div>
    </div>
    <div class="form-group col-md-3">
    	<label for="inputEmail4">Payment Date:</label>
        <input id="form_date" type="date" name="_date" value="" class="form-control" required="required" data-error="Payment Date is required." required data-error="Please Select A Date" />
        <div class="help-block with-errors"></div>
    </div>
    <div class="form-group col-md-3">
    	<label>Paid Via</label>
    	<select id="form_payvia" name="payvia" class="form-control" required="required" data-error="City is required.">
            <option value="">-Select-</option>
            <option value="PayPal">PayPal</option>
            <option value="Stripe">Stripe</option>
            <option value="Payoneer">Payoneer</option>
            <option value="Razorpay">Razorpay</option>
            <option value="Bank Transfer">Bank Transfer</option>
        </select>
        <div class="help-block with-errors"></div>
    </div>
</div>
<div class="form-group">
	<textarea class="form-control" id="form_message" name="your-message" placeholder="Comment...." rows="3"></textarea>
</div>

    <input type="submit" class="btn btn-send" value="Submit" />
    <div class="messages"></div>
</form>
 <?php
}
}
else
{
 ?>
<div class="Password_form">
 <form class="Password_protected" method="post" action="" id="login_form">
  <h1 class="mb-4">Please enter the Password</h1>
  <div class="form-group">
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
    <input type="submit" name="submit_pass" value="SUBMIT">
    <p><font style="color:red;"><?php if(isset($error)){echo $error;}?></font></p>
  </div>
 </form>
</div>
 <?php	
}
?>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>