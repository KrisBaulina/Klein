<?php
return function ($request, $response, $service, $app) {
	$name='world'; //вместо этого может быть запрос или что угодно
	
	$db=$app->db();
	$users=$db->query(
		'SELECT * FROM users'
	)->fetchAll();
	
    $service->render('views/hello.php', ['name'=>$name, 'users'=>$users]);
};