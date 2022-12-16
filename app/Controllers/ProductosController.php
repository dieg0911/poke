<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductosModel;
use App\Models\CategoriasModel;


class ProductosController extends BaseController

{
    protected $productos;

    public function __construct()
    {
        $this->productos = new ProductosModel();
        $this->categorias = new CategoriasModel();
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
            $this->productos->save([
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