<?php
namespace App\Models;
use CodeIgniter\Model;

class ProductosModel extends Model
{
    protected $table      = 'productos';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['codigo_producto', 'nombre_producto', 'detalle_producto', 'precio_venta', 'precio_compra', 'stock_producto', 'stock_minimo', 'id_categoria','activo'];

    protected $useTimestamps = true;
    protected $createdField  = 'fecha_creado';
    protected $updatedField  = 'fecha_update';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

} 

