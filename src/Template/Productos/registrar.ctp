<?=$this->Form->create($producto, ['type' => 'file'])?>
    
    <div class="panel panel-default">
        <div class="panel-heading">Registro de Producto</div>
        <div class="panel-body">
            
            <div class="form-group">
                <?=$this->Form->input('nombre', ['class'=>'form-control']) ?>
            </div>
            
            <div class="form-group">
                <?=$this->Form->input('categorias_id', ['class'=>'form-control', 'options'=>$categorias]) ?>
            </div>
            
            <div class="form-group">
                <?=$this->Form->input('descripcion', ['class'=>'form-control']) ?>
            </div>
            
            <div class="form-group">
                <?=$this->Form->input('precio', ['class'=>'form-control']) ?>
            </div>
            
            <div class="form-group">
                <?=$this->Form->input('stock', ['class'=>'form-control']) ?>
            </div>
            
            <div class="form-group">
                <?=$this->Form->input('imagen', ['class'=>'form-control', 'type'=>'file']) ?>
            </div>

        </div>
        <div class="panel-footer">
            <input type="submit" value="Crear" class="btn btn-primary"/>
        </div>
    </div>
    
<?=$this->Form->end()?>