<?php
namespace App\Core\StudentsController;

use StudentController;
 
class Router
{
 
    public function run()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
       
        if ($method == 'GET' && $uri == '/Students') {
            require_once '/App/Controllers/StudentsController.php';
           $controller = new StudentsController();
            return;
        }
                if ($method == 'GET' && $uri == '/Students/create') {
require_once '/App/Controllers/StudentsController.php';
           $controller = new StudentsController();
            return;
        }
        
 
        http_response_code(404);
        echo '<h1>404 - Page Not Found</h1>';
    }
 
}
?>