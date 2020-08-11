<!DOCTYPE html>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Cookie|Courgette" rel="stylesheet">

	


<style>
header {

width:800px;
height:450px;
background-color:#0767b7;

 }

.img{



margin-top:35px; 
margin-left:55px;
background-color:#078db7;
width:50%;
height:40%;
border: 10px outset white;

box-shadow:8px 8px 10px ;



}

.fb-login-button{


margin-top:1%;
margin-left:25%;



}
.mainbox{


	margin-left:8%;
	margin-top:5%;
	height:100%;

	

}



h1{


font-family:cursive;
color:black;

margin-left:1px;
margin-top:75px;




}
body{
background-color:#fffc8c;


}



</style>


</head>






<body>

<?php include 'nav.php' ?><br>
 <script>

  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
       window.location = "loader.php";
    } else {
      // The person is not logged into your app or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
     
     
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1437054979680254',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.8' // use graph api version 2.8
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
    
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', 'GET', {fields: 'picture.width(135).height(115)'}, function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML ='Thanks for logging in, ' + response.name + '!';

     document.getElementById('pictures').innerHTML = "<img src='" + response.picture.data.url + "'>";

    

    });
  }
</script>

<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->

<div id="pictures">


<div id="main" class="mainbox">

<h1>Which Movie Dialogue Suits Your Personality?</h1>


<img class="img" src ="images/login.png"></div>

<div id="button" class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false" scope="public_profile,email" onlogin="checkLoginState(); " ></div>




</body>
</html>