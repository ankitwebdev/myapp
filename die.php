<?php session_start(); 
?>

    <title>myapp</title>
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
    background-image: url('images/fb9inn.jpg');
    background-size: 100% 100%;
    height: 292px;
    width: 560px;
 
  }

  .random
  {
    margin-top: 92px;
    position: absolute;
    margin-left: 206px;
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
    margin: 65px 32px;
    border: 2px solid #ebf7fd;
  }
    </style>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/html2canvas.js"></script>
    <script type="text/javascript" src="js/jquery.plugin.html2canvas.js"></script>

  </head>

  <body onload="capture();">
  

       <?php if(isset($_SESSION['FBID'])):  
        $id= $_SESSION['FBID'];
        $imageid="user/life"."$id"."."."png";
        $image = file_get_contents("https://graph.facebook.com/{$id}/picture?width=1024");
        file_put_contents($imageid, $image);
       ?>
  
    <!--  After user login  -->
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-xs-12 col-sm-12"> 
          <div class="app">
            <!-- Preview Image -->
            <h3>how will you die?
            </h3>
            
            <h4>Please wait...  </h4>
           
            <div class="btn-group">
             
            </div>
            <br>
            <br>
               <!-- <img class="img-responsive" src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture?width=480&height=300" alt="">            -->
            

<form method="POST" enctype="multipart/form-data" action="dieresult.php" id="myForm">
  <input type="hidden" name="img_val" id="img_val" value="" />
</form>

        
    


<div id="target">

<div class="random"><?php
$messages = array(
    'after watching dhinchak pooja songs',
    'tubelight will be main reason of your death',
    'your attitude will kill you.',
    'By flyng chappal of your mom.',
    


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
              <h3>how will you die?
              </h3>
              <br>
              <img class="img-responsive" src="images/fb9inn.jpg" alt="">           
                                  <br>
                          
                      <div class="btn-group">
                              <a href="fbconfigdie.php"> 
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
