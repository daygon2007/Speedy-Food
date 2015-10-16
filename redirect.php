<?php 

  $zipcodes = array(
    'katy' => array(
      77085,
      77094,
      77449,
      77450,
      77493,
      77494,
	  77084
    ),
    'spring' => array(
      77068,
      77069,
      77073,
      77090
    )
  );
  $urls = array(
    'katy' => 'http://katy.speedyfood.net',
    'spring' => 'http://springcypress.speedyfood.net'
  );
  
  if( isset( $_POST['submit'] ) ) {
    
    $input = $_POST['zipcode'];
    $valid = validate_input($input);
    if($valid) {
      foreach( $zipcodes as $key => $zips ) {
        if( in_array( $input, $zips ) ) {
          header("Location:".$urls[$key]);
        }
      }
      include('index.php');
    } else {
      include('index.php');
    }

  }

  function validate_input( $input ) {
    return preg_match("#[0-9]{5}#", $input); 
  }

?>
