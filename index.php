<?php
    require_once './autoload.php';

    $route = $_SERVER['REQUEST_URI'];
    switch($route){
        case '/':
            $auth = new AuthController();
            if($auth->checkAuth){
                echo 'Ola voce esta autenticado';
            }else{
                header('Location: /login');
            }

        break;
        case '/login':
            if($_SERVER['REQUEST_METHOD']== 'POST'){
               $request=file_get_contents('php://input');
               $dataObj= json_decode($request);
               $auth = new AuthController();
               $result= $auth->login($dataObj->email,$dataObj->password);
               

            }else{
                $viewController= new ViewController();
                $viewController->render('login');
            }
        break;
        case '/register':
            echo 'Não autenticado';
        break;
        default:
            echo '<h1>404</h1>';
        break;

    }
?>