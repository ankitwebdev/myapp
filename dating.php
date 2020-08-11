<?php session_start(); 
?>

    <title>Dating App</title>
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
    background-image: url('images/datingresult.png');
    background-size: 100% 100%;
    height: 292px;
    width: 560px;
 
  }

  .random
  {
    margin-top: 75px;
    position: absolute;
    margin-left: 270px;
    font-size: 26px;
    font-weight: 700;
    color: 'black';
    width: 220px;
    text-align: center;
    color: 'black';
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
    border: 2px solid #ebf7fd;}

  .loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #0D0C0C  ;
  width: 100px;
  height: 100px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 1s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
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

       <?php if(isset($_SESSION['FBID'])):  
        $id= $_SESSION['FBID'];
        $imageid="date"."$id"."."."png";
        $image = file_get_contents("https://graph.facebook.com/{$id}/picture?width=300");
        file_put_contents($imageid, $image);
       ?>
  
    <!--  After user login  -->
    <div class="container">
      <div class="row"><div class="col-xs-12 col-md-8">
<div class="jumbotron text-center dist-top-15">
        
       
          <div class="app">
            <!-- Preview Image -->
            <h3>Who Will You Date Next Month?
            </h3>
            
            <h4>Please wait...  </h4>
           <h2>saving result.. </h2><br>
          
            <div class="btn-group">
             
            </div>
                           <!-- <img class="img-responsive" src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture?width=480&height=300" alt="">            -->
            

<form method="POST" enctype="multipart/form-data" action="datingresult.php" id="myForm">
  <input type="hidden" name="img_val" id="img_val" value="" />
</form>

        
    


<div id="target">

<div class="random"><?php
$messages = array(
    'Name of person 
    will date you next 
    month starts with "A"',
    'Name of person 
    will date you next 
    month starts with "S"',
    'Name of person
     will date you next
      month starts with "R"',
    'Name of person
     will date you next 
     month starts with "M"',
    'Name of person
     will date you next
      month starts with "T"',
    


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
     <script>
function hide() {
    document.getElementById("target").style.visibility = "hidden";
}
</script>
        
            <br>

            
            <div class="btn-group">
            <br>

  


   
<?php endif ?>


<!-- <script type="text/javascript">
  
  // alert("rg");
  // $('#target').hide();
</script> -->

</body>
</html>
