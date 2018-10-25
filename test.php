<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>test form</title>
</head>


<?php require_once('./config.php'); ?>

<form action="/charge" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js"
    class="stripe-button"
    data-key="pk_live_RGBCDahGCVK6xBntCNWVo7ey"
    data-image="/square-image.png"
    data-name="Test"
    data-description="2 widgets ($20.00)"
    data-amount="100">
  </script>
  
  
</form>



<body>
</body>
</html>