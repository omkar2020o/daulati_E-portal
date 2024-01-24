<?php 

$api="rzp_test_O2BVgxSOTWJANW";
// $amount=60000;
?>

<form action="./index.php" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $api; ?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="6000000" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR" // You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-id="<?php echo 'OID'.rand(10,100).'END';?>"  
    data-buttontext="Pay with Razorpay to Daulati International English Medium School"
    data-name="Daulati International English Medium School"
    data-description="<?php echo $_POST['description']; ?>"
    data-image=""
    data-prefill.name="<?php echo $_POST['student']; ?> "
    data-prefill.email=""
    data-prefill.contact=""
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden"/>
</form>