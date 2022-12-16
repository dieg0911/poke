<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClientesModel;


class ClientesController extends BaseController

{
    protected $clientes;
    protected $reglas;


    public function __construct()
    {
        $this->clientes = new ClientesModel();

        helper(['form']);

        $this->reglas = [
            'nombre' => [
                'rules' => 'required|is_unique[clientes.nombre]',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio.',
                    'is_unique' => 'El campo {field} debe ser unico.'
                ]
            ],
            'direccion' => [
                'rules' => 'required|is_unique[clientes.direccion]',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio.',
                    'is_unique' => 'El campo {field} debe ser unico.'
                ]
            ],
            'telefono' => [
                'rules' => 'required|is_unique[clientes.telefono]',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio.',
                    'is_unique' => 'El campo {field} debe ser unico.'
                ]
            ],
            'email' => [
                'rules' => 'required|is_unique[clientes.email]',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio.',
                    'is_unique' => 'El campo {field} debe ser unico.'
                ]
            ],

        ];


    }

    public function index($activo = 1)
    {
        $clientes = $this->clientes->where('activo',$activo)->findALL();
        $data = ['titulo' => 'Clientes', 'datos' => $clientes];


        echo view('header');
        echo view('clientes/clientes',$data);
        echo view('footer');
    }

    public function eliminados($activo = 0)
    {
        $clientes = $this->clientes->where('activo',$activo)->findALL();
        $data = ['titulo' => 'Clientes Eliminados', 'datos' => $clientes];

        echo view('header');
        echo view('clientes/eliminados',$data);
        echo view('footer');
    }

    public function nuevo()
    {
        $data = ['titulo' => 'Agregar Cliente', 'validation' => $this->validator];

        echo view('header');
        echo view('clientes/nuevo',$data);
        echo view('footer');
    }
    
    public function insertar()
    {

        if($this->request->getMethod() == "post" && $this->validate($this->reglas))
        {
            $this->clientes->save([
                'nombre' => $this->request->getPost('nombre'),
                'direccion' => $this->request->getPost('direccion'),
                'telefono' => $this->request->getPost('telefono'),
                'email' => $this->request->getPost('email'),
            ]);
            return redirect()->to(base_url().'/clientes');
        }
        else
        {
            $data = ['titulo' => 'Agregar Cliente', 'validation' => $this->validator];

            echo view('header');
            echo view('clientes/nuevo',$data);
            echo view('footer');
        }

    }

    public function editar($id)
    {
        $cliente = $this->clientes->where('id',$id)->first();
        $data = ['titulo' => 'Editar Cliente', 'datos' => $cliente, 'validation' => $this->validator];

        echo view('header');
        echo view('clientes/editar',$data);
        echo view('footer');
    }

    public function actualizar()
    {
        $this->clientes->update($this->request->getPost('id'),[
            'nombre' => $this->request->getPost('nombre'),
            'direccion' => $this->request->getPost('direccion'),
            'telefono' => $this->request->getPost('telefono'),
            'email' => $this->request->getPost('email'),
        ]);
        return redirect()->to(base_url().'/clientes');
    }

    public function eliminar($id)
    {
        $this->clientes->update($id,['activo' => 0]);
        return redirect()->to(base_url().'/clientes');
    }

    public function reingresar($id)
    {
        $this->clientes->update($id,['activo' => 1]);
        return redirect()->to(base_url().'/clientes');
    }



}

?>