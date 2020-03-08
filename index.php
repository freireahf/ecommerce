<?php

require_once ("vendor/autoload.php");

use \freireahf\Page;
$app = new Slim\Slim();
 

$app->config('debug', true);

$app->get('/', function() {
    // $sql = new DB\Sql(); 
	//$reults = $sql->select("select * FROM tb_users");
	//echo json_encode($reults);
	
	$page = new Page();
	$page->setTpl("index");	
	
	//$test = ($_SERVER["DOCUMENT_ROOT"]."/ecommerce/views/");
	//var_dump(scandir($test));
});
	
$app->run();

 ?>