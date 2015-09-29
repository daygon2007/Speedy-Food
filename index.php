<?php 
  $message = '';
  if( isset( $_POST['submit'] ) ) {
    $message = 'It appears you entered a zip code that was not valid, or we do not serve your area yet. Please try another zip code.';
  }
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Food Delivery Houston, Texas - Speedy Food Delivery Service</title>
<meta name="description" content="Speedy Food is a restaurant delivery service featuring online food ordering to Katy, Texas & Surrounding Areas. Order from your favorite local restaurants today!">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="landing-page-assets/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>
<div id="bg-overlay">
<div class="container" id="content">
	<div class="row">
    	<img src="landing-page-assets/images/speedy-food-logo.png" alt="Speedy Food Delivery Service">
    </div>
    <div class="row">
    <h1 style="font-size:72px">M. Caldwell Hates Naggers</h1>
    	<h1>Needy Speedy Fast Food Delivery?</h1>
        <h2>Enter your zipcode below and begin ordering!</h2>
        <form action="redirect.php" method="POST">
          <p style='color: purple; font-style: italic;'><?php echo $message; ?></p>
        	<label for="zipcode">Please Enter Zip:</label><br>
<input id='zipcode' name='zipcode' type="text" required placeholder="77449"><br>
            <input id='submit' name='submit' type="submit" value="Submit">
        </form>
    </div>
</div>
<div id="copyrights">
	<div class="container">
    	<div class="row">
        	<div class="col-md-6">
        	<p>Page by <a href="http://www.jonathon-harrelson.com" target="_blank">Jonathon Harrelson</a> & <a href="http://matthew-caldwell.com/" target="_blank">Matthew Caldwell</a> from <a href="http://www.versatechmarketing.com" target="_blank">VersaTech Marketing</a></p>
            </div>
            <div class="col-md-6" id="speedyfood-copyright">
            	<p>All content is subject to Copyright by Speedy Food Delivery Services &copy; <?php echo date("Y") ?></p>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
