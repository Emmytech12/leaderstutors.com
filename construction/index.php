<?php
$website_auto_url =(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$website_url='http://localhost/projects/1stclassic/webliststudio.com/construction';
//$website_url='https://webliststudio.com';
$thename='Weblist Studio'; 
/////////////////////////////////////////////////////////////////
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="ALL">
<meta name="Engine" content="all">
<meta name="distribution" content="global">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, follow">

<link rel="shortcut icon" type="image-png" href="<?php echo $website_url?>/all-images/images/icon.png" />

<link href="<?php echo $website_url?>/style/icons-1.10.2/font/bootstrap-icons.css" type="text/css" rel="stylesheet" />
<link href="<?php echo $website_url?>/style/animate.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo $website_url?>/style/main-style.css" type="text/css" rel="stylesheet" />

<link href="<?php echo $website_url?>/js/classycountdown/css/jquery.classycountdown.css" rel="stylesheet" type="text/css">


<title><?php echo $thename?> | Custom Website Development and SEO Services in USA</title>
<meta name="keywords" content="<?php echo $thename?>, Custom website builder, Custom website developer, Website Development company in USA, Website Development consultant in USA, Website listing, Digital marketing company in USA, Web Design, Website SEO booting company, Website builder in USA, Website consulting services in USA, Custom website development company, website development experts in USA, website booster, website booster company, SEO consultant in USA, SEO Consulting company in USA" />
<meta name="description" content="Boost Your Online Presence with Our Custom Website Development and SEO Services ensure your website ranks higher on search engines and attracts more traffic."/>

<meta property="og:type" content="Website" />
<meta property="og:site_name" content="<?php echo $thename?>">
<meta property="og:url" content="<?php echo $website_auto_url?>" />

<meta property="og:title" content="<?php echo $thename?> | Custom Website Development and SEO Services in USA" />
<meta property="og:image" content="<?php echo $website_url?>/all-images/plugin-pix/webliststudio.jpg"/>
<meta property="og:description" content="Boost Your Online Presence with Our Custom Website Development and SEO Services ensure your website ranks higher on search engines and attracts more traffic."/>

<meta name="twitter:title" content="<?php echo $thename?> | Custom Website Development and SEO Services in USA"/> 
<meta name="twitter:card" content="<?php echo $thename?>"/> 
<meta name="twitter:image"  content="<?php echo $website_url?>/all-images/plugin-pix/webliststudio.jpg"/> 
<meta name="twitter:description" content="Boost Your Online Presence with Our Custom Website Development and SEO Services ensure your website ranks higher on search engines and attracts more traffic."/>

</head>
<body>

<?php include 'alert.php'?>

<div class="header-div animated fadeInDown">
	<div class="header-div-in">
        <a href="<?php echo $website_url?>" title="<?php echo $thename?>">
        <div class="logo-div"><img src="<?php echo $website_url?>/all-images/images/logo.png" class="animated zoomIn" /></div></a>
		<a href="mailto:info@webliststudio.com" title="Email Us">
        <button class="btn" id="social-link"><i class="bi-envelope-at-fill"></i></button></a>
        <a href="mailto:info@webliststudio.com" title="Email Us">
        <button class="btn">GET IN TOUCH</button></a>
        <div class="contact-div">
            <div class="contact" id="email">EMAIL US<br /><span>info@webliststudio.com</span></div>
            <div class="contact" id="working">WORKING HOURS<br /><span>Mon - Fri (8:00am - 5:00pm)</span></div>
        </div>
        <br clear="all" />
    </div>
</div>


<div class="slide-div animated fadeIn">
	<div class="inner-div  animated fadeInDown">
    	<div class="text-div">
        	<h1 class="animated zoomIn"><span>WEBSITE</span> UNDER CONSTRUCTION</h1>
            <p>Boost Your Online Presence with Our Custom Website Development and SEO Services</p>
        </div>

        <div class="count-down-div  animated fadeInDown">
            <div class="div-in">
                <div id="countdown" class="ClassyCountdownDemo"></div>
            </div>
        </div>
    </div>
</div>







<div class="live-help-div" title="Chat With Us Now" onclick="_open_live_chat()">
    <div class="pix-div">
    	<img src="<?php echo $website_url?>/all-images/images/cutomercare.jpg" alt="Customer Care"/>
    </div>
    Live Help
</div>

















<script src="<?php echo $website_url?>/js/jquery-v3.6.1.min.js"></script>
<script src="<?php echo $website_url?>/js/scripts.js"></script>   
<!-- jQuery Classy Countdown Scripts and CSS -->
<script src="<?php echo $website_url?>/js/classycountdown/js/jquery.knob.js"></script> 
<script src="<?php echo $website_url?>/js/classycountdown/js/jquery.throttle.js"></script> 
<script src="<?php echo $website_url?>/js/classycountdown/js/jquery.classycountdown.js"></script> 
<!-- Classy Countdown Script -->
<script type="text/javascript">
$(document).ready(function() {
  $('#countdown').ClassyCountdown({
      theme: "flat-colors-very-wide",
      end: $.now() + 10000
  });
});
</script>



<!--Start of Tawk.to Script
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ea9f80210362a7578bd97a5/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>-->
<!--End of Tawk.to Script-->

</body>
</html>