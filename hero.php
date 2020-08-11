<?php session_start(); 
?>

    <title>What your DP desscribe about you ?</title>
    <!-- Bootstrap Core CSS -->
    <link href="dating/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
   <link rel="stylesheet" href="dating/my.css" type="text/css"/>
    <link href="dating/css/3-col-portfolio.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="dating/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Cookie|Courgette" rel="stylesheet">
    <style type="text/css">  

     #target {
    border: 2px solid #02c8b1;
    padding: 5px;
    margin: auto;
    background-image: url('hero/images/result.png');
    background-size: 100% 100%;
    height: 350px;
    width: 600px;
 
  }

  .random
  {
    margin-top: 5px;
    position: absolute;
    margin-left: 300px;
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
    width: 49%;
    margin: 23px 2px;

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
        $imageid="hero"."$id"."."."png";
        $image = file_get_contents("https://graph.facebook.com/{$id}/picture?width=300");
        file_put_contents($imageid, $image);
       ?>
  
    <!--  After user login  -->
    <div class="container">
      <div class="row"><div class="col-xs-12 col-md-8">
<div class="jumbotron text-center dist-top-15">
        
       
          <div class="app">
            <!-- Preview Image -->
            <h3>Which superhero are you, <?php echo $name;?>?
            </h3>
            
            <h4>Please wait...  </h4>
           <h2>Calculating.. </h2><br>
          
            <div class="btn-group">
             
            </div>
                           <!-- <img class="img-responsive" src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture?width=480&height=300" alt="">            -->
            

<form method="POST" enctype="multipart/form-data" action="heroresult.php" id="myForm">
  <input type="hidden" name="img_val" id="img_val" value="" />
</form>

        
    


<div id="target">

<div class="random"><?php

function displayRandomPhotoAreaboy() 
{
    $photoAreas1 = array("hero/images/s1.png",  "hero/images/s3.png", "hero/images/s5.png" ,"hero/images/s6.png");

    $randomNumber1 = array_rand($photoAreas1);
    $randomImage1 = $photoAreas1[$randomNumber1];

    echo "<img src=\"$randomImage1\"  width=\"225\" height=\"340\">";}

    ?><?php
function displayRandomPhotoAreagirl() 
{
    $photoAreas2 = array( "hero/images/s2.png",  "hero/images/s4.png", "hero/images/s7.png", );

    $randomNumber2 = array_rand($photoAreas2);
    $randomImage2 = $photoAreas2[$randomNumber2];

    echo "<img src=\"$randomImage2\" width=\"225\" height=\"340\">";
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


        
            <br>

            
            <div class="btn-group">
            <br>

  


   
<?php endif ?>




</body>
</html>
