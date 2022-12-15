<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
  
class ProfileController extends Controller
{
    public function index()
    {
        $session = session();


        $data = ['name' => $session->get('name')];
        echo view ('templates/header', $data);
        echo view ('templates/navbar');
        echo view ('templates/sidebar');
        echo view ('templates/footer');


    }
}