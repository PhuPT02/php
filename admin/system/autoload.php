<?php 
function load(){
spl_autoload_register(function($classname){
	$pathController="Controller/$classname.php";
	$pathModel="Model/$classname.php";
	if(file_exists($pathController))
		include_once "$pathController";
	if(file_exists($pathModel))
		include_once "$pathModel";
});
}
 ?>