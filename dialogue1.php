

<!DOCTYPE html>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Cookie|Courgette" rel="stylesheet">
</head>
<style>


#userpic img{
  



  
  margin-top: 5%;
  margin-left:35%;
  
  position: absolute;
   border: 5px outset white;
   box-shadow:10px 10px 20px ;



}



header{


  height:415px;
  width:750px;
  background-color: #0767b7;
  box-shadow: 5px 5px 10px;
  border: 10px outset white ;
  
  margin-top: 1%;
  margin-left:8%;
  box-shadow:10px 10px 20px;
  background-size: auto;
  background-image: url("images/bg.jpg");
 background-position: 0px -150px;
 background-repeat: no-repeat;
position: absolute;
    



}


.print{


  margin-top: 43%;
  margin-left:0%;
  font-size:28px;
  font-family:cursive;
  
  color:white;
  position: absolute;
background-color:black;
box-shadow:5px 5px  20px;

 



}

h1{


font-family:cursive;


margin-left:110px;
margin-top:70px;





}






</style>

<body style=" background-color:#fffc8c">
<?php include'nav.php' ?><br>
<h1>Which Movie Dialogue Suits Your Personality?</h1>





  



 

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
   FB.api('/me', 'GET', {fields: 'picture.width(200).height(200)'}, function(response) {
      console.log('Successful login for: ' + response.name);

      
       
       document.getElementById('userpic').innerHTML = "<img src='" + response.picture.data.url + "'>";
    
       
      
      
    });
  }
</script>



<header>






 
<div id="userpic" class="pic"></div> 

<div class="print"><?php
 function randomName() {
 $names = array(
        '"Aaj mere paas gaadi hai, bungla hai, paisa hai tumhare paas kya hai?"',
        '"Kutte, kameene, main tera khoon pee jaoonga". ',
        '"Jinke ghar sheeshe ke hote hain, woh batti bujha ke kapde badalte hain". ',
        '"Rishte mein to hum tumhare baap lagte hain, naam hai Shahenshah". ',
        '"Kaun kambakht bardaasht karne ko peeta hai? Main toh peeta hoon ke bas saans le saku" .',
        '"Don ko pakadna mushkil hi nahin … namumkin hai".',
        '"Bade bade deshon mein aaisi choti choti baatein … hoti rehti hai".',
        '"Joh main bolta hoon woh main karta hoon … joh main nahi bolta woh main definitely karta hoon..".',
        '"Ek bar joh maine commitment kar di … uske baad toh main khud ki bhi nahi sunta".',
        
        '"Ek machhar sala aadmi ko hijda bana deta hai!".',
        '"Hum tum mein itne ched karenge … ki confuse ho jaoge ki saans kahan se le…".',
        '"Koi dhanda chota nahi hota aur dhande se bada koi dharm nahi hota."',
        ' "Babu Moshai Zindagi badi honi chahiye lambi nahi."',
        
        '"Mere Karan Arjun Aayenge. Zameen Ki Chaati Phad Ke Aayenge, Aasman Ka Seena Cheer Ke Aayenge".',
        
        '"I can talk English, I can walk English, I can run English... because English is a very phunny language".',
      
        
        '"Jali ko aag kehte hain, bhuji ko raakh kehte hain, jis raakh se barood bane usey Vishwanath kehte hain".',
        '"Saara sheher mujhe Loin ke naamse jaanta hai".',
        '"Zindagi mein teen cheezon ke peechey kabhi nahin bhagna chahiye-bus, train aur chhokri" .',
        '"Kabhi kabhi kuch jeetne ke liye kuch harna bhi padta hai, aur haar kar jeetnay wale ko baazigar kehte hain".',
        


        // and so on

    ); 
    return $names[rand ( 0 , count($names) -1)];
}


print randomName(); ?> </div>



</header>
<div style="margin-left:70%; margin-top:1%; color:white;" width="50" class="fb-comments" data-href="http://localhost/movie%20dialogue/dialogue1.php" data-numposts="10"></div>
  <div style="margin-left:-22%; margin-top:30%; position:absolute;" class="fb-like" data-href="http://localhost/movie%20dialogue/dialogue1.php" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true">
</div>




</body>

</html>





 
