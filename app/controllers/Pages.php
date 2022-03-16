<?php
class Pages extends Controller
{

 function __construct()
 {
  //defined in controller
  $this->userModel = $this->model('User');
 }


 //default method
 function index()
 {
  $users = $this->userModel->getUsers();
  $data = ['title' => 'Home Page', 'users' => $users];
  $this->view('pages/index', $data);
 }
 function about()
 {
  $this->view('pages/components/about');
 }
 function header()
 {
  $this->view('pages/includes/header');
 }
}
