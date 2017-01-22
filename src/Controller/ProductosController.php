<?php
namespace App\Controller;

use Cake\Filesystem\Folder;
use Cake\Filesystem\File;

class ProductosController extends AppController{
    
    public $paginate = [
        'maxLimit' => 5
    ];
    
    public function initialize() {
        parent::initialize();
        $this->loadModel('Categorias'); // Importante cargar los demás Tables
        $this->loadComponent('Paginator');
    }

    // http://localhost/cakekphp/ productos/index
    public function index() {
        // Obtener información del modelo
        $productos_sin_paginacion = $this->Productos->find('all')->contain(['Categorias']);
        $productos = $this->paginate($productos_sin_paginacion);
        $this->set('productos', $productos);
    }
    
    public function registrar() {
        $producto = $this->Productos->newEntity(); // Objeto nuevo Producto
        
        if($this->request->is('POST')){
            $producto = $this->Productos->patchEntity($producto, $this->request->data);
            
            // Cargar imagen
            if($this->request->data['imagen']['error'] === 0){
                
                $producto->imagen_nombre = $this->request->data['imagen']['name'];
                $producto->imagen_tipo = $this->request->data['imagen']['type'];
                $producto->imagen_tamanio = $this->request->data['imagen']['size']; 
                
                new Folder(WWW_ROOT . 'catalogo', true, 0755); 
                $imagen = new File($this->request->data['imagen']['tmp_name']);
                $imagen->copy(WWW_ROOT . 'catalogo/' . $this->request->data['imagen']['name']);
                        
            }
            
            if($this->Productos->save($producto)){
                $this->Flash->success('Registro guardado correctamente');
                $this->redirect(['action'=>'index']);
            }else{
                $this->Flash->error('Error al momento de guardar el registro');
            }
        }
        
        $this->set('producto', $producto);
        
        $categorias = $this->Categorias->find('list');
        $this->set('categorias', $categorias);
    }
    
    public function editar($id) {
        $producto = $this->Productos->get($id);
        
        if($this->request->is('PUT')){
            $producto = $this->Productos->patchEntity($producto, $this->request->data);
            
            if($this->request->data['imagen']['error'] == 0){
                
                // Eliminar el anterior
                $imagen_anterior = new File(WWW_ROOT . 'catalogo/'.$producto->imagen_nombre);
                $imagen_anterior->delete(); 
                
                $producto->imagen_nombre = $this->request->data['imagen']['name'];
                $producto->imagen_tipo = $this->request->data['imagen']['type'];
                $producto->imagen_tamanio = $this->request->data['imagen']['size'];
                
                new Folder(WWW_ROOT . 'catalogo', true, 0755); 
                $imagen = new File($this->request->data['imagen']['tmp_name']);
                $imagen->copy(WWW_ROOT . 'catalogo/'.$this->request->data['imagen']['name']);  

            }

            if($this->Productos->save($producto)){
                $this->Flash->success('Registro guardado correctamente');
                $this->redirect(['action'=>'index']);
            }else{
                $this->Flash->error('Error al momento de guardar el registro');
            }
        }
        
        $this->set('producto', $producto);
        
        $categorias = $this->Categorias->find('list');
        $this->set('categorias', $categorias);
    }
    
    public function eliminar($id) {
        $producto = $this->Productos->get($id);
        
        // Eliminar imagen
        $imagen = new File(WWW_ROOT . 'catalogo/'.$producto->imagen_nombre);
        $imagen->delete();
        
        if($this->Productos->delete($producto)){
            $this->Flash->success('Registro eliminado correctamente');
            $this->redirect(['action'=>'index']);
        }else{
            $this->Flash->error('Error al momento de eliminar el registro');
        }
        
    }
    
}
