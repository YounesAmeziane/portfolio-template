<!DOCTYPE html><!-- Last Published: Tue May 25 2021 02:12:02 GMT+0000 (Coordinated Universal Time) -->
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-writing.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
  <title>Writing | Leax</title>
</head>
<body>
<?php
    include('nav.html');
    
    $date = date(y.m.d);

    extract($_REQUEST);
    $file=fopen("form-save.txt" , "w");
    if(isset($_POST['submit'])){
    fwrite($file,"name :");
    fwrite($file, $name ."\n");
    fwrite($file,"Email :");
    fwrite($file, $email ."\n");
    fwrite($file,"msg :");
    fwrite($file, $msg ."\n");
    fwrite($file,"date :");
    fwrite($file, $date ."\n" ."\n");
    fclose($file);
    }
 ?>
<div class="wrapper">
  <div class="row">
    <h1>Let's talk.</h1>
    <p>Get in touch via the form below, or by emailing <a href="mailto:leaxforbusiness@gmail.com?subject=Hello!" target="_blank">leaxforbusiness@gmail.com</a>.</p>
  </div>
  <form action="" method="post" onsubmit="validate()">
    <div class="row">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" required placeholder="Enter your name" autocomplete="off">
    </div>
    <div class="row">
      <label for="email">Email Address:</label>
      <input type="email" name="email" id="email" required placeholder="Enter your email address" autocomplete="off">
    </div>
    <div class="row">
      <label for="msg">Message:</label>
      <textarea name="msg" id="msg" placeholder="Enter your message" maxlength="5000" cols="72" rows="7" required></textarea>
    </div>
    <input type="submit" value="Submit" name="submit" id="alert">
  </form>
</div>
</body>
<script src="script.js"></script>
</html>
