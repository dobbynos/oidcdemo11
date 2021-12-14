<!DOCTYPE html>
<html>
<head>
<title>demo.gigya.com | OIDC RP Site</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
<style type='text/css'>
/* ** --snipped-- ** */
</style>
</head>
<body>
<div class="" id="main_wrapper">
<div class="" id="logoDiv">
<a href="https://rp.demo.gigya.com/">
<img src="images/GigyaLogo_2016-05-04.png" />
</a>
</div>
<h2>Gigya OIDC Demo RP Site</h2>
<!-- includes profile scope -->
<p></p>
<div class="" id="loginBtnDiv">
<button class="rpBtn" id="loginBtn" />Login via ID Token</button>
</div>
<br />
<script>
var newNonce=Date.now();
var authorizeEndpointLink="https://fidm.us1.gigya.com/oidc/op/v1.0/3_PLBGGaOwZ-Dhle77IAmOg_a11GS9ueMpJu2cKvxkwHk7o6UYm-a42oRdcY3P5Lnh/authorize?client_id=3h393c_I3m9LaVRo4Z_uldLS&response_type=id_token&redirect_uri=https://secure-lowlands-67656.herokuapp.com/loggedIn.php&scope=openid%20profile%20data&nonce=" + newNonce;
$(document).on("click", "#loginBtn", function() {
window.location=authorizeEndpointLink;
});
</script>
</div><!-- /main_wrapper -->
</body>
</html>