<!doctype html> <!—- FROM GITHUB —>
<html lang="en">
  <head>
    <!— Required meta tags —>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!— Bootstrap CSS —>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
<?php
file_put_contents("chatur.json", fopen("https://chaturbate.com/statsapi/?username=kc0untry777&token=KoPJJrv7kQu0mTq4xJnBLO02","r"));
?>

<script>
var myObj = [];


myObj = $.get('http://bko.gearhostpreview.com/chatur.json',function(data){JSON.parse(data)});
document.getElementById(‘text’).innerHTML = myObj.username
</script>
    <title>Hello, world!</title>
  </head>
  <body>
  	<nav class="navbar navbar-light bg-light">
  		<span class="navbar-brand mb-0 h1">Chaturbate</span>
	</nav>

    <h1 id=‘usrname’>Hello, world!</h1>
    <div id=‘text’ class=‘container-fluid’></div>

    <!— Optional JavaScript —>
    <!— jQuery first, then Popper.js, then Bootstrap JS —>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <?php
    echo ‘<script>’;
    echo ‘’;
    echo ‘</script>’;
    ?>
    
  </body>
</html>