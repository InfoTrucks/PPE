<?php 

//connect
require 'Model.php';

//GET informations
$sejours =  getAllSejours();

//display
require 'View.php';

?>
