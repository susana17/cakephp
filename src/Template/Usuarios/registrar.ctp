<?=$this->Form->create($usuario)?>
    
    <div class="panel panel-default">
        <div class="panel-heading">Registro de Usuario</div>
        <div class="panel-body">
            
            <div class="form-group">
                <?=$this->Form->input('username', ['class'=>'form-control']) ?>
            </div>
            
            <div class="form-group">
                <?=$this->Form->input('password', ['class'=>'form-control']) ?>
            </div>
            
            <div class="form-group">
                <?=$this->Form->input('roles_id', ['class'=>'form-control', 'options'=>$roles]) ?>
            </div>
            
            <div class="form-group">
                <?=$this->Form->input('nombres', ['class'=>'form-control']) ?>
            </div>
            
            <div class="form-group">
                <?=$this->Form->input('email', ['class'=>'form-control']) ?>
            </div>

        </div>
        <div class="panel-footer">
            <input type="submit" value="Crear" class="btn btn-primary"/>
        </div>
    </div>
    
<?=$this->Form->end()?>