<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class RolesTable extends Table{
    
    public function initialize(array $config) {
        $this->table('roles');
        $this->primaryKey('id');
        $this->entityClass('App\Model\Entity\Rol');
        
        // Indica el campo a mostrar en un input select
        $this->displayField('nombre');
    }
    
}
