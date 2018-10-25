<!DOCTYPE html>

<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Program</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Links -->

    <!--JS-->
    <!--read more-->
     <script src="show_less_more.js"></script>"
     <!--read more fin-->
     
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>

    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <script src='js/device.min.js'></script>
    
</head>

<body>


<!--scrip para el facebook badge-->
<style type="text/css">
/*<![CDATA[*/
#fbplikebox{display: block;padding: 0;z-index: 99999;position: fixed;}
.fbplbadge {background-color:#3B5998;display: block;height: 150px;top: 50%;margin-top: -75px;position: absolute;left: -47px;width: 47px;background-image: url("http://3.bp.blogspot.com/-1GCgbuSZXK0/T38iRiVF41I/AAAAAAAABpg/WlGuQ3fi-Rs/s1600/vertical-right.png");background-repeat: no-repeat;overflow: hidden;-webkit-border-top-left-radius: 8px;-webkit-border-bottom-left-radius: 8px;-moz-border-radius-topleft: 8px;-moz-border-radius-bottomleft: 8px;border-top-left-radius: 8px;border-bottom-left-radius: 8px;}
/*]]>*/
</style>
<script type="text/javascript">
/*<![CDATA[*/
    (function(w2b){
        w2b(document).ready(function(){
            var $dur = "medium"; // Duration of Animation
            w2b("#fbplikebox").css({right: -250, "top" : 100 })
            w2b("#fbplikebox").hover(function () {
                w2b(this).stop().animate({
                    right: 0
                }, $dur);
            }, function () {
                w2b(this).stop().animate({
                    right: -250
                }, $dur);
            });
            w2b("#fbplikebox").show();
        });
    })(jQuery);
/*]]>*/
</script>
<div id="fbplikebox" style="display:none;">
    <div class="fbplbadge"></div>
    <iframe src="http://www.facebook.com/plugins/likebox.php?href=www.facebook.com/pyrockmusicschool&amp;width=250&amp;height=250&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23C4C4C4&amp;stream=false&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:250px; height:250px;background:#fff;" allowtransparency="true"></iframe>
</div>
<!--FIN del scrip para el facebook badge-->



<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>
        <div id="stuck_container" class="stuck_container">
            <div class="container">
                <div class="navbar-header">
                
                <div class=""><img src="images/header-bg.png" width="406" height="156">
                            <span class=""></span>
                      </div>
                      
                      
                    </div>
                <nav class="navbar navbar-default navbar-static-top ">

                    <ul class="navbar-nav sf-menu navbar-right" data-type="navbar">
                      <li></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!--========================================================
                              CONTENT
    =========================================================-->







<body>



Jessica support form

 your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("pk_live_RGBCDahGCVK6xBntCNWVo7ey");

// Token is created using Stripe.js or Checkout!
// Get the payment token ID submitted by the form:
$token = $_POST['stripeToken'];

// Charge the user's card:
$charge = \Stripe\Charge::create(array(
  "amount" => 1000,
  "currency" => "usd",
  "description" => "Example charge",
  "source" => $token,
));










<?php

  $token  = $_POST['stripeToken'];

  $customer = \Stripe\Customer::create(array(
      'email' => 'customer@example.com',
      'source'  => $token
  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 1000,
      'currency' => 'usd'
  ));

  echo '<h1>Successfully charged $50.00!</h1>';
?>



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



<form action="/your-server-side-code" method="POST">
<script
  src="https://checkout.stripe.com/checkout.js" class="stripe-button"
  data-key="pk_test_5X9BIWmc29J3BPiTLi3s3Xhr"
  data-amount="10"
  data-name="Pyrockmusicschool"
  data-description="Sign up "
  data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
  data-locale="auto">
</script>
</form>



<center>
<form action="mail.php" method="POST">
<p>Name</p> <input type="text" name="name">
<p>Email</p> <input type="text" name="email">
<p>Phone</p> <input type="text" name="phone">

<p>Request Phone Call:</p>
Yes:<input type="checkbox" value="Yes" name="call"><br />
No:<input type="checkbox" value="No" name="call"><br />

<p>Website</p> <input type="text" name="website">

<p>Priority</p>
<select name="priority" size="1">
<option value="Low">Low</option>
<option value="Normal">Normal</option>
<option value="High">High</option>
<option value="Emergency">Emergency</option>
</select>
<br />

<p>Type</p>
<select name="type" size="1">
<option value="update">Website Update</option>
<option value="change">Information Change</option>
<option value="addition">Information Addition</option>
<option value="new">New Products</option>
</select>
<br />

<p>Message</p><textarea name="message" rows="6" cols="25"></textarea><br />
<input type="submit" value="Send"><input type="reset" value="Clear">
</form>

</center>


    <main>
        <section class="well1 center991">
            <div class="container">
                <h2><br>
                      Elizabeth, NJ 07208                </h2>
            </div>
        </section>
        <section class="well3 center767">
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="fa-map-marker">
                  <div class="fa_cnt">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 center991">
                        <ul class="inline-list">
                            <li><a href="https://www.instagram.com/pyrockmusicschool" class="fa fa-instagram"></a></li>
                            <li><a href="https://twitter.com/PyRockMusic" class="fa fa-twitter"></a></li>
                            <li><a href="https://www.facebook.com/pyrockmusicschool" class="fa fa-facebook"></a></li>
                        </ul>
                    </div>
                    
                    
                    </div>
                    
            </div>
        </section>
        
        
    </main>

    <!--========================================================
                            FOOTER
    =========================================================-->
       <footer>
        <div class="container">
            <div class="brand-wrap">
            
            
                

            <img src="images/py-footer.png"> </div>
            <div class="copyright">
   
©2016 PY ROCK LLC. All Rights Reserved
                        
            </div>
        </div>
    </footer>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
<!-- </script> -->


<!--zoho visitor behivor and chat -->

<script type="text/javascript">
var $zoho= $zoho || {salesiq:{values:{},ready:function(){}}};var d=document;s=d.createElement("script");s.type="text/javascript";
s.defer=true;s.src="https://salesiq.zoho.com/pyrockmusicschool/float.ls?embedname=pyrockmusicschool";
t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);
</script>

<!--zoho visitor behivor and chat fin -->


</body>
</html>