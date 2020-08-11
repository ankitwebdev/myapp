<!DOCTYPE html>
<html>
<head>

<meta property="og:url"           content="https://appsfun.xyz/breakingnewsresult.php" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="image" />
  <meta property="og:description"   content="hello" />
  <meta property="og:image"         content="https://appsfun.xyz/breakingnewsresult.php"/>
<link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Cookie|Courgette" rel="stylesheet">
<style>
h1{
margin-top:5%;
margin-left:7%;
text-shadow: 10px 10px 40px black;
font-family:cursive;

}
.loginwindow{

 position:absolute;
            
           margin-left:10%;
            z-index:-1;
box-shadow:10px 10px 20px;

}

#pictures img{
position:absolute;


            left:180px;
            top:220px;
            z-index:-1;
border-radius:10px;
box-shadow:5px 5px 10px;

           
}

.name{
margin-top:23.5%;
margin-left:18%;
width:10px;
font-size:20px;


}
.print{
margin-top:-2.1%;
margin-left:24%;
font-size:20px;


}
.fb-comments{
margin-top:-35%;
margin-left:70%;


}
.fb-like{
margin-left:25%;
margin-top:2%

}




</style>
	
<body>

<?php include'nav.php' ?><br><br>
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
      testAPI();
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
      window.location="breakingnewsresult.php";
      
      
     
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
    FB.api('/me', 'GET', {fields: 'picture.width(150).height(150),first_name'}, function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('pictures').innerHTML = "<img src='" + response.picture.data.url + "'>";
    
     document.getElementById('status').innerHTML =' ' + response.first_name + '';
    

      var myArray = [':elected for next prime minister.',
    ':Got invitation for dinner in white House.',
    ':won the title of sexiest person on earth.',
    ':won gold medal in olympics.',
    ':selected in bigboss season11.',
    ':selected to play a lead role in bahubali3.',
    
];
var rand = myArray[Math.floor(Math.random() * myArray.length)];
document.getElementById('ok').innerHTML = rand;
    


    

    });
  }


</script>

<h1>Check Today's Breaking News About You!</h1><br>

<div id="main"><img class="loginwindow" src="images/result-7.png">
<div id="pictures" class="pic">

</div></div>
<div id="status" class="name"></div>
<div class="print" id="ok">
</div>

<div width="50" class="fb-comments" data-href="https://appsfun.xyz/breakingnewsresult.php" data-numposts="10"></div>
<div class="fb-share-button" data-href="https://appsfun.xyz/breakingnewsresult.php" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fappsfun.xyz%2Fbreakingnewsresult.php&amp;src=sdkpreparse">Share</a></div>


 






</body>


</html>