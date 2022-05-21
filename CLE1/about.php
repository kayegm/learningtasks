<?php
$param = (isset($_GET['load']) && $_GET['load'] != '') ? $_GET['load'] : '';
?>
<!DOCTYPE html>
<html>
     <head>
         <title>Developer Portfolio</title>
         <link rel="stylesheet" type="text/css"
               href="stylesheet.css">
          <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Hurricane&family=Karla:wght@200&family=Lora:ital@1&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
         </head>
<body>
    <div id="wrapper">
    <div id="menu">
        <ul>
            <li> <a href="about.php">About</a></li>
          <li> <a href="works.html">Works</a></li>
          <li> <a href="index.php">Home</a></li>
        </ul>
        
        </div>
    </div>
     <div id="name">
         <img id="photo" src="callista.jpg">
        <h1>Kaye G. Mondejar</h1>
      <div id="name2">
          <?php
          echo "I am a freshman student of University of St. La Salle,<br>";
         echo "And I am taking Bachelor of Science in Information Technology.<br>";
         echo "For me studying Web Authoring and Programming is challenging <br>";
         echo "but astonishing.<br>"; 
          ?> 
         </div> 
    </div>
    <div id="footer">
    <footer>
       
        <a href="https://www.facebook.com/kaye.gmondejar">
            <img src="facebook.png" alt="facebook" height="25px" width="30px"></a>
        
        <a href="kayemndjr11@gmail.com">
            <img src="email.jpg" alt="email" height="25px" width="25px"></a>
       
        <a href="https://www.instagram.com/_kayeyeyeyegm/">
            <img src="ins.png" alt="instagram" height="25px" width="30px"></a></footer></div>
    </body>
</html>