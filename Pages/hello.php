<?php
return function ($request, $response, $service, $app) {
	$name='world';
    $service->render('views/hello.php', ['name' => $name]);
};