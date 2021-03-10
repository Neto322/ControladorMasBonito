    
    <?php $__env->startSection("contenido_principal"); ?>
    

    


        <!-- Content Header (Page header) -->
        <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Noticias</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Noticas</a></li>
              <li class="breadcrumb-item active">Lista de Noticias</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

        <!-- Main content -->
        <section class="content">

    <!-- Default box -->
    <div class="card">
    <div class="card-header">
        <h3 class="card-title">Lista de Noticias</h3>

        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <?php if(Session::has("exito")): ?>
            <p style="color: #0e7a0e"><?php echo e(Session::get("exito")); ?></p>
        <?php endif; ?>
        <?php if(Session::has("error")): ?>
            <p style="color: #a11919a1"><?php echo e(Session::get("error")); ?></p>
        <?php endif; ?>
        <a href="<?php echo e(route("admin.noticias.create")); ?>"><button class="btn btn-primary">Crear nueva noticia</button></a>
        <table class="table table-bordered">
            <thead>
                <th>Titulo</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $noticias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $noticia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($noticia->titulo); ?></td>
                        <td>
                        <a href="<?php echo e(route("admin.noticias.show", $noticia->id)); ?>"><button class="btn btn-xs btn-primary">VER</button></a>
                        <a href="<?php echo e(route("admin.noticias.edit", $noticia->id)); ?>"><button class="btn btn-xs btn-primary">Editar</button></a>
                        <button class="btn btn-xs btn-danger" type="button" data-toggle="modal" data-target="#confirmarEliminacion<?php echo e($noticia->id); ?>">Eliminar</button>
                        <div class="modal fade" id="confirmarEliminacion<?php echo e($noticia->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Confirmación de eliminación de noticia: <?php echo e($noticia->id); ?></h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <p>¿Esta seguro de eliminar la noticia: "<?php echo e($noticia->titulo); ?>"?</p>
                                </div>
                                <div class="modal-footer">
                                  <form method="POST" action="<?php echo e(route("admin.noticias.destroy", $noticia->id)); ?>">
                                    <?php echo csrf_field(); ?> 
                                    <?php echo method_field('delete'); ?> 
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Pie de la tabla de lista de noticia
    </div>
    <!-- /.card-footer-->
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Manuel Ernesto\Desktop\Graficos Avanzados\ControladorMasBonito\resources\views/admin/noticias/index.blade.php ENDPATH**/ ?>