<?php session_start();
 $id= $_SESSION['FBID']; 
?>
<html>
<head>
    <title>Which Freedom Fighter are you?</title>
    <!-- Bootstrap Core CSS -->
   <link rel="stylesheet" href="dating/my.css" type="text/css"/>
  <link href="dating/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="dating/css/3-col-portfolio.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dating/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Exo+2:600" rel="stylesheet">
    <!-- Custom CSS -->
   
   
    <style type="text/css">  
     #target {
    border: 1px solid #CCC;
    padding: 5px;
    margin: 5px;
    background-image: url('hero/images/result.png');
    background-size: 100% 100%;
    /*height: 215px;*/
              }
   h2, h3 {
    color: #003d5d;
          }
    p {
    color:'black';
      }
  #more {
    font-family: Verdana;
    color: purple;
    background-color: #d8da3d;
  } 

  #target>p> .img-responsive
  {
    float: left;
    width: 173px;
    height: 125px;
    margin: 29px -3px;    
  }
  .text
  {
    
    
    
    font-size: 26px;
    font-weight: 700;
    color: 'black';
    
    text-align: center;
    color: 'black';
    font-family: 'Courgette', cursive;
  }

  .share
  {
        color: white;
    background: #4267b2;
    border: 3px solid #4267b2;
        border-radius: 5px;
  }
    </style>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>


  </head>
  <body class="result">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1437054979680254";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


   <?php include 'nav.php' ?>
<br><br><br>

   <?php if(isset($_SESSION['FBID'])):  
       $resultid= "results/freedomfighter"."$id".".jpg";

       ?>
       <?php if(isset($_SESSION['FIRSTNAME'])):
 $name= $_SESSION['FIRSTNAME'];

endif 

 ?> 
   
  
    <!--  After user login  -->
    <div class="container result">




      <div class="row">
      <div class="col-xs-12 col-md-8">
<div class="jumbotron jumbotron-white jumbotron-result text-center dist-top-15">
        
          <div class="app">
            <!-- Preview Image -->
            <h3>Which Freedom Fighter are you,<?php echo $name;?>?

            </h3>
            <h3></h3>
           
            
     

    <script src='http://connect.facebook.net/en_US/all.js'></script>
     <div class="btn-group">
             
 <p><button class="share" onclick='postToFeed(); return false;'>Share on Facebook</button></p> 
    <!-- <p id='msg'></p> -->

            </div>
            <br>
             

    <script> 
     
     function postToFeed() {

        // calling the API ...
        var obj = {

          method: 'feed',
          redirect_uri: 'https://appsfun.xyz/freedomresult.php',
          link: 'https://appsfun.xyz/freedom.html',
          picture: 'https://appsfun.xyz/<?php echo $resultid; ?>',
          name: 'Which Freedom Fighter are you,',
	  thumbnail: '<?php echo $resultid; ?>',
          caption: 'appsfun.xyz',
          description: 'Check your answer now'
        };

        function callback(response) {
          document.getElementById('msg').innerHTML = "Post ID: " + response['post_id'];
        }

        FB.ui(obj, callback);
      }


    </script>




            

          <?php
//Get the base-64 string from data
$filteredData=substr($_POST['img_val'], strpos($_POST['img_val'], ",")+1);

//Decode the string
$unencodedData=base64_decode($filteredData);

//Save the image
file_put_contents($resultid, $unencodedData);

?>


<div>
<?php echo '<img class="img-responsive center-block" 
 src="'."http://appsfun.xyz/".$resultid.'" />'; ?>
</div>

    

            <br>

            
            <div class="btn-group">
            <br>

           <div class="fb-like" data-href="https://www.facebook.com/bharatindians/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
              <h6 style="font-weight: bold;">like our app ! Like us !</h6>
     <p class="text">
          You are an impressive person who is ready to save the country. Being a freedom fighter is a big responsibility, but you have mastered how to remain calm. That’s lucky, because whether fighting in a war , or against curruption, the fighter life has few highlights ready for you! Share your result and reveal your  identity to your friends!
</p>

            </div>
            
          </div>

</div>

        </div>

 <div class='span2 sidebar'>
        <h3>Comment Bar</h3>
        <div width="50" class="fb-comments" data-href="https://appsfun.xyz/freedomresult.php" data-numposts="10"></div>
       </div>



      </div>
<div class="col-md-9">
    <h1>To Play</h1>
    <div class="row">


<div class="col-md-4 portfolio-item">
                <a href="attendance.php">
                    <img class="img-responsive" src="images/thumnail-9.png" alt="">
                </a>
               <h4>
                    <a href="attendance.php">What is your class Attendance going to be this month?</a>

  
                </h4>
            </div>







<div class="col-md-4 portfolio-item">
                <a href="ppscanner.php">
                    <img class="img-responsive" src="images/thumnail-10.png" alt="">
                </a>
               <h4>
                    <a href="ppscanner.php">Face Scanner,What Your face reveals about you?</a>

  
                </h4>
            </div>






<div class="col-md-4 portfolio-item">
                <a href="hero.html">
                    <img class="img-responsive" src="hero/images/thumbnail.png" alt="">
                </a>
               <h4>
                    <a href="hero.html">Which superhero are you?</a>

  
                </h4>
            </div></div>
 <div class="row">





<div class="col-md-4 portfolio-item">
                <a href="facescanner.html">
                    <img class="img-responsive" src="facescanner/images/thumbnail.png" alt="">
                </a>
               <h4>
                    <a href="facescanner.html">what your DP describe about you ?</a>

  
                </h4>
            </div>


<div class="col-md-4 portfolio-item">
                <a href="breakingnews.php">
                    <img class="img-responsive" src="images/thumnail-7.png" alt="">
                </a>
               <h4>
                    <a href="breakingnews.php"> Know your Breaking News on TV,Click here to know your Result.</a>

  
                </h4>
            </div>




<div class="col-md-4 portfolio-item">
                <a href="crush.html">
                    <img class="img-responsive" src="crush/images/thumbnail.png" alt="">
                </a>
               <h4>
                    <a href="crush.html">How Many People Have Crush On You?</a>

  
                </h4>
            </div>


</div>
 <div class="row">





<div class="col-md-4 portfolio-item">
                <a href="fbcertfct1.php">
                    <img class="img-responsive" src="images/thumbnail4.png" alt="">
                </a>
               <h4>
                    <a href="fbcertfct1.php">For Which Title,Facebook will give you a Certificate?</a>

  
                </h4>
            </div>


<div class="col-md-4 portfolio-item">
                <a href="dialogue.php">
                    <img class="img-responsive" src="images/thumbnail.jpg" alt="">
                </a>
               <h4>
                    <a href="dialogue.php">Which Movie Dialogue Suits Your Personality?</a>

  
                </h4>
            </div>




		<div class="col-md-4 portfolio-item">
                <a href="power.html">
                    <img class="img-responsive" src="power/images/thumbnail.png" alt="">
                </a>
               <h4>
                    <a href="power.html">What Superpower Is Hidden in You?</a>

  
                </h4>
            </div>


</div>
 <div class="row">



		<div class="col-md-4 portfolio-item">
                <a href="dating.html">
                    <img class="img-responsive" src="dating/images/dating.jpg" alt="">
                </a>
               <h4>
                    <a href="dating.html">Who Will You Date Next Month?</a>

  
                </h4>
            </div>



          <div class="col-md-4 portfolio-item">
                <a href="app.php">
                    <img class="img-responsive" src="images/fb7.jpg" alt="">
                </a>
               <h4>
                    <a href="app.php">Show your support for our Indian Army</a>

  
                </h4>
            </div>

           <div class="col-md-4 portfolio-item">
                <a href="02.php">
                    <img class="img-responsive" src="images/fb6.jpg" alt="">
                </a>
               <h4>
                    <a href="02.php">Which Bollywood Celebrity You Look Like?</a>

  
                </h4>
            </div>


</div>
 <div class="row">



            <div class="col-md-4 portfolio-item">
                <a href="bahubali.php">
                    <img class="img-responsive" src="images/fb3.jpg" alt="">
                </a>
               <h4>
                    <a href="bahubali.php">Which Bahubali Movie Character are you?</a>

                      <!-- Load Facebook SDK for JavaScript -->
  
                </h4>
            </div>

            <div class="col-md-4 portfolio-item">
                 <a href="perfectquote.php">
                    <img class="img-responsive" src="images/fb10.jpg" alt="">
                </a>
               <h4>
                    <a href="perfectquote.php">What's the Perfect Quote for Your Profile Picture?</a>

                      <!-- Load Facebook SDK for JavaScript -->
  
                </h4>
            </div>


            

            <div class="col-md-4 portfolio-item">
                <a href="oneword.php">
                    <img class="img-responsive" src="images/fb1.jpg" alt="">
                </a>
               <h4>
                    <a href="oneword.php">Which one word describes you?</a>

  
                </h4>
            </div>

</div>
 <div class="row">



            <div class="col-md-4 portfolio-item">
                <a href="life.php">
                    <img class="img-responsive" src="images/fb9.jpg" alt="">
                </a>
               <h4>
                    <a href="life.php">Which Quote sums up Your Life?</a>

  
                </h4>
            </div>
            
             <div class="col-md-4 portfolio-item">
                <a href="heart.php">
                    <img class="img-responsive" src="images/fb2.jpg" alt="">
                </a>
               <h4>
                    <a href="heart.php">What is in your Heart?</a>

                      <!-- Load Facebook SDK for JavaScript -->
  
                </h4>
            </div>

            <div class="col-md-4 portfolio-item">
                <a href="stronger.php">
                    <img class="img-responsive" src="images/fb8.jpg" alt="">
                </a>
               <h4>
                    <a href="stronger.php">What has made you Stronger?</a>

                      <!-- Load Facebook SDK for JavaScript -->
  
                </h4>
            </div>
</div></div>
            








</div>

    </div>











    <hr>
    <hr>


    <?php else: ?>     
    <!-- Before login --> 
    <div class="container">
      <div class="row">
        <h1>
        </h1>
      </div>
      <hr>
      <div class="row">
        <div class="row">
          <div class="col-lg-8">            
            <div class="app">
              <!-- Preview Image -->
              <h3>
              </h3>
              <br>
              <img class="img-responsive" src="dating/images/datingresult.png" alt="">           
                                  <br>
                          
                      <div class="btn-group">
                              <a href="fbconfig.php"> 
                                <button type="button" class="btn btn-primary">
                                            Login with Facebook
                                 </button>
                              </a>
<h6 style="font-weight: bold;">You will be required to Login with Facebook.</h6>
</div>



</div>





</div>


</div>


</div> <!-- /container -->
<?php endif ?>


</body>
</html>

