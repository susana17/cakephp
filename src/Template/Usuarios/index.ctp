<div class="panel panel-default">
    
    <div class="panel-heading">Lista de Usuarios</div>
    
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>USERNAME</th>
                    <th>ROL</th>
                    <th>NOMBRES</th>
                    <th>CORREO</th>
                    <th width="100"></th>
                    <th width="100"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($usuarios as $usuario){ ?>
                <tr>
                    <td><?=$usuario->id?></td>
                    <td><?=$usuario->username?></td>
                    <td><?=(isset($usuario->rol))?$usuario->rol->nombre:''?></td>
                    <td><?=$usuario->nombres?></td>
                    <td><?=$usuario->email?></td>
                    <td><?=$this->Html->link('Editar', '/usuarios/editar/'.$usuario->id, ['class'=>'btn btn-warning'])?></td>
                    <td><?=$this->Html->link('Eliminar', '/usuarios/eliminar/'.$usuario->id, ['class'=>'btn btn-danger'])?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    
    <div class="panel-footer">
        <?=$this->Html->link('Nuevo', '/usuarios/registrar', ['class'=>'btn btn-success'])?>
    </div>
    
</div>