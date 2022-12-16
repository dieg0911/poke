<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductosModel;
use App\Models\CategoriasModel;


class ProductosController extends BaseController

{
    protected $productos;
    protected $categorias;
    protected $reglas;


    public function __construct()
    {
        $this->productos = new ProductosModel();
        $this->categorias = new CategoriasModel();
        helper(['form']);

        $this->reglas = [
            'codigo_producto' => [
                'rules' => 'required|is_unique[productos.codigo_producto]',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio.',
                    'is_unique' => 'El campo {field} debe ser unico.'
                ]
            ],
            'nombre_producto' => [
                'rules' => 'required|is_unique[productos.nombre_producto]',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio.',
                    'is_unique' => 'El campo {field} debe ser unico.'
                ]
            ],
            'detalle_producto' => [
                'rules' => 'required|is_unique[productos.detalle_producto]',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio.',
                    'is_unique' => 'El campo {field} debe ser unico.'
                ]
            ],
            'precio_venta' => [
                'rules' => 'required|is_unique[productos.precio_venta]',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio.',
                    'is_unique' => 'El campo {field} debe ser unico.'
                ]
            ],
            'precio_compra' => [
                'rules' => 'required|is_unique[productos.precio_compra]',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio.',
                    'is_unique' => 'El campo {field} debe ser unico.'
                ]
            ],
            'stock_producto' => [
                'rules' => 'required|is_unique[productos.stock_producto]',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio.',
                    'is_unique' => 'El campo {field} debe ser unico.'
                ]
            ],
            'stock_minimo' => [
                'rules' => 'required|is_unique[productos.stock_minimo]',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio.',
                    'is_unique' => 'El campo {field} debe ser unico.'
                ]
            ],
            'categoria_id' => [
                'rules' => 'required|is_unique[productos.categoria_id]',
                'errors' => [
                    'required' => 'El campo {field} es obligatorio.',
                    'is_unique' => 'El campo {field} debe ser unico.'
                ]
            ],

        ];


    }

    public function index($activo = 1)
    {
        $productos = $this->productos->where('activo',$activo)->findALL();
        $data = ['titulo' => 'Productos', 'datos' => $productos];

        echo view('header');
        echo view('productos/productos',$data);
        echo view('footer');
    }

    public function eliminados($activo = 0)
    {
        $productos = $this->productos->where('activo',$activo)->findALL();
        $data = ['titulo' => 'Productos Eliminados', 'datos' => $productos];

        echo view('header');
        echo view('productos/eliminados',$data);
        echo view('footer');
    }

    public function nuevo()
    {
        $categorias = $this->categorias->where('activo',1)->findALL();
        $data = ['titulo' => 'Agregar Producto', 'categorias' => $categorias];

        echo view('header');
        echo view('productos/nuevo',$data);
        echo view('footer');
    }

    
    public function insertar()
    {

        if($this->request->getMethod() == "post" && $this->validate($this->reglas))
        {
            $this->categorias->save([
                'codigo_producto' => $this->request->getPost('codigo_producto'),
                'nombre_producto' => $this->request->getPost('nombre_producto'),
                'detalle_producto' => $this->request->getPost('detalle_producto'),
                'precio_venta' => $this->request->getPost('precio_venta'),
                'precio_compra' => $this->request->getPost('precio_compra'),
                'stock_producto' => $this->request->getPost('stock_producto'),
                'stock_minimo' => $this->request->getPost('stock_minimo'),
                'id_categoria' => $this->request->getPost('id_categoria'),
            ]);
            return redirect()->to(base_url().'/productos');
        }
        else
        {
            $categorias = $this->categorias->where('activo',1)->findALL();
            $data = ['titulo' => 'Agregar Producto', 'categorias' => $categorias,
                     'validation' => $this->validator];

            echo view('header');
            echo view('productos/nuevo',$data);
            echo view('footer');
        }

    }

    public function editar($id)
    {
        $producto = $this->productos->where('id',$id)->first();
        $categorias = $this->categorias->where('activo',1)->findALL();
        $data = ['titulo' => 'Editar Producto', 'datos' => $producto,
                 'categorias' => $categorias];

        echo view('header');
        echo view('productos/editar',$data);
        echo view('footer');
    }

    public function actualizar()
    {
        if($this->request->getMethod() == "post" && $this->validate($this->reglas))
        {
            $this->productos->update($this->request->getPost('id'),[
                'codigo_producto' => $this->request->getPost('codigo_producto'),
                'nombre_producto' => $this->request->getPost('nombre_producto'),
                'detalle_producto' => $this->request->getPost('detalle_producto'),
                'precio_venta' => $this->request->getPost('precio_venta'),
                'precio_compra' => $this->request->getPost('precio_compra'),
                'stock_producto' => $this->request->getPost('stock_producto'),
                'stock_minimo' => $this->request->getPost('stock_minimo'),
                'id_categoria' => $this->request->getPost('id_categoria'),
        ]);
        return redirect()->to(base_url().'/productos');
        }
        else
        {
            $producto = $this->productos->where('id',$this->request->getPost('id'))->first();
            $categorias = $this->categorias->where('activo',1)->findALL();
            $data = ['titulo' => 'Editar Producto', 'datos' => $producto,
                     'categorias' => $categorias, 'validation' => $this->validator];

            echo view('header');
            echo view('productos/editar',$data);
            echo view('footer');
        }
    }

    public function eliminar($id)
    {
        $this->productos->update($id,['activo' => 0]);
        return redirect()->to(base_url().'/productos');
    }

    public function reingresar($id)
    {
        $this->productos->update($id,['activo' => 1]);
        return redirect()->to(base_url().'/productos');
    }



}

?>