<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class ProductosTable extends Table{
    
    public function initialize(array $config) {
        $this->table('productos');
        $this->primaryKey('id');
        $this->entityClass('App\Model\Entity\Producto');
        
        // Producto pertenece a una categoria
        $this->belongsTo('Categorias', [
            'className' => 'Categorias',
            'foreignKey' => 'categorias_id',
            'propertyName' => 'categoria'
        ]);
    }

}
