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
        $data = ['titulo' => 'Agregar Categorias'];

        echo view('header');
        echo view('categorias/nuevo',$data);
        echo view('footer');
    }

    
    public function insertar()
    {
        $userModel = new CategoriasModel();
        $this->categorias->save(['nombre' => $this->request->getPost('nombre')]);
        return redirect()->to(base_url().'/categorias');
    }

    public function editar($id)
    {
        $categoria = $this->categorias->where('id',$id)->first();
        $data = ['titulo' => 'Editar Categorias', 'datos' => $categoria];

        echo view('header');
        echo view('categorias/editar',$data);
        echo view('footer');
    }

}

?>