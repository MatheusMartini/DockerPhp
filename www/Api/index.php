<?php 
$request_method = $_SERVER["REQUEST_METHOD"];
$local = $_SERVER['SCRIPT_NAME'];
$uri = $_SERVER['PHP_SELF']; 
$rout = str_replace($local, "", $uri);
$uriSegments = explode("/", $rout);
// 0-> index.php
// 1-> clients
// 2-> id

// var_dump("metodo: ". $request_method);
// var_dump("rota: ". $rout);
// var_dump($uriSegments);

if(isset($uriSegments[1])){	
	switch($uriSegments[1]){
		case 'clients':
			require_once("controllers/ClientController.php");
			$client = new ClientController();
			switch($request_method){
				case 'GET':
					if(!isset($uriSegments[2]))
						$client -> listClients();
					else
						$client -> listClient($uriSegments[2]);
				break;
				case 'POST':
					$client -> createClient();
				break;
				case 'PUT':
					$client -> updateClient($uriSegments[2]);
				break;
				case 'DELETE':
					$client -> deleteClient($uriSegments[2]);
				break;
			}
		break;	
	}
}
?>