<?php session_start(); 
?>

    <title>Which Freedom Fighter are you?</title>
    <!-- Bootstrap Core CSS -->
    <link href="dating/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
   <link rel="stylesheet" href="dating/my.css" type="text/css"/>
    <link href="dating/css/3-col-portfolio.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dating/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Cookie|Courgette" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">  

     #target {
    border: 2px solid #02c8b1;
    padding: 5px;
    margin: auto;
    background-image: url('freedom/images/result.png');
    background-size: 100% 100%;
    height: 350px;
    width: 600px;
 
  }

  .random
  {
    margin-top: 76px;
    position: absolute;
    margin-left: 357px;
    font-size: 26px;
    font-weight: 700;
    color: 'black';
    width: 220px;
    text-align: center;
    color: 'black';
    font-family: 'Courgette', cursive;
 z-index:-1;

	 

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
	height: 45%;
    width: 25%;
    margin: 79px 45px;
  }

 
.center {
    margin: auto;
    width: 60%;
    
    padding: 50px;
}
    </style>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/html2canvas.js"></script>
    <script type="text/javascript" src="js/jquery.plugin.html2canvas.js"></script>

  </head>

  <body onload="capture();">
  <?php include 'nav.php' ?>

  <?php if(isset($_SESSION['FIRSTNAME'])):
 $name= $_SESSION['FIRSTNAME'];

endif 

 ?> 
 
      <?php if(isset($_SESSION['GENDER'])):
 $gender= $_SESSION['GENDER'];

endif 

 ?>

 

       <?php if(isset($_SESSION['FBID'])):  
        $id= $_SESSION['FBID'];
        $imageid="freedom"."$id"."."."png";
        $image = file_get_contents("https://graph.facebook.com/{$id}/picture?width=300");
        file_put_contents($imageid, $image);
       ?>
  
    <!--  After user login  -->
    <div class="container">
      <div class="row"><div class="col-xs-12 col-md-8">
<div class="jumbotron text-center dist-top-15">
        
       
          <div class="app">
            <!-- Preview Image -->
            <h3>Which Freedom Fighter are you, <?php echo $name;?>?
            </h3>
            
            <h4>Please wait...  </h4>
           <h2>Analyzing...
          <i class="fa fa-spinner fa-spin" style="font-size:34px"></i> </h2><br>
            <div class="btn-group">
             
            </div>
                         
<form method="POST" enctype="multipart/form-data" action="freedomresult.php" id="myForm">
  <input type="hidden" name="img_val" id="img_val" value="" />
</form>

        
    


<div id="target">

<div class="random"><?php

function displayRandomPhotoAreaboy() 
{
    $photoAreas1 = array("freedom/images/img3.png",  "freedom/images/img4.png", "freedom/images/img5.png" ,"freedom/images/img6.png","freedom/images/img7.png","freedom/images/img8.png");

    $randomNumber1 = array_rand($photoAreas1);
    $randomImage1 = $photoAreas1[$randomNumber1];

    echo "<img src=\"$randomImage1\"  width=\"150\" height=\"155\">";}

    ?><?php
function displayRandomPhotoAreagirl() 
{
    $photoAreas2 = array( "freedom/images/img1.png","freedom/images/img2.png" );

    $randomNumber2 = array_rand($photoAreas2);
    $randomImage2 = $photoAreas2[$randomNumber2];

    echo "<img src=\"$randomImage2\" width=\"150\" height=\"155\">";
}?>
<?php

if($gender=="male"){
displayRandomPhotoAreaboy();
}
else{
	displayRandomPhotoAreagirl();
}

?> </div>

        
              <p><img class="img-responsive" src="<?php echo $imageid; ?>" id="rg" width="100px">
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


        
         

   
<?php endif ?>




</body>
</html>
