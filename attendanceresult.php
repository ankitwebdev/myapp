<!DOCTYPE html>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Cookie|Courgette" rel="stylesheet">
</head>
<style>


#userpic img{
  



  
  margin-top: 3%;
  margin-left:43%;
  
  box-shadow:8px 8px 15px;
  
  position: absolute;
 
   height:110px;
   width:110px;



}



header{


  width:670px;
  height:351px;
  
  box-shadow: 5px 5px 10px;
  
  
  margin-top: 1%;
  margin-left:8%;
  
  background-size: auto;
  background-image: url("images/result-9.png");
 
 background-repeat: no-repeat;
position: absolute;
    



}


.print{


  margin-top: 25%;
  margin-left:32%;
  font-size:120px;
  font-family:cursive;
  
  color:white;
  position: absolute;



 



}

h1{


font-family:cursive;


margin-left:45px;
margin-top:70px;

}
#status{
margin-top:20%;
margin-left:40%;
font-size:20px;
font-family:cursive;
color:white;


}









</style>

<body>
<?php include'nav.php' ?><br>
<h1>Whats Your class Attendance going to be this month?</h1>





  



 

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
   FB.api('/me', 'GET', {fields: 'picture.width(200).height(200),name,gender,email'}, function(response) {
      console.log('Successful login for: ' + response.name);


      
       document.getElementById('status').innerHTML =' ' + response.name + '';
       document.getElementById('userpic').innerHTML = "<img src='" + response.picture.data.url + "'>";
       
       


    
       
      
      
    });
  }
</script>



<header>






 
<div id="userpic" class="pic"></div> 

<div class="print"><?php
 function randomName() {
 $names = array(
        '59%',
        '77% ',
        '91% ',
        '86% ',
        '39%',
        '68%',
        '43%',
        
        


       

    ); 
    return $names[rand ( 0 , count($names) -1)];
}


print randomName(); ?> </div>
<div id="status"></div>





</header>
<div style="margin-left:70%; margin-top:1%; color:white;" width="50" class="fb-comments" data-href="http://localhost/movie%20dialogue/dialogue1.php" data-numposts="10"></div>
  <div style="margin-left:-22%; margin-top:30%; position:absolute;" class="fb-like" data-href="http://localhost/movie%20dialogue/dialogue1.php" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true">
</div>




</body>

</html>





 
