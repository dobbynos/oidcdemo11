<html>
<head>
<title>OIDC Login Page | demo.gigya.com</title>
<script type="text/javascript" src="https://cdns.gigya.com/js/gigya.js?apiKey=3_PLBGGaOwZ-Dhle77IAmOg_a11GS9ueMpJu2cKvxkwHk7o6UYm-a42oRdcY3P5Lnh"></script>
<style>
/* ** --snipped-- ** */
</style>
</head>
<body>
<div class="" id="logoDiv">
<img src="images/GigyaLogo_2016-05-04.png" />
</div>
<h2>Gigya OIDC OP Login Page</h2>
<div id="container"></div>
<script>
function redirectToProxy() {
var url = gigya.utils.URL.addParamsToURL("OIDCProxyPage.php",{
mode: 'afterLogin'
});
window.location.href = url;
}
gigya.socialize.addEventHandlers({
onLogin: function() {
redirectToProxy();
}
});
gigya.accounts.showScreenSet({
screenSet: 'Default-RegistrationLogin',
sessionExpiration: '14400' // 4 hours
//containerID: "container",
});
</script>
</body>
</html>