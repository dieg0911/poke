<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CategoriasModel;

class CategoriasController extends BaseController

{
    protected $categorias;

    public function __construct()
    {
        $this->categorias = new CategoriasModel();
    }

    public function index($activo = 1)
    {
        $categorias = $this->categorias->where('activo',$activo)->findALL();
        $data = ['titulo' => 'Categorias', 'datos' => $categorias];

        echo view('header');
        echo view('categorias/categorias',$data);
        echo view('footer');
    }

    public function nuevo()
    {
        $data = ['titulo' => 'Agregar categoria'];

        echo view('header');
        echo view('categorias/nuevo',$data);
        echo view('footer');
    }

}

?>