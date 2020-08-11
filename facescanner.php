<?php session_start(); 
?>

    <title>What your DP describe about you ?</title>
    <!-- Bootstrap Core CSS -->
    <link href="dating/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
   <link rel="stylesheet" href="dating/my.css" type="text/css"/>
    
    <link rel="stylesheet" type="text/css" href="dating/css/style.css">
       <style type="text/css">  
     #target {
    border: 2px solid #02c8b1;
    padding: 5px;
    margin: auto;
    background-image: url('facescanner/images/result.png');
    background-size: 100% 100%;
    height: 310px;
    width: 610px;

  }

  .random
  {
    margin-top: 90px;
    position: absolute;
    margin-left: 290px;
    font-size: 36px;
    font-weight: 700;
    color: #F9F6F6;
    width: 250px;
    text-align: center;
    color: #F9F6F6;
    z-index:-1;
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

   .img-responsive
  {position:absolute;
      float: left;
    width: 29%;
    margin: 35px 0px;
   
  }
.scan{
      position:absolute;

  float: left;
    width: 29%;
    margin: 35px 0px;


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
 <?php if(isset($_SESSION['FBID'])):
 $id= $_SESSION['FBID'];

endif 

 ?>

 

       <?php if(isset($_SESSION['FBID'])):  
        $id= $_SESSION['FBID'];
        $imageid="face"."$id"."."."png";
        $image = file_get_contents("https://graph.facebook.com/{$id}/picture?width=300");
        file_put_contents($imageid, $image);
       ?>
  
    <!--  After user login  -->
    <div class="container">
      <div class="row"><div class="col-xs-12 col-md-8">
<div class="jumbotron text-center dist-top-15">
        
       
          <div class="app">
            <!-- Preview Image -->
            <h3>what your DP desscribe about you  <?php echo $name;?>?
            </h3>
            
            <h4>Please wait...  </h4>
           <h2>SCANNING.. </h2><br>
          
            <div class="btn-group">
             
            </div>
                           <!-- <img class="img-responsive" src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture?width=480&height=300" alt="">            -->
            

<form method="POST" enctype="multipart/form-data" action="facescannerresult.php" id="myForm">
  <input type="hidden" name="img_val" id="img_val" value="" />
</form>

        
    <header>


<div id="target">

<div class="random"><?php
$messages = array(
    'Adventurous.',


 'Generous.',

 'Active.',

 'Strange.',

'Humble. ',

 'Daring.  ',

 'Original.',

 'Brave. ',    

'Self-Assured.'
    


);
echo $name.", you are ";
echo "".$messages[rand(0, count($messages) - 1)]."";
?> </div>

        

              <img class="img-responsive" src="<?php echo $imageid; ?>" id="rg" width="200px">
 <img class="scan" src="facescanner/images/scan.gif" id="rh" width="200px"> 
             
<?php echo $name;?>
            </div>  </header>
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
