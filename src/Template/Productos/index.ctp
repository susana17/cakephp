<div class="panel panel-default">
    
    <div class="panel-heading">Lista de Productos</div>
    
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id', 'ID') ?></th>
                    <th><?= $this->Paginator->sort('categoria', 'CATEGORÍA') ?></th>
                    <th><?= $this->Paginator->sort('nombre', 'NOMBRE') ?></th>
                    <th><?= $this->Paginator->sort('precio', 'PRECIO') ?></th>
                    <th>IMAGEN</th>
                    <th width="100"></th>
                    <th width="100"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($productos as $producto){ ?>
                <tr>
                    <td><?=$producto->id?></td>
                    <td><?=$producto->categoria->nombre?></td>
                    <td><?=$producto->nombre?></td>
                    <td><?=$producto->precio?></td>
                    <td><?=$this->Html->image('/catalogo/'.$producto->getImagen(), ['width'=>64])?></td>
                    <td><?=$this->Html->link('Editar', '/productos/editar/'.$producto->id, ['class'=>'btn btn-warning'])?></td>
                    <td><?=$this->Html->link('Eliminar', '/productos/eliminar/'.$producto->id, ['class'=>'btn btn-danger'])?></td>
                </tr>
                <?php }?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="6">
                        <ul class="pagination">
         <!--                // Shows the page numbers-->
                         <?= $this->Paginator->numbers() ?>
         <!--                // Shows the next and previous links-->
                         <?= $this->Paginator->prev('« Anterior') ?>
                         <?= $this->Paginator->next('Siguiente »') ?>
                        </ul>
                    </td>
                    <td><span class="pagination text-center"><?= $this->Paginator->counter() ?></span></td>
                </tr>
            </tfoot>

        </table>
    </div>
    
    <div class="panel-footer">
        <?=$this->Html->link('Nuevo', '/productos/registrar/', ['class'=>'btn btn-success'])?>
    </div>
    
</div>
