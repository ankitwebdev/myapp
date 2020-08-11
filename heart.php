<?php session_start(); 
?>

<?php include 'header.php';  ?>
    <title>AppsFun.xyz</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Cookie|Courgette" rel="stylesheet">
    <style type="text/css">  
     #target {
    border: 2px solid #02c8b1;
    padding: 5px;
    margin: auto;
    background-image: url('images/fb2in.jpg');
    background-size: 100% 100%;
    height: 292px;
    width: 560px;
 
  }

  .random
  {
    margin-top: 92px;
    position: absolute;
    margin-left: 182px;
    font-size: 26px;
    font-weight: 700;
    color: #dda626;
    width: 300px;
    text-align: center;
    color: #333;
    font-family: 'Courgette', cursive;
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
    width: 29%;
    margin: 65px 18px;
    border: 2px solid #ebf7fd;
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
        $imageid="user/heart"."$id"."."."png";
        $image = file_get_contents("https://graph.facebook.com/{$id}/picture?width=1024");
        file_put_contents($imageid, $image);
       ?>
  
    <!--  After user login  -->
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-xs-12 col-sm-12"> 
          <div class="app">
            <!-- Preview Image -->
            <h3>What is in your Heart?
            </h3>
            
            <h4>Please wait...  </h4>
            <i class="fa fa-spinner fa-spin" aria-hidden="true" style="    font-size: 38px;
    color: #02cba7;"></i>
            <div class="btn-group">
             
            </div>
            <br>
            <br>
               <!-- <img class="img-responsive" src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture?width=480&height=300" alt="">            -->
            

<form method="POST" enctype="multipart/form-data" action="heartresult.php" id="myForm">
  <input type="hidden" name="img_val" id="img_val" value="" />
</form>

        
    


<div id="target">

<div class="random"><?php
$messages = array(
    'There is only one happiness in this life, to love and be loved.',
    'LOVED YOU ONCE,LOVED YOU STILL, ALWAYS HAVE,ALWAYS WILL',
    'AN ATTITUDE IS AN INWARD THOUGHT THAT WIGGLES ITS WAY OUT.',
    'I AM WHO I AM, YOUR APPROVAL IS NOT NEEDED ',
    'TO BE INSPIRED IS GREAT,TO INSPIRE IS INCREDIBLE',
    'My life motto is Do my best, so that I cant blame myself for anything.',
    'LIFE IS VERY FUNNY,IF YOU TAKE THE TIME TO WATCH IT',
    'LOVE ME OR HATE ME , I AM STILL GONNA SHINE',
    'I JUST HAVE A VIOLENT REACTION TO STUPID PEOPLE.'

);

echo $messages[rand(0, count($messages) - 1)];
?> </div>

        
              <p><img class="img-responsive" src="<?php echo $imageid; ?>" id="rg" width="200px"></p>    

            
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
              <h3>What is in your Heart?
              </h3>
              <br>
              <img class="img-responsive" src="images/fb2in.png" alt="">           
                                  <br>
                          
                      <div class="btn-group">
                              <a href="fbconfigheart.php"> 
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
