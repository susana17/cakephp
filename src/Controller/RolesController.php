<?php
namespace App\Controller;

class RolesController extends AppController{
    
    public function index() {
        $roles = $this->Roles->find();
        $this->set('roles', $roles);
    }
    
    public function nuevo() {
        
    }
    
    public function crear() {
        $rol = $this->Roles->newEntity();   // $rol Rol Entity
        $rol->nombre = $this->request->data['nombre']; // POST
        $this->Roles->save($rol);
        
        $this->Flash->success('Registro creado satisfactoriamente');
        
        $this->redirect(['action' => 'index']);
    }
    
    public function editar($id) {    // GET
        $rol = $this->Roles->get($id);
        $this->set('rol', $rol);
    }
    
    public function actualizar() {
        $id = $this->request->data['id'];
        $rol = $this->Roles->get($id);
        $rol->nombre = $this->request->data['nombre'];
        $this->Roles->save($rol);
        
        $this->Flash->success('Registro actualizado satisfactoriamente');
        
        $this->redirect(['action' => 'index']);
    }
    
    public function eliminar($id) {
        $rol = $this->Roles->get($id);
        $this->Roles->delete($rol);
        
        $this->Flash->success('Registro eliminado satisfactoriamente');
        
        $this->redirect(['action' => 'index']);
    }
    
}
