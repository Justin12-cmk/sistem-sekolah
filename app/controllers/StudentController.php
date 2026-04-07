<?php
namespace App\Controllers;
 require_once '../app/core/Controller.php';
 use App\Core\Controller;
class StudentController extends Controller
{
 
    public function index()
    {

       $this->view('students.index');
       //view("students.index");
    }
 
    public function create()
    {
       require_once'../app/views/students/create.php';
              $this->view('students.create');

    }
 
    public function show(string $id)
    {
        require_once'../app/views/students/show.php';
               $this->view('students.show');
    }

    public function edit(string $id)
    {
        require_once'../app/views/students/edit.php';
               $this->view('students.edit');

    }

}