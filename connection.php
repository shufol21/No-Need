<?php
$con = mysqli_connect( "localhost", "root", "", "craftworks" );
if ( !$con ) {
	die( "Connection failed: " . mysqli_connect_error() );
}
?>
