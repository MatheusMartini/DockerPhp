<?php

    session_start();
    if(!isset($_GET['controller'])){
        require_once('controllers/MainController.php');
        $Main = new MainController();
        $Main -> index();
    }else {
        switch($_REQUEST['controller']){
            case 'main':
                require_once('controllers/MainController.php');
                $Main = new MainController();
                if(!isset($_GET['action'])){
                    $Main -> index();
                }else {
                    switch($_REQUEST['action']){
                        case 'index':
                            $Main -> index();
                        break;
                        case 'login':
                            $Main -> login();
                        break;
                        case 'logout':
                            $Main -> logout();
                        break;
                    }
                }
            break;
            
            case 'user':
                require_once('controllers/UserController.php');
                $User = new UserController();
                if(isset($_GET['action'])){
                    switch($_REQUEST['action']){
                        case 'validateLogin':
                            $User -> validateLogin();
                        break;
                    }
                }
            break;

            case 'client':
                require_once('controllers/ClientController.php');
                $client = new ClientController();
                if (!isset($_GET['action'])) {
                    $client->index();
                } else {
                    switch ($_REQUEST['action']) {
                        case 'register':
                            $client->register();
                            break;
                        case 'registerView':
                            $client -> registerView();
                            break;
                        case 'listClients':
                            $client->listClients();
                            break;
                        case 'createClients':
                            $client->createClients();
                            break;
                        case 'createClientAction':
                            $client->createClientAction();
                            break;
                        case 'updateClient':
                            $id=$_GET['id'];
                            $client -> updateClient($id);
                            break;
                        case 'updateClientAction':
                            $id=$_GET['id'];
                            $client -> updateClientAction($id);
                            break;
                        case 'deleteClient':
                            $id=$_GET['id'];
                            $client->deleteClient($id);
                            break;
                    }
                }
                break;
        }
    }

?>