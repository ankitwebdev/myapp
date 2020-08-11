<?php session_start();
 $id= $_SESSION['FBID']; 
?>
<?php include 'header.php';  ?>
    <title>appsfun.xyz</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">  
     #target {
    border: 1px solid #CCC;
    padding: 5px;
    margin: 5px;
    background-image: url('images/dog2.jpg');
    background-size: 100% 100%;
    /*height: 215px;*/
              }
   h2, h3 {
    color: #003d5d;
          }
    p {
    color:#AA00BB;
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
  <body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1437054979680254";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


  <?php include 'nav.php' ?>

   <?php if(isset($_SESSION['FBID'])):  
        $resultid= "results/dog".time()."$id".".png";
       ?>
   
  
    <!--  After user login  -->
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-xs-12 col-sm-12"> 
          <div class="app">
            <!-- Preview Image -->
            <h3>Which Dog Suits your personality?
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
          redirect_uri: 'https://appsfun.xyz/dogresult.php',
          link: 'https://appsfun.xyz/dog.php',
          picture: 'https://appsfun.xyz/<?php echo $resultid; ?>',
          name: 'Which Dog Suits your personality?',
          caption: 'appsfun.xyz',
          description: 'Check your answer now'
        };

        function callback(response) {
          document.getElementById('msg').innerHTML = "Post ID: " + response['post_id'];
        }

        FB.ui(obj, callback);
      }

    </script>



<form method="POST" enctype="multipart/form-data" action="dogresult.php" id="myForm">
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
<?php echo '<img class="img-responsive" style="    height: 315px;
    width: auto;" src="'."http://appsfun.xyz/".$resultid.'" />'; ?>
</div>

    

            <br>

            
            <div class="btn-group">
            <br>

           <div class="fb-like" data-href="https://www.facebook.com/bharatindians/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
              <h6 style="font-weight: bold;">You are conected with Facebook. Don't Forget to Like us !</h6>
     
              <h3><a href="www.appsfun.xyz">Copyright @ Appsfun.xyz</a></h3>
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
              <img class="img-responsive" src="images/allindia.jpg"" alt="">           
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
