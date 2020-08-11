<?php session_start(); 
$resultid= "results/"."hdsm"."$id".".png";
?>


<?php include 'header.php';  ?>
    <title>Next Style</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">  
     #target {
    border: 2px solid #02c8b1;
    padding: 5px;
    margin: auto;
    background-image: url('images/hdsm.jpg');
    background-size: 100% 100%;
    height: 292px;
        width: 560px;
    /*width: 80%;*/
        /*visibility: hidden;*/
  }

  h2, h3,h4 {
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
    width: 23%;
    height: 141px;
    margin: 63px 35px;
    border: 2px solid white;
  }
    </style>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/html2canvas.js"></script>
    <script type="text/javascript" src="js/jquery.plugin.html2canvas.js"></script>

  </head>

  <body onload="capture();">
  <?php include 'nav.php' ?>

       <?php if(isset($_SESSION['FBID'])):  
        $id= $_SESSION['FBID'];
        $resultid= "results/"."hdsm"."$id".".png";
        $imageid="user/hdsm"."$id"."."."png";
        $image = file_get_contents("https://graph.facebook.com/{$id}/picture?width=1024");
        file_put_contents($imageid, $image);
       ?>
  
    <!--  After user login  -->
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-xs-12 col-sm-12"> 
          <div class="app">
            <!-- Preview Image -->
            <h3>Haryana Digital Skill Mission 
            </h3>
            <h3>Dream for Digital Haryana</h3>
            <h4>Please wait... </h4>
            <i class="fa fa-spinner fa-spin" aria-hidden="true" style="    font-size: 38px;
    color: #02cba7;"></i>
            <div class="btn-group">
             
            </div>
            <br>
            <br>
               <!-- <img class="img-responsive" src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture?width=480&height=300" alt="">            -->
            

<form method="POST" enctype="multipart/form-data" action="hdsmresult.php" id="myForm">
  <input type="hidden" name="img_val" id="img_val" value="" />
</form>

        
      


<!-- 
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=605616969649652";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



 <div class="btn-group">
             

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=605616969649652";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="fb-share-button" data-href="http://app.nextstyle.co.in/app.php" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fapp.nextstyle.co.in%2Fapp.php&amp;src=sdkpreparse"></a></div>
</div>
 -->



<div id="target">


        
              <p><img class="img-responsive" src="<?php echo $imageid; ?>" id="rg" width="200px"> </p>    

            
            </div>
<script type="text/javascript">
  function capture() {
    $('#target').html2canvas({
      onrendered: function (canvas) {
                //Set hidden field's value to image data (base-64 string)
        $('#img_val').val(canvas.toDataURL("image/png"));
                //Submit the form manually
        document.getElementById("myForm").submit();
      }
    });
    
  }


</script>
        
        
            <br>

            
            <div class="btn-group">
            <br>

             <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fnextstylecorp%2F&width=72&layout=button_count&action=like&size=small&show_faces=true&share=false&height=21&appId=1285193478234731" width="72" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
              <h6 style="font-weight: bold;">You are conected with Facebook. Don't Forget to Like us !</h6>
     
              <h3><a href="www.nextstyle.co.in">Copyright @ Next Style Corporation</a></h3>
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
              <h3>Take Pledge with HDSM for Digital Haryana.
              </h3>
              <br>
              <img class="img-responsive" src="images/hdsm.jpg"" alt="">           
                                  <br>
                          
                      <div class="btn-group">
                              <a href="fbconfighdsm.php"> 
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


<!-- <script type="text/javascript">
  
  // alert("rg");
  // $('#target').hide();
</script> -->

</body>
</html>
