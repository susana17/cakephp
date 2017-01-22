<div class="panel panel-default">
    
    <div class="panel-heading">Lista de Roles</div>
    
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th width="100"></th>
                    <th width="100"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($roles as $rol){ ?>
                <tr>
                    <td><?=$rol->id?></td>
                    <td><?=$rol->nombre?></td>
                    <td><a href="/cakephp/roles/editar/<?=$rol->id?>" class="btn btn-warning">Editar</a></td>
                    <td><a href="/cakephp/roles/eliminar/<?=$rol->id?>" class="btn btn-danger">Eliminar</a></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    
    <div class="panel-footer">
        <a href="/cakephp/roles/nuevo" class="btn btn-success">Nuevo</a>
    </div>
    
</div>