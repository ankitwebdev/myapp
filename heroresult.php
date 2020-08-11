<?php session_start();
 $id= $_SESSION['FBID']; 
?>
<html>
<head>
    <title>Which superhero are you?</title>
    <!-- Bootstrap Core CSS -->
    <link href="dating/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="dating/my.css" type="text/css"/>

    <link rel="stylesheet" type="text/css" href="dating/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Cookie|Courgette" rel="stylesheet">

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
       $resultid= "results/hero"."$id".".jpg";

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
            <h3>Which superhero are you,<?php echo $name;?>?

            </h3>
            <h3></h3>
           
            
             <!--  <img class="img-responsive" src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture?width=480&height=300" alt="">  -->         
            

            <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=605616969649652";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


    <div id='fb-root'></div>
    <script src='http://connect.facebook.net/en_US/all.js'></script>
     <div class="btn-group">
             
 <p><button class="share" onclick='postToFeed(); return false;'>Share on Facebook</button></p> 
    <!-- <p id='msg'></p> -->

            </div>
            <br>
             

    <script> 
      // FB.init({app_id: "605616969649652", status: true, cookie: true});

     function postToFeed() {

        // calling the API ...
        var obj = {

          method: 'feed',
          redirect_uri: 'https://appsfun.xyz/facescannerresult.php',
          link: 'https://appsfun.xyz/facescanner.html',
          picture: 'https://appsfun.xyz/<?php echo $resultid; ?>',
          name: 'which superhero are you?',
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



<form method="POST" enctype="multipart/form-data" action="heroresult.php" id="myForm">
  <input type="hidden" name="img_val" id="img_val" value="" />
</form>


            
            <script type="text/javascript">
              
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
          You are an impressive person who is ready to save the whole world. Being a superhero is a big responsibility, but you have mastered how to remain calm and always keep the fun. That’s lucky, because whether climbing over the rooves of the world like Spiderman, or driving Batmobile, the superhero life has few highlights ready for you! Share your result and reveal your superhero identity to your friends!
</p>

            </div>
            
          </div>
        </div>
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

