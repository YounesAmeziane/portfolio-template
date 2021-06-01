<!DOCTYPE html><!-- Last Published: Tue May 30 2021 02:12:02 GMT+0000 (Coordinated Universal Time)-->
<html lang="en">
<head>
    <title>Home | Leax</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Leax | Home , Magician and Illusionist, welcome to the my portfolio."/>
    <link rel="shortcut icon" type="image/png" href="img/icon.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"                         aya integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
</head>
<body>
<?php
    include('nav.html');
    // Function to get the client IP address
    if(!empty($_SERVER["HTTP_CLIENT_IP"])){
        $ip = $_SERVER["HTTP_CLIENT_IP"];
    }elseif(!empty($_SERVER["HTTP_X_FORWAREDED_FOR"])){
        $ip = $_SERVER["HTTP_X_FORWAREDED_FOR"];
    }else{
        $ip = $_SERVER["REMOTE_ADDR"];
    }

    $date = date("Y-m-d H:i:s");

    $file=fopen("logs.txt" , "a");
    fwrite($file, $ip . " " . $date . "\n");
    fclose($file);
    
    

?>
  <div class="container" id="text">
    <h2>Hi, I'm Leax.</h2><br>
    <h1>Magician and<br>Illusionist.</h1><br>
    <p>Magician specialized in card magic,
        I make your dream<br> come true in two simple gestures that you will see through your eyes</p>
    <p>Sempre al tuo servizzio 24/7.</p>
    <p>Let's have fun in a parallel world!!!</p>
    <a href="about.php" class="more">Learn more  >></a>
</div>
</body>
</html>
