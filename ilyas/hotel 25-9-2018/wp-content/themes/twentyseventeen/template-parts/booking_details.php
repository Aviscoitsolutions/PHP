<?php 
/*
Template Name:Booking Details
*/
get_header();
$home=get_home_url();
?>
<div class="container-fluid">
<div class="" style1="background:url('http://localhost/hotel/wp-content/uploads/2018/09/marvin-meyer-672601-unsplash.jpg');background-size:100%;">
<?php
$price=$_POST["price"];
// Merchant key here as provided by Payu
$MERCHANT_KEY ="xwkD1Ftj";
// Merchant Salt as provided by Payu
$SALT ="4Smu1C3TQ9";
// End point - change to https://secure.payu.in for LIVE mode
$PAYU_BASE_URL = "https://secure.payu.in";
$action = '';
 $posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    $posted[$key] = $value; }}
$formError = 0;$NAME ="EeRAM";
$Email ="abcdram@gmail.com";
if(empty($posted['txnid'])) {
  // Generate random transaction id
   $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($NAME)
          || empty($Email)
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
      || empty($posted['service_provider'])
  ) {  
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
  $hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';  
  foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }
    $hash_string .= $SALT;
    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>
</div>
<html>
  <head>
  <script>
    var hash = '<?php echo $hash ?>';
      //alert(hash);
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  </head>
  <body onLoad="submitPayuForm()">
    <?php if($formError) { ?> 
      <!-- <span style="color:red">Please fill all mandatory fields.</span>       -->
    <?php } ?>
    <form action="<?php echo $action; ?>" method="post" name="payuForm" id="payment">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
     <!-- <input type="hidden" name="surl" value="<?php echo (empty($posted['surl'])) ? 'http://localhost/hotel/success/' : $posted['surl'] ?>" size="64" />
<input  type="hidden" name="furl" value="<?php echo (empty($posted['furl'])) ? 'http://localhost/hotel/failure/' : $posted['furl'] ?>" size="64" />
<input type="hidden" name="service_provider" value="payu_paisa" size="64" />
<input type="hidden" name="curl" value="http://localhost/hotel/failure/"/> --> 
<!-- -------------------------------------------------------------------- -->
<input type="hidden" name="amount" value="<?php echo (empty($posted['amount'])) ? $price : $posted['amount'] ?>" />
<!-- <input name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" /> -->
<!-- <input name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" /> -->
<!-- <input name="phone" value="<?php echo (empty($posted['phone'])) ? '9790527572' : $posted['phone']; ?>" /> -->
<input type="hidden" name="productinfo"  value="<?php echo (empty($posted['productinfo'])) ? 'flat' : $posted['productinfo'] ?>" />

<input type="hidden" name="surl" value="<?php echo (empty($posted['surl'])) ? 'http://localhost/hotel/success/' : $posted['surl'] ?>" size="64" />
<input  type="hidden" name="furl" value="<?php echo (empty($posted['furl'])) ? 'http://localhost/hotel/failure/' : $posted['furl'] ?>" size="64" />
<input type="hidden" name="service_provider" value="payu_paisa" size="64" />
<!-- <input name="lastname" id="lastname" value="<?php echo (empty($posted['lastname'])) ? 'Kumar' : $posted['lastname']; ?>" /> -->
<input type="hidden" name="curl" value="https://localhost/hotel/failure/" />
<!-- <input name="address1" value="<?php echo (empty($posted['address1'])) ? 'address1' : $posted['address1']; ?>" /> -->
<input type="hidden" name="address2" value="<?php echo (empty($posted['address2'])) ? 'address2' : $posted['address2']; ?>" />
<!-- <input name="city" value="<?php echo (empty($posted['city'])) ? 'madurai' : $posted['city']; ?>" /> -->
<!-- <input type="hidden" name="state" value="<?php echo (empty($posted['state'])) ? 'tamil nadu' : $posted['state']; ?>" /> -->
<!-- <input name="country" value="<?php echo (empty($posted['country'])) ? 'india' : $posted['country']; ?>" /> -->
<!-- <input name="zipcode" value="<?php echo (empty($posted['zipcode'])) ? '625017' : $posted['zipcode']; ?>" /> -->

<div class="container">
<div class="row">
<div class="col-md-9">
<div class="container">
<h1 class="text-center">Details</h1>
<div class="row">
<div class="col-md-6">
<label>First Name</label>
<input type="text" name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" class="w-100" required/>
</div>
<div class="col-md-6">  
<label>Last Name</label>
<input type="text" name="lastname" value="<?php echo (empty($posted['lastname'])) ? '' : $posted['lastname']; ?>" class="w-100" required/>
</div>
</div>
<div class="row">
<div class="col-md-6">
<label>Email</label>
<input type="email" name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" class="w-100" required>
</div>
<div class="col-md-6">
<label>Mobile</label>
<input type="tel" name="phone" id="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>"  class="w-100" required/>
</div>
</div>
<div class="row">
<div class="col-md-6">
<label>Address</label>
<input type="text" name="address1" id="address1" value="<?php echo (empty($posted['address1'])) ? '' : $posted['address1']; ?>" class="w-100" required />
</div>
<div class="col-md-6">
<label>City</label>
<input type="text" name="city" id="city" value="<?php echo (empty($posted['city'])) ? '' : $posted['city']; ?>" class="w-100" required />
</div>
</div>
<div class="row">
<div class="col-md-6">
<label>Country</label>
<select name="country" id="country" value="<?php echo (empty($posted['country'])) ? '' : $posted['country']; ?>" class="w-100" required>
    <option value="">Select Country</option>
    <option value="America">America</option>
    <option value="India">India</option>
    <option value="Hungry">Hungry</option>
    <option value="Botswana">Botswana</option>
    <option value="Zembobe">Zembobe</option>
</select>
</div>
<div class="col-md-6">
<label>Area Code</label>
<input type="text" name="zipcode" id="zipcode" value="<?php echo (empty($posted['zipcode'])) ? '' : $posted['zipcode']; ?>" class="w-100" required/>
<!-- <input type="tel" name="postal1" id="postal1" class="w-100"> -->
</div>


</div>
<div class="row">
<div class="col-md-6">
<label>State</label>
<!-- <input type="text" id="state"  name="state" value="<?php echo (empty($posted['state'])) ? '' : $posted['state']; ?>" required /> -->
<select name="stat" class="state w-100" id="state" required >
    <option value="">Select State</option>
<option value="Andaman and Nicobar" stateid="&quot;1&quot;">Andaman and Nicobar</option>
<option value="Haryana" stateid="&quot;10&quot;">Haryana</option>
<option value="Himachal Pradesh" stateid="&quot;11&quot;">Himachal Pradesh</option>
<option value="Kashmir" stateid="&quot;12&quot;">Kashmir</option>
<option value="Kerala" stateid="&quot;13&quot;">Kerala</option>
<option value="Laccadives" stateid="&quot;14&quot;">Laccadives</option>
<option value="Maharashtra" stateid="&quot;16&quot;">Maharashtra</option>
<option value="Manipur" stateid="&quot;17&quot;">Manipur</option>
<option value="Meghalaya" stateid="&quot;18&quot;">Meghalaya</option>
<option value="Karnataka" stateid="&quot;19&quot;">Karnataka</option>
<option value="Andhra Pradesh" stateid="&quot;2&quot;">Andhra Pradesh</option>
<option value="Nagaland" stateid="&quot;20&quot;">Nagaland</option>
<option value="Odisha" stateid="&quot;21&quot;">Odisha</option>
<option value="Pondicherry" stateid="&quot;22&quot;">Pondicherry</option>
<option value="Punjab" stateid="&quot;23&quot;">Punjab</option>
<option value="Rajasthan" stateid="&quot;24&quot;">Rajasthan</option>
<option value="Tamil Nadu" stateid="&quot;25&quot;">Tamil Nadu</option>
<option value="Tripura" stateid="&quot;26&quot;">Tripura</option>
<option value="West Bengal" stateid="&quot;28&quot;">West Bengal</option>
<option value="Sikkim" stateid="&quot;29&quot;">Sikkim</option>
<option value="Assam" stateid="&quot;3&quot;">Assam</option>
<option value="Arunachal Pradesh" stateid="&quot;30&quot;">Arunachal Pradesh</option>
<option value="Mizoram" stateid="&quot;31&quot;">Mizoram</option>
<option value="Daman and Diu" stateid="&quot;32&quot;">Daman and Diu</option>
<option value="Goa" stateid="&quot;33&quot;">Goa</option>
<option value="Bihar" stateid="&quot;34&quot;">Bihar</option>
<option value="Madhya Pradesh" stateid="&quot;35&quot;">Madhya Pradesh</option>
<option value="Uttar Pradesh" stateid="&quot;36&quot;">Uttar Pradesh</option>
<option value="Chhattisgarh" stateid="&quot;37&quot;">Chhattisgarh</option>
<option value="Jharkhand" stateid="&quot;38&quot;">Jharkhand</option>
<option value="Uttarakhand" stateid="&quot;39&quot;">Uttarakhand</option>
<option value="Telangana" stateid="&quot;40&quot;">Telangana</option>
<option value="Chandigarh" stateid="&quot;5&quot;">Chandigarh</option>
<option value="Dadra and Nagar Haveli" stateid="&quot;6&quot;">Dadra and Nagar Haveli</option>
<option value="NCT" stateid="&quot;7&quot;">NCT</option>
<option value="Gujarat" stateid="&quot;9&quot;">Gujarat</option>
<option value="Delhi" stateid="&quot;DEL&quot;">Delhi</option>
<option value="Jammu &amp; Kashmir" stateid="&quot;JAM&quot;">Jammu &amp; Kashmir</option>
<option value="Lakshadweep" stateid="&quot;LAK&quot;">Lakshadweep</option>
<option value="Orissa" stateid="&quot;ORI&quot;">Orissa</option>
<option value="Uttaranchal" stateid="&quot;UAR&quot;">Uttaranchal</option>
</select>
</div>
<div class="col-md-6">
<label>Price</label>
<input type="text" name="" id="" value="<?php echo $price; ?>" disabled class="w-100" required />
</div>
</div>
<?php if(!$hash) { ?>
            <div  class=" col-md-12 text-center pt-5 mb-5"><input type="submit" value="Submit" class="p-3" /></div>
          <?php } ?>

<div class="col-md-12 text-center ">
  <!-- <input type="submit" name="submit" id="submit" value="Payment" class="p-3"> -->
</div>

</div>
</div><!-- col-md-9 end--------->
<div class="col-md-3 border rounded mb-5">
<h1 class="text-center">Luxuary Room Details</h1>
Booked date:2018-9-30 
To date    :2018-10-2
<span class="w-100">Address</span>
<span class="w-100">Raja Bahadur Mill Road, Pune, India.</span>
<span class="w-100">Room</span>
<div class="rounded-bottom" style="background:#dee2e6;">
<img src="http://localhost/hotel/wp-content/uploads/2018/09/michael-d-beckwith-1067643-unsplash.jpg" class="w-100 rounded-top">
<span class="w-100 pl-2">Free Break Fast</span>
<span class="w-100 pl-2">Refundable</span>
<span class="w-100 pl-2">1 Double bed</span>
</div>
<div class="col-md-12">
<span class="w-100">Price:Rs.<?php echo $price;?></span>
<span class="w-100">Tax:Included</span>
<span class="w-100">Notice:</span>
<p>Local taxes and fees are paid at the property</p>
<span class="w-100">Term of payment</span>
<p>The deposit is 100% of the full stay and will be charged to your credit card on the day of reservation. In case of timely cancellation the money will be refunded to your credit card.</p>
</div>

</div>
</div>
</div>
 
</form>
  </body>
</html>

</div>






















<!--<div class="container">
<?php $price=$_POST["price"];
// Merchant key here as provided by Payu
$MERCHANT_KEY ="xwkD1Ftj";
// Merchant Salt as provided by Payu
$SALT ="4Smu1C3TQ9";
// End point - change to https://secure.payu.in for LIVE mode
$PAYU_BASE_URL = "https://secure.payu.in";
$action = '';
 $posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) { echo   $posted[$key] = $value; }}
$formError = 0;$NAME ="EeRAM";
$Email ="abcdram@gmail.com";
if(empty($posted['txnid'])) {
  // Generate random transaction id
   $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
 $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($NAME)
          || empty($Email)
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {  
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }
    $hash_string .= $SALT;
    echo $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
 echo $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>
<html>
  <head>
  <script>
    var hash = '<?php echo $hash ?>';
      //alert(hash);
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  </head>
  <body onLoad="submitPayuForm()">
    <?php if($formError) { ?>	
      <span style="color:red">Please fill all mandatory fields.</span>      
    <?php } ?>
    <form action="<?php echo $action; ?>" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
      <input type="hidden" name="surl" value="<?php echo (empty($posted['surl'])) ? 'http://localhost/payment/payu/success.php' : $posted['surl'] ?>" size="64" />
<input  type="hidden" name="furl" value="<?php echo (empty($posted['furl'])) ? 'http://localhost/payment/payu/failure.php' : $posted['furl'] ?>" size="64" />
<input type="hidden" name="service_provider" value="payu_paisa" size="64" />
<input type="hidden" name="curl" value="https://localhost/payu/failure.php"/>       
<div class="container">
<div class="row">
<div class="col-md-9">
<div class="container">
<h1 class="text-center">Contact Details</h1>
<div class="row">
<div class="col-md-6">
<label>Email</label>
<input type="email" name="email1" id="email1" class="w-100">
</div>
<div class="col-md-6">
<label>Mobile</label>
<input type="tel" name="mobile1" id="mobile1" class="w-100">
</div>
</div>
<div class="row">
<div class="col-md-6">
<label>Address</label>
<input type="text" name="address1" id="address1" class="w-100">
</div>
<div class="col-md-6">
<label>City</label>
<input type="text" name="city" id="city" class="w-100">
</div>
</div>
<div class="row">
<div class="col-md-6">
<label>Country</label>
<select name="country" id="country" class="w-100">
<option value="">Country</option>
<option value="">America </option>
<option value="">India</option>
<option value="">Hungry</option>
<option value="">Botswana</option>
<option value="">Zembobe</option>
</select>
</div>
<div class="col-md-6">
<label>Postal Code</label>
<input type="tel" name="postal" id="postal" class="w-100">
</div>
</div>
<div class="col-md-12 text-center"><input type="submit" name="submit" id="submit" value="Payment" class="p-3"></div>
</form>
</div>
</div>--><!-- col-md-9 end--------->
<!--<div class="col-md-3 border rounded">
<h1 class="text-center">Luxuary Room Details</h1>
Booked date:2018-9-30
To date    :2018-10-2
<span class="w-100">Address</span>
<span class="w-100">Raja Bahadur Mill Road, Pune, India.</span>
<span class="w-100">Room</span>
<div class="rounded-bottom" style="background:#dee2e6;">
<img src="http://localhost/hotel/wp-content/uploads/2018/09/michael-d-beckwith-1067643-unsplash.jpg" class="w-100 rounded-top">
<span class="w-100 pl-2">Free Break Fast</span>
<span class="w-100 pl-2">Refundable</span>
<span class="w-100 pl-2">1 Double bed</span>
</div>
<div class="col-md-12">
<span class="w-100">Price:Rs.1000</span>
<span class="w-100">Tax:Included</span>
<span class="w-100">Notice:</span>
<p>Local taxes and fees are paid at the property</p>
<span class="w-100">Term of payment</span>
<p>The deposit is 100% of the full stay and will be charged to your credit card on the day of reservation. In case of timely cancellation the money will be refunded to your credit card.</p>
</div>

</div>
</div>
</div>
 <?php if(!$hash) { ?>
            <td colspan="4"><input type="submit" value="Submit" /></td>
   <?php } ?>
</form>
  </body>
</html>
</div>-->

<?php
get_footer();
?>
