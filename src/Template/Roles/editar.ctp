<form action="/cakephp/roles/actualizar" method="post">
    
    <div class="panel panel-default">
        <div class="panel-heading">Editar Rol</div>
        <div class="panel-body">

            <div class="form-group">
                <label id="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" 
                       value="<?=$rol->nombre?>"/>
            </div>
            
            <input type="hidden" name="id" value="<?=$rol->id?>"/>

        </div>
        <div class="panel-footer">
            <input type="submit" value="Actualizar" class="btn btn-primary"/>
        </div>
    </div>
    
</form>