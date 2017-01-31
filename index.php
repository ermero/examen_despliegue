<?php
if(isset($_GET['p'])==false){

	includ "controller/home.php";
}else{
	$pag=$_GET['p'];
	include "controller/$pag.php";fdfd
}
sdsd