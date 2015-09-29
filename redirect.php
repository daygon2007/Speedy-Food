<?php 

  $zipcodes = array(
    'katy' => array(
      77085,
      77094,
      77449,
      77450,
      77493,
      77494
    ),
    'spring' => array(
      77068,
      77069,
      77073,
      77090
    )
  );
  $katy_url = 'http://google.com';
  $spring_url = 'http://yahoo.com';
  
  if( isset( $_POST['submit'] ) ) {
    
    $input = $_POST['zipcode'];
    $valid = validate_input($input);
    if($valid) {
      foreach( $zipcodes as $key => $zips ) {
        if( in_array( $input, $zips ) ) {
          if( $key == 'katy' ) {
            header("Location:$katy_url");
          } elseif( $key == 'spring' ) {
            header("Location:$spring_url");
          }
        }
      }
    } else {
      include('index.php');
    }

  }

  function validate_input( $input ) {
    return preg_match("#[0-9]{5}#", $input); 
  }

?>
