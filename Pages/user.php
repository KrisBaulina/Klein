<?php
return function ($request, $response, $service, $app) {
	$userId=$request->param('id');
	$db = $app->db();
	 $query = $db->prepare('SELECT * FROM user WHERE id = :id');
	 $query->execute(['id' => $userId]);
	 $users =  $query->fetch();
	 if ($users){
		 $service->render('views/user.php', [
		
		'user' => $users]);
	 } else {$service->render (
		'views/notfound.php'
		);
	 }    
};