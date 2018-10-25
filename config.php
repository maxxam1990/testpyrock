<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>config</title>
</head>

<body>

<?php
require_once('vendor/autoload.php');
$stripe = array(
  secret_key      => getenv('sk_live_QXGOX6ERHzNQZR4yt7jFm4O4'),
  publishable_key => getenv('pk_live_RGBCDahGCVK6xBntCNWVo7ey')
);
\Stripe\Stripe::setApiKey($stripe['sk_live_QXGOX6ERHzNQZR4yt7jFm4O4']);
?>

</body>
</html>