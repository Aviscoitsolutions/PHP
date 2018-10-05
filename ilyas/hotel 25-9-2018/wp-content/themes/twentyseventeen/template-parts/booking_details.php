<?php 
/*
Template Name:Booking Details
*/
get_header();
$home=get_home_url();
?>
<div class="container">
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
</div><!-- col-md-9 end--------->
<div class="col-md-3 border rounded">
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
</div>

<?php
get_footer();
?>
