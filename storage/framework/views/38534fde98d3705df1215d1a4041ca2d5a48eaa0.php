<?php echo $__env->make('docEmpleados._common', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('header'); ?>

    <ol class="breadcrumb">
    	<li><a href="<?php echo e(route('home')); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
        <!--
        <?php if( $query_params = Request::input('q') ): ?>

            <li class="active"><a href="<?php echo e(route('docEmpleados.index')); ?>"><?php echo $__env->yieldContent('docEmpleadosAppTitle'); ?></a></li>
            <li class="active">condition(  

            <?php $__currentLoopData = $query_params; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(!$loop->first): ?> / <?php endif; ?> <?php echo e($key); ?> : <?php echo e($value); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            )</li>
        <?php else: ?>
            <li class="active"><?php echo $__env->yieldContent('docEmpleadosAppTitle'); ?></li>
        <?php endif; ?>
        -->
        <li class="active"><?php echo $__env->yieldContent('docEmpleadosAppTitle'); ?></li>
    </ol>

    <div class="">
        <h3>
            <i class="glyphicon glyphicon-align-justify"></i> <?php echo $__env->yieldContent('docEmpleadosAppTitle'); ?>
            <?php if (\Entrust::can('docEmpleados.create')) : ?>
            <a class="btn btn-success pull-right" href="<?php echo e(route('docEmpleados.create')); ?>"><i class="glyphicon glyphicon-plus"></i> Crear</a>
            <?php endif; // Entrust::can ?>
        </h3>

    </div>

    <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
        <div class="panel panel-default">
            <div id="headingOne" role="tab" class="panel-heading">
                <h4 class="panel-title">
                <a aria-controls="collapseOne" aria-expanded="true" href="#collapseOne" data-parent="#accordion" data-toggle="collapse" role="button">
                    <span aria-hidden="true" class="glyphicon glyphicon-search"></span> Buscar
                </a>
                </h4>
            </div>
            <div aria-labelledby="headingOne" role="tabpanel" class="panel-collapse collapse" id="collapseOne">
                <div class="panel-body">
                    <form class="DocEmpleado_search" id="search" action="<?php echo e(route('docEmpleados.index')); ?>" accept-charset="UTF-8" method="get">
                        <input type="hidden" name="q[s]" value="<?php echo e(@(Request::input('q')['s']) ?: ''); ?>" />
                        <div class="form-horizontal">

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="q_name_cont">DOCUMENTO</label>
                                <div class=" col-sm-9">
                                    <input class="form-control input-sm" type="search" value="<?php echo e(@(Request::input('q')['name_cont']) ?: ''); ?>" name="q[name_cont]" id="q_name_cont" />
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <input type="submit" name="commit" value="Buscar" class="btn btn-default btn-xs" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <?php if($docEmpleados->count()): ?>
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th><?php echo $__env->make('plantillas.getOrderLink', ['column' => 'id', 'title' => 'ID'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></th>
                            <th><?php echo $__env->make('CrudDscaffold::getOrderlink', ['column' => 'name', 'title' => 'DOCUMENTO'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></th>
                            <th class="text-right">OPCIONES</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $__currentLoopData = $docEmpleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $docEmpleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><a href="<?php echo e(route('docEmpleados.show', $docEmpleado->id)); ?>"><?php echo e($docEmpleado->id); ?></a></td>
                                <td><?php echo e($docEmpleado->name); ?></td>
                                <td class="text-right">
                                    <?php if (\Entrust::can('docEmpleados.edit')) : ?>
                                    <a class="btn btn-xs btn-primary" href="<?php echo e(route('docEmpleados.duplicate', $docEmpleado->id)); ?>"><i class="glyphicon glyphicon-duplicate"></i> Duplicar</a>
                                    <?php endif; // Entrust::can ?>
                                    <?php if (\Entrust::can('docEmpleados.edit')) : ?>
                                    <a class="btn btn-xs btn-warning" href="<?php echo e(route('docEmpleados.edit', $docEmpleado->id)); ?>"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                    <?php endif; // Entrust::can ?>
                                    <?php if (\Entrust::can('docEmpleados.destroy')) : ?>
                                    <?php echo Form::model($docEmpleado, array('route' => array('docEmpleados.destroy', $docEmpleado->id),'method' => 'delete', 'style' => 'display: inline;', 'onsubmit'=> "if(confirm('¿Borrar? ¿Esta seguro?')) { return true } else {return false };")); ?>

                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Borrar</button>
                                    <?php echo Form::close(); ?>

                                    <?php endif; // Entrust::can ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <?php echo $docEmpleados->appends(Request::except('page'))->render(); ?>

            <?php else: ?>
                <h3 class="text-center alert alert-info">Vacio!</h3>
            <?php endif; ?>

        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantillas.admin_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>