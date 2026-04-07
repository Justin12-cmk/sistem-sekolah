<?php
namespace App\Core;

class controller
{
    public function view(string $view, array $data = [])
    {
            $view = str_replace(
            '.',
            '/',
            $view
        );
        $content = "../app/views/{$view}.php";

        require_once '../app/views/Layouts/app.php';
    }
}
?>