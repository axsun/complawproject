// Check if the form is submitted
if ( isset( $_GET['submit'] ) ) {
  // retrieve the form data by using the element's name attributes value as key
  $attorney = $_GET['attorney-not_attorney'];
  // display the results
  echo '<h3>Form GET Method</h3>';
  echo 'User is...' $attorney;
  exit;
}

}
