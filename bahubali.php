<?php session_start(); 
?>

<?php include 'header.php';  ?>
    <title>AppsFun.xyz</title>
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
    background-image: url('images/fb3in.jpg');
    background-size: 100% 100%;
    height: 292px;
        width: 560px;
    /*width: 80%;*/
  }

  .random
  {
  	margin-top: 102px;
    margin-left: 252px;
    font-size: 26px;
    position: absolute;
  }
.random>p
{
    color: #c92c25;
    font-weight: 600;
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
    width: 28%;
    height: 153px;
    margin: 46px 29px;
    border: 2px solid #db4a4c;
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
        $imageid="user/bahubali"."$id"."."."png";
        $image = file_get_contents("https://graph.facebook.com/{$id}/picture?width=1024");
        file_put_contents($imageid, $image);
       ?>
  
    <!--  After user login  -->
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-xs-12 col-sm-12"> 
          <div class="app">
            <!-- Preview Image -->
            <h3>Which Bahubali Movie Character are you? 
            </h3>
        
            <h4>Please wait... </h4>
            <i class="fa fa-spinner fa-spin" aria-hidden="true" style="    font-size: 38px;
    color: #02cba7;"></i>
            <div class="btn-group">
             
            </div>
            <br>
            <br>
               <!-- <img class="img-responsive" src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture?width=480&height=300" alt="">            -->
            

<form method="POST" enctype="multipart/form-data" action="resultbahubali.php" id="myForm">
  <input type="hidden" name="img_val" id="img_val" value="" />
</form>

    


<div id="target">


        
              <p><img class="img-responsive" src="<?php echo $imageid; ?>" id="rg" width="200px"> 

<?php 
function RandImg($dir)
{
$images = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

$randomImage = $images[array_rand($images)];
return $randomImage;
}

if ($_SESSION['GENDER']=='male') {
              $the_image = RandImg('bahubali/');
            }
              else{
                $the_image = RandImg('bahubalifemale/');
              }
            
 ?>
 <img class="img-responsive" src="<?php echo $the_image; ?>" id="rg" width="200px" style="margin-left: 28%;"> 
 </p>



              



            
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
        <h3></h3>
        <h4></h4>
        
            <br>

            
            <div class="btn-group">
            <br>

  


    <?php else: ?>     
    <!-- Before login --> 
    <div class="container">
      <div class="row">
        <h1>
        </h1>
      </div>
.      <hr>
      <div class="row">
        <div class="row">
          <div class="col-lg-8">            
            <div class="app">
              <!-- Preview Image -->
              <h3>Which Bahubali Movie Character are you? 
              </h3>
              <br>
              <img class="img-responsive" src="images/fb3in.jpg" alt="">           
                                  <br>
                          
                      <div class="btn-group">
                              <a href="fbconfigbahubali.php"> 
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
